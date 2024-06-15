# Nav-Item

NavItem is simple wrapper for navigation icons.
There is only one extra attribute `routeName`.

> Please provide routeName attribute as string. Component will detect is route path active or not.
> Also, it will wrap nav-item into container with link to this route.

```bladehtml
<x-p-nav-item routeName="home"></x-p-nav-item>
```

## Nav-item content
As a content of nav-item you can pass text or some elements. Typically, you cas pass icon and text:
```bladehtml
<x-p-nav-item route-name="tests">
    <x-p::icons.truck class="w-8 h-8"/>
    <div>ShipmentDraft</div>
</x-p-nav-item>
```
In that case component will render icon and text horizontally, but if your screen is smaller then tailwind `md` definition it changes to vertically placement.
You can override this behaviour by passing tailwind classes into nav-item component.
