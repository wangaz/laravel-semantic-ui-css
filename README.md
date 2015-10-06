# laravel Semantic UI CSS package

## Requirements
* composer (latest)
* laravel (version 5.1 or higher)


## Installation
1. Use composer to get this package `composer install wangaz/laravel-semantic-ui-css`
2. Register the this package in your config/app.php : Add `SUI\SUIServiceProvider::class` to the **providers** array
3. Run `php artisan vendor:publish --tag=public` in command line

## Hints
* If you are updating your laravel app via composer, this package will also be updated. You won't have to run the **vendor:publish** command mentioned above, this will be done automatically.
