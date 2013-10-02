<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

View::composer('layout-nav', function($view)
{
    $sidenav = array(
        'Getting Started' => array(
            'url' => '/docs/getting-started',
            'subnav' => array(
                'Installation' => '/docs/installation',
                'Configuration' => '/docs/configuration',
                'Manual Configuration' => '/docs/manual-configuration',
            )
        ),
        'Themes' => array(
            'url' => '/docs/themes',
            'subnav' => array(
                'Installing Themes' => '/docs/installing-themes',
                'Creating Themes' => '/docs/creating-themes',
            )
        ),
        'Commerce' => array(
            'url' => '/docs/commerce',
            'subnav' => array(
                'Products' => '/docs/products',
                'Categories' => '/docs/categories',
                'Features / Variations' => '/docs/variations',
                'Stock' => '/docs/stock',
                'Customers' => '/docs/customers',
                'Orders' => '/docs/orders'
            )
        ),
        'Purchasing' => array(
            'url' => '/docs/purchasing',
            'subnav' => array(
                'Suppliers' => '/docs/suppliers',
                'Warehouses' => '/docs/warehouses'
            )
        ),
        'Accounting' => array(
            'url' => '/docs/accounting',
            'subnav' => array(
                'Reports' => '/docs/reports',
            )
        ),
        'Core' => array(
            'url' => '/docs/core',
            'subnav' => array(
                'Entity Containers' => '/docs/entity-containers'
            )
        ),
    );

    $view->with('sidenav', $sidenav);
});

Route::get('/', function()
{
    return View::make('index');
});

Route::get('/docs', function()
{
    return View::make('docs.getting-started');
});

Route::get('/docs/{slug}', function($slug)
{
    return View::make('docs.' . $slug);
});