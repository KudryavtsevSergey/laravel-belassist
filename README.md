# Laravel currency package

## Installation

composer.json

```json
{
    "repositories": [
        {
            "type": "git",
            "url": "https://github.com/KudryavtsevSergey/laravel-currency.git"
        }
    ],
    "require": {
      "sun/currency": "dev-master"
    }
}
```

After updating composer, add the service provider to the ```providers``` array in ```config/app.php```

```php
[
    Sun\Currency\CurrencyServiceProvider::class,
];
```

And add alias:
```php
[
    'Currency' => Sun\Currency\Facade::class,
];
```

Then:

```shell script
php artisan migrate
```
