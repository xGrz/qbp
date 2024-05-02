# Button
![Buttons palette](images/buttons.jpg)


## Create button component:
```bladehtml
<x-p-button>
    TEXT
</x-p-button>
```

## Render button as link
Sometimes you have to render link with button layout. Just add `href` attribute.   
If you pass `href` attribute component will render <a></a> html tag instead of button.
```bladehtml
<x-p-button href="#">
    TEXT
</x-p-button>
```


## Colors
By default, you can use predefined colors for button: `success`,  `info` `warning`, `danger`, `gray`, `primary` (default), `disabled`.

```bladehtml
<x-p-button color="success">
    TEXT
</x-p-button>
```
If you want to provide own styling set color attribute to `none` and use `class` attribute.

## Sizes

You can provide a predefined size: `small`, `regular` (default), `large`. If you would like to pass own styling set `color` attribute to `none` and use `class` attribute.

```bladehtml
<x-p-button size="large">
    Large button
</x-p-button>
```

## Disabled (state)

Component reacts to disabled attribute. You should not pass any value.
Warning: If You pass empty string `disabled=""` component will be active! 
If you pass any string as parameter `disabled="ANY"` component will be disabled!

```bladehtml
<x-p-button disabled>
    Large button
</x-p-button>
```
If you pass `disabled` prop into button as link component it will render styled `span` instead of `a`. 
