@extends('docs')

@section('docs')
# Entity Containers

An entity container is an entity which can dynamically contain multiple other entities. For example, an order entity can contain products, addresses, a customer etc.

These allow decoupling of packages, so for example may have categories but no features. Since a category is an entity container it allows the features entity to insert itself within a category from the features package.

## Creating an entity container

An entity container must implement the `EntityContainerInterface`.

```php
use Shopavel\Entities\EntityContainerInterface;
use Shopavel\Entities\EntityCollection;

class Order implements EntityContainerInterface {

    protected $entityCollection;

    public function setEntities(EntityCollection $collection)
    {
        $this->entityCollection = $collection;
    }

    public function getEntities()
    {
        return $this->entityCollection;
    }

    public function getEntity($type)
    {
        return $this->entityCollection->get($type);
    }

    public function hasEntity($type)
    {
        return $this->entityCollection->has($type);
    }

    public function __call($method, $parameters)
    {
        if ($this->hasEntity($method))
        {
            return $this->getEntity($type);
        }

        return parent::__call($method, $parameters);
    }

}
```

@stop