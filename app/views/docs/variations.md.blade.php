@extends('docs')

@section('docs')
# Features

A feature can be any identifying difference on a product, for example colour, size, style etc. Additionally each feature can contain any number of options, such as red, green and blue.

Using the `Feature` alias you can access the standard eloquent model methods, e.g.

```php
$feature = Feature::find(1);
```

#### Getting a features options

```php
// Directly from the feature
$options = $feature->getOptions();

// As a queryable object
$options = $feature->options()->orderBy('name', 'asc');

// Looping the property
foreach ($feature->options as $option)
{
    echo $option->name;
}
```

#### Adding an option to a feature

```php
$feature = Feature::where('name', '=', 'Colour')->get(0);

$option = new \Shopavel\Features\Option(array('name' => 'Red', 'code' => 'R'));

$feature->options()->save($option);
```

## Attaching features to categories

You can optionally attach features to categories, this can help reduce clutter within a CMS or on product filtering within categories.

#### Attaching a feature to a category

```php
// Using eloquent
$feature->categories()->attach($category->id)

// Using the repository
app('features')->attachToCategory($feature->id, $category->id);
```

#### Getting the features attached to a category

```php
$features = app('features')->getByCategory($categoryId);
```

# Variations

A variation can be made up of any number of features, for example you may have a shirt variation of red, medium, polo for the features colour, size and style respectively.

## Working with product variations

#### Getting the variations on a product

```php
$variations = $product->getVariations();

foreach ($product->variations as $variation)
{
    foreach ($variation->features as $feature)
    {
        // Will echo 'Colour - Red' for example
        echo $feature->name . ' - ' . $feature->option->name;
    }
}
```

By default these methods will list all the variations, whether marked as available or unavailable.

#### Getting only available variations

```php
foreach ($product->availableVariations as $variation)
{
    // ...
}
```

@stop