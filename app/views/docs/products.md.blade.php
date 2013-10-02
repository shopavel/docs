@extends('docs')

@section('docs')
# Products

Products are the most fundamental objects that exist within shopavel. A product is something that can be listed for a price (including &pound;0.00).

That something could represent a real physical object, be a reference to a digital file or even access to a paid-for service. Anything you can put a price on.

You can access the product model using the `Product` alias, this gives you all the standard options as any eloquent model, e.g.

```php
$product = Product::find(1);
```

## Prices

Each product can have several prices associated with it, for example `retail` and `online`.

#### Getting a product's prices

```php
foreach($product->getPrices() as $type => $price)
{
    echo $type . ': ' . $price;
}
```

#### Getting a specific price

```php
$retail = $product->getPrice('retail');
```

#### Querying product prices

The `prices()` method returns the `HasMany` relationship.

```php
$prices = $product->prices()->orderBy('price', 'desc');
```

@stop