<?php

namespace xGrz\Qbp\Tests\Feature;

use Tests\TestCase;
use xGrz\Qbp\Exceptions\MoneyValidationException;
use xGrz\Qbp\Helpers\Money;

class MoneyTest extends TestCase
{

    public function test_can_create_money_object()
    {
        $money = Money::from('300,30');

        $this->assertEquals('300,30', $money->format());
        $this->assertEquals(300.3, $money->toNumber());
    }

    public function test_can_create_money_object_with_helper()
    {
        $money = money('300,30');

        $this->assertEquals('300,30', $money->format());
        $this->assertEquals(300.3, $money->toNumber());
    }

    public function test_can_change_default_decimal_separator()
    {
        $money = money('300,30');

        $this->assertEquals('300,30', $money);
        $this->assertEquals('300-30', $money->decimalSeparator('-'));
    }

    public function test_can_change_default_thousands_separator()
    {
        $money = money(1123300.3);

        $this->assertEquals('1123300,30', $money->format());
        $this->assertEquals('1 123 300,30', $money->thousandsSeparator(' '));
    }

    public function test_return_zero_values_in_default_configuration()
    {
        $money = money(0);

        $this->assertEquals('0,00', $money);
    }

    public function test_return_empty_string_when_display_zero_is_disabled()
    {
        $money = money(0, false);

        $this->assertEquals('', $money);
    }

    public function test_add_currency_before_value()
    {
        $money = money(1)->currency('PLN', true);

        $this->assertEquals('PLN 1,00', $money->format());
    }

    public function test_add_currency_after_value()
    {
        $money = money(1)->currency('PLN', false);

        $this->assertEquals('1,00 PLN', $money->format());
    }

    public function test_add_currency_before_value_without_space()
    {
        $money = money(1)->currency('PLN', true, false);

        $this->assertEquals('PLN1,00', $money->format());
    }

    public function test_add_currency_after_value_without_space()
    {
        $money = money(1)->currency('PLN', false, false);

        $this->assertEquals('1,00PLN', $money->format());
    }

    public function test_add_percent()
    {
        $money = money(36.58)->addPercent(23)->toNumber();

        $this->assertEquals(44.99, $money);

    }

    public function test_subtract_percent()
    {
        $money = money(45)->subtractPercent(23)->toNumber();

        $this->assertEquals(36.59, $money);
    }

    public function test_multiply_amount()
    {
        $money = money(100)->multiply(2.5);

        $this->assertEquals(250, $money->toNumber());
    }

    public function test_multiply_with_add_percent_combined()
    {
        $money = money("36,59")->multiply(10)->addPercent(23);

        $this->assertEquals(450.06, $money->toNumber());
    }

    public function test_add_percent_with_multiply_combined()
    {
        $money = money("36,59")->addPercent(23)->multiply(10);

        $this->assertEquals(450.1, $money->toNumber());
    }

    public function test_incorrect_amount_throws_exception()
    {
        $this->expectException(MoneyValidationException::class);
        $this->expectExceptionMessage('Amount is not a number');
        money('PLN 200');
    }

    public function test_amount_validation_success()
    {
        $this->assertTrue(Money::isValid('200.12'));
        $this->assertTrue(Money::isValid('200.12'));
        $this->assertTrue(Money::isValid(' 200,12'));
        $this->assertTrue(Money::isValid('200,12 '));
        $this->assertTrue(Money::isValid(' 200,12 '));
        $this->assertTrue(Money::isValid(200.122));
    }


    public function test_amount_validation_fails()
    {
        $this->assertFalse(Money::isValid('A200.12'));
        $this->assertFalse(Money::isValid('200.12PLN'));
        $this->assertFalse(Money::isValid('$200,12'));
        $this->assertFalse(Money::isValid('200,12$'));
        $this->assertFalse(Money::isValid('20-12'));
    }

}
