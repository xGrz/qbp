# Status (inline)


## Direct way to set label and color
You can render status component manually defining label and color

```bladehtml
<x-p-status status="Test" color="primary"/>
```
> `status` - pass label text

> `color` - one of `primary` _(default)_, `gray`, `danger`, `warning`, `success`

## Use enum status
You can pass status enum 

```bladehtml
<x-p-status :status="$status" />
```
If you are holding status as enum you can add methods (into enum) `getLabel()` and `getColor()`. Status component will detect it and apply as label and color.
* `getLabel()` method should return string value. 
* `getColor()` should return one of `primary`, `gray`, `danger`, `warning`, `success`.
