# Laravel-dashboard                                داشبورد لاراول
>Basic laravel dashboard for speed projects.        یک داشبورد ساده برای افزایش سرعت برنامه نویسی

[![Latest Stable Version](https://img.shields.io/packagist/v/komeyl/dashboard)](https://packagist.org/packages/komeyl/dashboard)
[![Total Downloads](https://poser.pugx.org/komeyl/dashboard/downloads)](https://packagist.org/packages/komeyl/dashboard)
[![Latest Unstable Version](https://poser.pugx.org/komeyl/dashboard/v/unstable)](https://packagist.org/packages/komeyl/dashboard)
[![License](https://poser.pugx.org/komeyl/dashboard/license)](https://packagist.org/packages/komeyl/dashboard)




## Installation

```sh
composer require komeyl/dashboard

php artisan command:InstallDashboard

```
And you see

```sh
Copied Directory [komeyl/dashboard/src/Views] To [/resources/views/dashboard]
Copied Directory [komeyl/dashboard/src/Assets] To [/public/assets]
Dashboard was installed successfully.

       ____                  _       _                                  _
      |  _ \    __ _   ___  | |__   | |__     ___     __ _   _ __    __| |
      | | | |  / _` | / __| | '_ \  | '_ \   / _ \   / _` | | '__|  / _` |
      | |_| | | (_| | \__ \ | | | | | |_) | | (_) | | (_| | | |    | (_| |
      |____/   \__,_| |___/ |_| |_| |_.__/   \___/   \__,_| |_|     \__,_|

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

_For more examples and usage, please refer to the wiki._


## Meta

Komeyl Kalbali  –  komeyl.kalbali.dev@gmail.com

[https://github.com/Komeyl-dev](https://github.com/Komeyl-dev)
