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

View::composer('docs', function($view)
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
                'Collections / Containers'  => '/docs/collections',
                'Nested Sets'  => '/docs/nested-sets',
                'Transactions' => '/docs/transactions',
            )
        ),
    );

    $view->with('sidenav', $sidenav);
});

View::composer('releases', function($view)
{
    $sidenav = array(
        'Current' => array(
            'url' => '#',
            'subnav' => array(
                'alpha1' => '/releases/alpha1',
            )
        ),
        'Future' => array(
            'url' => '#',
            'subnav' => array(
                'alpha2' => '/releases/alpha2',
            )
        ),
    );

    $view->with('sidenav', $sidenav);
});

Route::get('/', function()
{
    return View::make('index');
});

Route::get('/tutorial', function()
{
    return View::make('tutorial');
});

Route::get('/docs', function()
{
    return View::make('docs.getting-started');
});

Route::get('/{parent}/{slug}', function($parent, $slug)
{
    return View::make($parent . '.' . $slug);
});