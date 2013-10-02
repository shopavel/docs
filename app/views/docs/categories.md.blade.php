@extends('docs')

@section('docs')
# Categories

Categories can be used to group your products in any manner you like. Categories can be nested, and a single product can be in multiple categories.

Using the `Category` alias, you can access the standard eloquent model methods, e.g.

```php
$category = Category::find(1);
```

#### Getting the products in a category

```php
// On a model
$products = $category->getProducts();

// From the repository
$products = app('categories')->getProductsInCategory($categoryId);
```

#### Querying the products in a category

```php
// On a model
$products = $category->products()->where('name', '=', 'Jelly');

// From the repository
$products = app('categories')->productsInCategory($categoryId)
    ->where('name', '=', 'Jelly');
```

@stop