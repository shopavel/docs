@extends('docs')

@section('docs')
# Transactions

A transaction is an method that can be actioned against an object.

In the standard MVC setup the business logic would often either go in the controller or the model depending on your preferences. Either way, with larger systems this will lead to very large classes as you add more and more functionality. Transactions help break this up into it's constiuent parts.

## Creating transactions

Let's say we wanted to authenticate users on our website.

```php
class AuthTransaction extends \Shopavel\Transactions\Transaction {

    public function authenticate($email, $password)
    {
        // run authentication checks
    }

    public function logout()
    {
        // kill the current user session
    }

}
```

Typically you would make this available from a service provider, in this case the shopavel authentication transactions are on `app('customer.auth')`.


## Validators

Validators go hand-in-hand with transactions. A validator is used to run custom validation checks against an object. These can be passed into a transaction's constructor to be called prior to running the transaction.

```php
class CustomerExistsValidator extends \Shopavel\Validators\Validator {

    public function exists($email)
    {
        // throw an exception if the email address is already present
        // within the users table
    }

}
```

@stop
