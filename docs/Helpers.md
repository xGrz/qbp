# Helpers

<!-- TOC -->
  * [Money](#money)
  * [Postal code](#postal-code)
<!-- TOC -->

## Money

Money helper is formatting currency values.
```php
money(int|string $amount, bool $shouldDisplayZero) = true;
```
This helper returns `xGrz\Qbp\Helpers\Money` object. This object implements __toString() magic method, so each time you try to display it for example in blade it will return formatted value.

`Money::class` provides chainable methods:
- `->shouldDisplayZero(bool $shouldDisplayZero = true)` - if amount is equal to zero object returns empty string
- `->multiply(int|float $multiplier)` - multiplies value by provided multiplier
- `->addPercent(int|float $percent)` - add specified percent of amount (useful for VAT)
- `->subtractPercent(int|float $percent)` - subtract percent of amount (useful for discounts)
- `->thousandsSeparator(string $separator)` - set your custom thousands separator (@ is reserved)
- `->decimalSeparator(string $separator)` - set your custom decimal separator (@ is reserved)
- `->currency(string|null $currency, bool $beforeAmount = false)` - add currency symbol. Second parameter describe place of currency (before/after amount). By default, currency is not returned. 

Output methods:
- `->toNumber()` - returns int|float value
- `->getAmount()` - returns amount in cents
- `->format()` - returns formatted string (same as __toString())


Last useful method is _static_ `isValid()` for testing amounts:
```php
Money::isValid($amount): bool;
```
___

## Postal code

This helper is based on [Brick\Postcode](https://github.com/brick/postcode) package.
This awesome package provides postal code formatter logic. We provided useful global helper.

### Get formatted postal code
```php
postalCode($postalCode, $countryCode = 'PL');
```

### Render postal code in blade
If you use this helper as text (in blade) it will return formatted postal code for specified country. 
```bladehtml
{{postalCode('02777', 'PL')}} // 02-777
```

### Store postal code in database
If you need to store postalCode in database you can use raw() method:
```php
postalCode($postalCode, $countryCode = 'PL')->raw();
```

### Validate postal code
This method will return boolean isValid or not.
```php
postalCode($postalCode, $countryCode = 'PL')->isValid();
```
