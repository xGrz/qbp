<?php

use xGrz\Qbp\Exceptions\MoneyValidationException;
use xGrz\Qbp\Helpers\Money;

if (!function_exists('money')) {

    /**
     * @throws MoneyValidationException
     */
    function money(string|int|float $amount): Money
    {
        return Money::from($amount);
    }

}
