@extends('docs')

@section('docs')
# Configuration

If you have started from the `shopavel/shopavel` repository then you will already have all the required configuration files.

## Customising your config

There are several config options that shopavel provides that you should have a look at before progressing with your project. These include things like database table name prefix and *foobar*.

See the relevant package documentation for specific configuration options.

## Migrations

When you are happy with your configurations you should migrate the shopavel tables using:

```bash
$ php artisan shopavel:migrate
```

@stop