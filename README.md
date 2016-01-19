# laravel Semantic UI CSS package
This laravel package provides [Semantic-UI-CSS](https://github.com/Semantic-Org/Semantic-UI-CSS) to your laravel project.

## Requirements
* composer (latest)
* laravel (version 5.0 or higher) OR lumen (5.0 or higher)


## Installation
1. Use composer to get this package `composer install wangaz/laravel-semantic-ui-css`
2. Register the this package in your config/app.php : Add `SUI\SUIServiceProvider::class` to the **providers** array
3. Run `php artisan vendor:publish --tag=public` in command line

## Hints
* If you are updating your laravel app via composer, this package will also be updated. You won't have to run the **vendor:publish** command mentioned above, this will be done automatically.
