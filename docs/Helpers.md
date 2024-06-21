# Helpers

## Money

...



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
