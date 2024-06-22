<?php

use xGrz\Qbp\Exceptions\MoneyValidationException;
use xGrz\Qbp\Helpers\Money;
use xGrz\Qbp\Helpers\PostalCode;

if (!function_exists('money')) {
    /**
     * @throws MoneyValidationException
     */
    function money(string|int|float|null $amount, bool $shouldDisplayZero = true): Money
    {
        return Money::from($amount, $shouldDisplayZero);
    }

}

if (!function_exists('postalCode')) {

    function postalCode(string $postalCode, string $country = 'PL'): PostalCode|string
    {
        return (new PostalCode($postalCode, $country));
    }
}

