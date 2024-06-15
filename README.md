# Laravel Quick Panel


Package contains basic blade views for data presentation.
This is free for private and commercial use AS IS.

## Installation

```
composer require xgrz/qbp
```

## Components

* [Table](docs/Table.md) / [With pagination](docs/Table-Pagination.md)
* [Pagination](docs/Pagination.md)
* [Modal](docs/Modal.md)
* [Icons](docs/Icons.md)
* [Form components](docs/FormComponents.md)
* [Button / Link button](docs/Button.md)
* [Nav-Item](docs/Nav-Item.md)
* [NotFound](docs/NotFound.md)
* [Paper](docs/Paper.md)
* [Inline status](docs/InlineStatus.md)

## Snippets
* [Default view template](docs/DefaultViewTemplate.md)
* [View with paginated table](docs/FullViewWithTable.md)

## Publish templates

You can publish templates by running in console:

```
php artisan vendor:publish --tag=quick-blade-panel
```

You can find published templates in `resources/views/vendor/quick-blade-panel` directory (by default).

## Configuration

Package uses simple configuration just by adding variables for templates.

| Variable name             | Data Type | Default                 | Description                      |
|---------------------------|-----------|-------------------------|----------------------------------|
| $`abp_appName`            | string    | (empty string)          | set your app name                |
| $`qbp_useTailwind`        | bool      | true                    | should load tailwind cdn         |
| $`qbp_apline`             | bool      | false                   | should load apline.js            |
| $`qbp_navigationTemplate` | string    | p::navigation.container | path to navigation container     |
| $`qbp_navigationItems`    | string    | (empty string)          | path to navigation item template |
| $`qbp_footerTemplate`     | string    | p::footer.content       | path to footer template          |

