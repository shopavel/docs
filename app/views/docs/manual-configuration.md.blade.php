@extends('docs')

@section('docs')
# Manual Configuration

If you have not started from the `shopavel/shopavel` standard project you will need to update your configuration files.

## App Providers & Aliases

In `app/config/app/php`, add the providers:

```php
'providers' => array(
    // ...
    'Shopavel\ShopavelServiceProvider',
    'Shopavel\Products\ProductsServiceProvider',
    'Shopavel\Categories\CategoriesServiceProvider',
    'Shopavel\Variations\VariationsServiceProvider',
    'Shopavel\Stock\StocksServiceProvider',
    'Shopavel\Customers\CustomersServiceProvider',
    'Shopavel\Orders\OrdersServiceProvider',
    'Shopavel\Suppliers\SuppliersServiceProvider',
    'Shopavel\Warehouses\WarehousesServiceProvider',
),
```

And the aliases:

```php
'aliases' => array(
    // ...
    'Product' => 'Shopavel\Products\Product',
)
```

## Publishing config files

You should then publish the package configurations using:

```bash
$ php artisan shopavel:config.publish
```

## Migrations

Finally you should run the migrations using:

```bash
$ php artisan shopavel:migrate
```
@stop