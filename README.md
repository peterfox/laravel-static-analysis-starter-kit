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

* [Larastan](https://github.com/larastan/larastan) - Helps analyse for Laravel related issues.
* [PHPStan deprecated warnings](https://github.com/phpstan/phpstan-deprecation-rules) - Finds use of deprecated code.
* [PHPStan webmozart/assert](https://github.com/phpstan/phpstan-webmozart-assert) - Allow extra detections via [webmozart/assert](https://github.com/webmozart/assert).
* [PHPStan PHPUnit](https://github.com/phpstan/phpstan-phpunit) - Highlights issues with PHPUnit tests.
* [Simplify PHPStan Rule](https://github.com/symplify/phpstan-rules) - Additional Rules around clean architecture.

At current the [`phpstan.neon.dist`](phpstan.neon.dist) config sets level 6 and covers the app and tests folders.

### EasyCoding Standards

EasyCoding Standards is a wrapper around PHP CS Fixer in the same way Laravel Pint is but it makes the config easier
to write. Instead of JSON, it's a PHP file that IDEs will be able to auto-complete with.

The config for EasyCoding Standards lives in [`ecs.php`](ecs.php).

### Rector

Rector is for automatically fixing, upgrading and improving code. This will act in the same way PHP CS Fixer does but
goes even further but performing a type hint analysis before applying rules.

The config for rector lives in [`rector.php`](rector.php).


