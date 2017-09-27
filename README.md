# laravel Semantic UI CSS package
This laravel package provides [Semantic-UI-CSS](https://github.com/Semantic-Org/Semantic-UI-CSS) to your laravel project.

## Requirements
* laravel (version 5.5 or higher) OR lumen (5.5 or higher)


## Installation
1. Use composer to get this package `composer require wangaz/laravel-semantic-ui-css` or add `"wangaz/laravel-semantic-ui-css": ">=2.0 <3.0"` to your composer.json file
2. If you want to have jQuery and Semantic UI automatically updated, add to your `composer.json`: (You may need to insert some code parts to existing code)
```
    "scripts": {
      "post-update-cmd": [
        "php artisan vendor:publish --provider=\"Wangaz\\SUI\\LaravelSuiCssServiceProvider\" --force"
      ]
    }
```
Run `composer update` via CLI

3. In all other cases run `php artisan vendor:publish --provider="Wangaz\SUI\LaravelSuiCssServiceProvider" --force` in your CLI, if you want to updated jQuery and Semantic UI.

