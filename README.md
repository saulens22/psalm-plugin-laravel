# Psalm plugin for Laravel

[![Packagist version](https://img.shields.io/packagist/v/psalm/plugin-laravel.svg)](https://packagist.org/packages/psalm/plugin-laravel)
[![Packagist downloads](https://img.shields.io/packagist/dt/psalm/plugin-laravel.svg)](https://packagist.org/packages/psalm/plugin-laravel)
[![Type coverage](https://shepherd.dev/github/psalm/laravel-psalm-plugin/coverage.svg)](https://shepherd.dev/github/psalm/laravel-psalm-plugin)
[![Tests](https://github.com/psalm/psalm-plugin-laravel/actions/workflows/test.yml/badge.svg)](https://github.com/psalm/psalm-plugin-laravel/actions/workflows/test.yml)
[![Tests](https://github.com/psalm/psalm-plugin-laravel/actions/workflows/test-laravel.yml/badge.svg)](https://github.com/psalm/psalm-plugin-laravel/actions/workflows/test-laravel.yml)

## Overview
This package brings static analysis and type support to projects using Laravel. Our goal is to find as many type-related
 bugs as possible, therefore increasing developer productivity and application health. Find bugs without the overhead
 of writing tests!
 
 ![Screenshot](/assets/screenshot.png)
 
 ## Versions
Laravel 6 | Laravel 7 | Laravel 8 | Laravel 9
--------- | --------- | --------- | -----------
v1.*      | v1.*      | v1.*      | v2.*
## Quickstart
Please refer to the [full Psalm documentation](https://psalm.dev/quickstart) for a more detailed guide on introducing Psalm
into your project.

First, start by installing Psalm if you have not done so already:
```bash
composer require --dev vimeo/psalm
./vendor/bin/psalm --init
```

Next, install this package and enable the plugin
```bash
composer require --dev psalm/plugin-laravel
./vendor/bin/psalm-plugin enable psalm/plugin-laravel
```

Finally, run Psalm to analyze your codebase
```bash
./vendor/bin/psalm
```

## How it works

Under the hood it just runs https://github.com/barryvdh/laravel-ide-helper and feeds the resultant stubs into Psalm, which can read PhpStorm meta stubs.

It also parses any database migrations it can find to try to understand property types in your database models.

