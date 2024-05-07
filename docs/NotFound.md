# Not found template

This component accepts 2 extra props:
`message` - text message when something was not found
`iconSize` - numeric (integer) value for icon size (see below)

> Icon size must be compatible with tailwind css width/height values. It is set as `w-{{iconSize}}` and `h-{{iconSize}}`

## Code example:
```
<x-p-not-found message="Your message when not found" iconSize="10"/>
```

## Output example

With message: Items not found

![Not found example](images/not-found.jpg)

