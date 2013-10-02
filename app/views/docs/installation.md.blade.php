@extends('docs')

@section('docs')
# Installation

## Install Composer

Shopavel's dependancies are installed using Composer, [follow the instructions here](http://getcomposer.org/doc/00-intro.md) to install it.

## Install Shopavel

### Via composer create-project

You can create a new shopavel project and install it's dependancies by calling:

```bash
$ composer create-project shopavel/shopavel --prefer-dist
```

### Manually

Alternatively you can download the source code from [github](http://github.com/shopavel/shopavel) and run `composer install` to install the dependancies. You'll then need to [manually configure your project](/docs/manual-configuration).

@stop