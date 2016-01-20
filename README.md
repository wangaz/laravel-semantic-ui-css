# laravel Semantic UI CSS package
This laravel package provides [Semantic-UI-CSS](https://github.com/Semantic-Org/Semantic-UI-CSS) to your laravel project.

## Requirements
* composer (latest)
* laravel (version 5.1 or higher) or lumen


## Installation
1. Use composer to get this package `composer require wangaz/laravel-semantic-ui-css` or add `"wangaz/laravel-semantic-ui-css": ">=0.3"` to your composer.json file
2. Add to your `composer.json`: (You may need to insert some code parts to existing code)
    "scripts": {
      "post-install-cmd": [
        "mkdir -p public/assets",
        "ln -sf vendor/wangaz/laravel-semantic-ui/src/assets/jquery public/assets/jquery",
        "ln -sf vendor/wangaz/laravel-semantic-ui/src/assets/semantic-ui public/assets/semantic-ui"
      ],
      "post-update-cmd": [
        "mkdir -p public/assets",
        "ln -sf vendor/wangaz/laravel-semantic-ui/src/assets/jquery public/assets/jquery",
        "ln -sf vendor/wangaz/laravel-semantic-ui/src/assets/semantic-ui public/assets/semantic-ui"
      ]
    }

3. Run `composer update` via CLI

## Hints
* If you are updating your laravel app via composer, this package will also be updated. You won't have to run the **vendor:publish** command mentioned above, this will be done automatically.
