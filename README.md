![Packagist Downloads](https://img.shields.io/packagist/dt/peterfox/laravel-static-analysis-starter-kit)

# The Laravel Static Analysis Starter Kit

This starter template is less for making projects and more for educational purposes.
When creating a project with this starter kit you can quickly play around with static analysis tools
with Laravel.

## How to use it

Have the Laravel installer installed

```shell
laravel new --using peterfox/laravel-static-analysis-starter-kit
```

## What's installed?

This starter kit is to demo the use of:

* [PHPStan](https://phpstan.org/)
* [Rector](https://getrector.com/)
* [Easy Coding Standards](https://github.com/easy-coding-standard/easy-coding-standard) (replaces Laravel Pint)

## How to run

You can action all of these in one go using:

```shell
composer ci
```

This will run tests as well between linting and phpstan.

## What's configured?

### PHPStan

The project includes the following PHPStan extensions:

* [Larastan](https://github.com/larastan/larastan) - Helps analyse for Laravel related issues
* [PHPStan deprecated warnings](https://github.com/phpstan/phpstan-deprecation-rules) - Finds use of deprecated code
* [PHPStan webmozart/assert](https://github.com/phpstan/phpstan-webmozart-assert) - Allow extra detections via [webmozart/assert](https://github.com/webmozart/assert)

At current the `phpstan.neon.dist` config sets level 6 and covers the app and tests folders.

### EasyCoding Standards

### Rector


