# Horizon Config Tags

Tag tracking functionality is very useful and used by users. Based on this I realized that we always need to test horizon in other environments and unfortunately we need to recreate all tags for monitoring.

## How to use

### Prerequisites
To run this project, you must have `php >= 7.1` and `laravel\horizon >= 2.0`. This package is made for Laravel Horizon.

#### Step 1
Include in yours composer.json in the requirements these `"mustorze/horizon-config-tags": "1.0"` then run `composer update`

Or just run `composer require mustorze/horizon-config-tags`

#### Step 2
If you using **Laravel 5.5+** do you can skip this step.

Add the service provider in your `config/app.php` file:
```php
'providers' => [
    // ...
    Mustorze\ConfigTags\HorizonConfigTagsProvider::class,
];
```

#### Step 3
Add the monitored tags into `config/horizon.php` file:
```php
'monitored_tags' => [
//  'Your'
//  'Beautiful'
//  'Tags'
],
```

Well done just startup the Horizon.
