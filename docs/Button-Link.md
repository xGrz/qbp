# Button-Link

Creates link that looks like a button.

```bladehtml
<x-p::buttonlink href="{{ route('SOME ROUTE NAME') }}">
    TEXT
</x-p::buttonlink>
```

## Color
By default, you can use predefined colors for button:
* `success`
* `info`
* `warning`
* `danger`
* `gray`
* `primary` (default)

```bladehtml
<x-p::buttonlink href="{{ route('SOME ROUTE NAME') }}" color="danger">
    Danger button
</x-p::buttonlink>
```
If you want to provide own styling set color attribute to empty value and provide your classes in class attribute.

## Size

You can provide a predefined size:
* `small`
* `regular` (default)
* `large`

```bladehtml
<x-p::buttonlink href="{{ route('SOME ROUTE NAME') }}" size="large">
    Large button
</x-p::buttonlink>
```
