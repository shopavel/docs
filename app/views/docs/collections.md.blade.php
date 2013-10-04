@extends('docs')

@section('docs')
# Collections

Collections allow you to extend the functionality of array-like access on a property. For example, the `ImmutableCollection` can not be modified once created.

# Containers

A container is an entity which can dynamically contain multiple other entities through a collection. For example, an order entity can contain products, addresses, a customer etc.

This allows decoupling of packages, so for example you may be selling digital products and therefore do not require a delivery address to be attached to the order.

## Using the container trait

```php
use Illuminate\Database\Eloquent\Model;

class Order extends Model {

    // Inject the container trait methods
    use \Shopavel\Collection\Container;

}
```

### Adding entities to a container

Usually you will add entities to a container through events. Below are some basic examples of how to do this, though you may wish to use a [subscriber](http://laravel.com/docs/events#event-subscribers) instead.

#### Creating a container

```php
$order = new Order;

// Create a new collection with default values
$collection = new \Shopavel\Collections\Collection([
    'customer' => Customer::find(1),
]);

// Fire the event to find additional entities to add to the collection
Event::fire('order.entities', $collection);

// Pass the collection to the order
$order->setCollection($collection);
```

#### Adding an entity to container

```php
Event::listen('order.entities', function($collection)
{
    $addresses = new \Shopavel\Collections\Collection;
    $addresses->put('billing', \Shopavel\Locations\Address::find(1));
    $addresses->put('delivery', \Shopavel\Locations\Address::find(2));

    // Add the address collection to the order container collection
    $collection->put('addresses', $addresses);
});
```

#### Getting an entity in a container

Using the magic `__get()` method the addresses collection is now available as a property on the order.

```php
$addresses = $order->addresses;
```

@stop
