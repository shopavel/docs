@extends('docs')

@section('docs')
# Collections



# Containers

A container is an entity which can dynamically contain multiple other entities through a collection. For example, an order entity can contain products, addresses, a customer etc.

This allows decoupling of packages, so for example you may be selling digital products and so not require addresses.

## Using the container trait

```php
use Illuminate\Database\Eloquent\Model;

class Order extends Model {

    // Inject the container trait methods
    use \Shopavel\Collection\Container;

}
```

### Adding entities to a container

Usually you will add entities to a container through events.

#### Find container entities

```php
Event::fire('order.entities', $order);
```

#### Attach entity to container

```php
Event::listen('order.entities', function($order)
{
    $addresses = new \Shopavel\Collections\Collection;
    $addresses->put('billing', \Shopavel\Locations\Address::find(1));
    $addresses->put('delivery', \Shopavel\Locations\Address::find(2));

    // Add the address collection to the order container collection
    $order->getCollection()->put('addresses', $addresses);
});
```

#### Get an entity on a container

```php
$addresses = $order->addresses;
```

@stop
