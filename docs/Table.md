# Table element

<!-- TOC -->
* [Table element](#table-element)
  * [Create table](#create-table)
  * [Text align helper](#text-align-helper)
  * [Highlight rows on @hover](#highlight-rows-on-hover)
    * [Disable highlight on @hover](#disable-highlight-on-hover)
    * [Add own classes for @hover](#add-own-classes-for-hover)
  * [Table size](#table-size)
  * [Table data rows divider](#table-data-rows-divider)
  * [Full table example](#full-table-example)
<!-- TOC -->

## Create table
```bladehtml
<x-p-table>
    {{-- ... --}}
</x-p-table>
```
You can pass all html attributes into table component. However, there are some extra options for table.

## Text align helper
Literally all table components (for example: `<x-p-table />`, `<x-p-thead/>`,`<x-p-tbody/>`,`<x-p-td/>`) accepts attribute `left`, `right` or `center` for text alignment.
You can pass it without value to each of element for text-align. If you pass value to attribute it will render it with one exception - when you pass `false` it will be disabled.
```bladehtml
<x-p-thead left />
```
In above example all thead children will be text-left aligned.

## Highlight rows on @hover
By default, highlighting is enabled. It works only on table body rows. 
You can change default behaviour or styling.

### Disable highlight on @hover
If you want to disable hover highlighting please pass `highlight="false"` into table component.
```bladehtml
<x-p-table highlight="false" />
```

### Add own classes for @hover
If you want to change styling please add tailwind css classes as a value of `highlight`.
Tailwind style prefix `hover:` will be added in background.
```bladehtml
<x-p-table highlight="text-red-500" />
```

## Table size
There are three predefined sizes of table cells: `small`, `normal` _(default)_, `large`.
```bladehtml
<x-p-table size="large" />
```
You can pass own tailwind classes as `size` value to provide your own styles for th/td elements.
```bladehtml
<x-p-table size="px-0 py-3" />
```

![Table sizes](images\table-size.png)

## Table data rows divider
By default, rows divider is enabled. If you want to disable it pass `false` value to `divider` attribute.
```bladehtml
<x-p-table divider="false" />
```
You can pass own tailwind classes as `divider` value to provide your own styles for data rows.
```bladehtml
<x-p-table divider="border-2" />
```

## Full table example
```bladehtml
<x-p-table>
    <x-p-thead>
        <x-p-tr>
            <x-p-th>Heading column 1</x-p-th>
            <x-p-th>Heading column 2</x-p-th>
            <x-p-th>Heading column 3</x-p-th>
            <x-p-th>Heading column 4</x-p-th>
            <x-p-th>Heading column 5</x-p-th>
        </x-p-tr>
    </x-p-thead>
    <x-p-tbody>
        <x-p-tr>
            <x-p-td>Data 1</x-p-td>
            <x-p-td>Data 2</x-p-td>
            <x-p-td>Data 3</x-p-td>
            <x-p-td>Data 4</x-p-td>
            <x-p-td>Data 5</x-p-td>
        </x-p-tr>
    </x-p-tbody>
    <x-p-tfoot>
        <x-p-tr>
            <x-p-td>Footer 1</x-p-td>
            <x-p-td>Footer 2</x-p-td>
            <x-p-td>Footer 3</x-p-td>
            <x-p-td>Footer 4</x-p-td>
            <x-p-td>Footer 5</x-p-td>
        </x-p-tr>
    </x-p-tfoot>
</x-p-table>
```
