# Laravel-dashboard                                داشبورد لاراول
>Basic laravel dashboard for speed projects.        یک داشبورد ساده برای افزایش سرعت برنامه نویسی

[![Total Downloads](https://poser.pugx.org/komeyl/dashboard/downloads)](https://packagist.org/packages/komeyl/dashboard)
[![Latest Unstable Version](https://poser.pugx.org/komeyl/dashboard/v/unstable)](https://packagist.org/packages/komeyl/dashboard)
[![License](https://poser.pugx.org/komeyl/dashboard/license)](https://packagist.org/packages/komeyl/dashboard)



![](header.png)

## Installation

```
composer require komeyl/dashboard
```

```json
{
    "require": {
        "komeyl/dashboard": "dev-master"
    }
}
```


## Usage example
### just Enter example.com/dashboard 

publishes views

```
php artisan vendor:publish --tag=views --force
```

publishes assets

```
php artisan vendor:publish --tag=public --force
```

publishes translate

```
php artisan vendor:publish --tag=translate --force
```

publishes controllers

```
php artisan vendor:publish --tag=controllers --force
```

_For more examples and usage, please refer to the [Wiki][wiki]._

## Development setup

Describe how to install all development dependencies and how to run an automated test-suite of some kind. Potentially do this for multiple platforms.

```sh
make install
npm test
```


## Meta

Your Name – [@YourTwitter](https://twitter.com/dbader_org) – YourEmail@example.com

Distributed under the XYZ license. See ``LICENSE`` for more information.

[https://github.com/yourname/github-link](https://github.com/dbader/)
