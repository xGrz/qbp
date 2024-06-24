<?php

namespace xGrz\Qbp\Helpers;

use Brick\Postcode\InvalidPostcodeException;
use Brick\Postcode\PostcodeFormatter;
use Brick\Postcode\UnknownCountryException;

class PostalCode
{
    private ?string $postalCode = null;
    private ?string $country = null;

    public function __construct(string $postalCode, string $country)
    {
        self::setCountry($country);
        self::setPostalCode($postalCode);
    }

    public function setPostalCode(string $postalCode): static
    {
        $this->postalCode = str($postalCode)
            ->replace([' ', '-'], '')
            ->whenStartsWith(
                $this->country,
                fn($postalCode) => str($postalCode)->replaceStart($this->country, ''))
            ->upper();

        return $this;
    }

    public function setCountry($country): static
    {
        $this->country = str($country)
            ->upper();

        $this->postalCode = str($this->postalCode)
            ->replaceStart($country, '');

        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    /**
     * @throws UnknownCountryException
     * @throws InvalidPostcodeException
     */
    public function format(): string
    {
        return (new PostcodeFormatter)
            ->format($this->country, $this->postalCode);
    }

    /**
     * @throws UnknownCountryException
     * @throws InvalidPostcodeException
     */
    public function __toString(): string
    {
        return $this->format();
    }

    public function raw(): string
    {
        return $this->postalCode;
    }

    public function isValid(): bool
    {
        try {
            self::format();
        } catch (InvalidPostcodeException|UnknownCountryException $e) {
            return false;
        }
        return true;
    }
}
