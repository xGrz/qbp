<?php

namespace xGrz\Qbp\Helpers;

use Illuminate\Support\Number;
use xGrz\Qbp\Exceptions\MoneyValidationException;

class Money
{
    private int|float $amount = 0;
    private bool $shouldDisplayZero = true;
    private string $decimalSeparator = ',';
    private string $thousandsSeparator = '';
    private ?string $currency = null;
    private bool $currencyBeforeAmount = false;


    /**
     * @throws MoneyValidationException
     */
    private function __construct($amount)
    {
        if (empty($amount)) $amount = 0;
        $amount = is_numeric($amount) ? $amount : $this->toNumeric($amount);
        if (!is_numeric($amount)) throw new MoneyValidationException('Amount is not a number');
        $this->amount = (int)round($amount * 100);
    }

    private function toNumeric($amount): string
    {
        return str($amount)
            ->replace(' ', '')
            ->replace(',', '.')
            ->toString();
    }

    public function decimalSeparator(string $separator): static
    {
        if ($separator === '@') throw new \ParseError('[@] cannot be a decimal separator.');
        $this->decimalSeparator = $separator;
        return $this;
    }

    public function thousandsSeparator(string $separator): static
    {
        if ($separator === '@') throw new \ParseError('[@] cannot be a thousands separator.');
        $this->thousandsSeparator = $separator;
        return $this;
    }

    public function currency(string|null $currency, bool $beforeAmount = false): static
    {
        $this->currency = $currency;
        $this->currencyBeforeAmount = $beforeAmount;
        return $this;
    }

    public function toNumber(): float|int
    {
        return round($this->amount / 100, 2);
    }

    public function getAmount(): int
    {
        return $this->amount;
    }

    public function format(): ?string
    {
        if (!$this->shouldDisplayZero && $this->amount ==0) return null;

        return str(Number::format($this->amount / 100, 2))
            ->replace('.', '@')
            ->replace(',', $this->thousandsSeparator)
            ->replace('@', $this->decimalSeparator)
            ->when(
                $this->currency && $this->currencyBeforeAmount,
                fn($amount) => str($amount)->prepend($this->currency)
            )
            ->when(
                $this->currency && !$this->currencyBeforeAmount,
                fn($amount) => str($amount)->append($this->currency)
            )
            ->toString();
    }

    public function shouldDisplayZero(bool $shouldDisplayZero = true): static
    {
        $this->shouldDisplayZero = $shouldDisplayZero;
        return $this;
    }

    public function multiply(int|float $multiplier): static
    {
        $this->amount = round($this->amount * $multiplier);
        return $this;
    }

    public function addPercent(int|float $percent): static
    {
        $this->amount += round($this->amount / 100 * $percent);
        return $this;
    }

    public function subtractPercent(int|float $percent): static
    {
        $this->amount = ($this->amount / (100 + $percent)) * 100;
        return $this;
    }

    public function __toString(): string
    {
        return $this->format() ?? '';
    }

    public static function isValid($amount): bool
    {
        try {
            new self($amount);
            return true;
        } catch (MoneyValidationException $e) {
        }
        return false;
    }

    /**
     * @throws MoneyValidationException
     */
    public static function from($amount, bool $shouldDisplayZero = true): static
    {
        return (new self($amount))->shouldDisplayZero($shouldDisplayZero);
    }
}
