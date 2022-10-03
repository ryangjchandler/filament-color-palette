# Let users pick a color from a fixed list of options.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/ryangjchandler/filament-color-palette.svg?style=flat-square)](https://packagist.org/packages/ryangjchandler/filament-color-palette)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/ryangjchandler/filament-color-palette/run-tests?label=tests)](https://github.com/ryangjchandler/filament-color-palette/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/ryangjchandler/filament-color-palette/Check%20&%20fix%20styling?label=code%20style)](https://github.com/ryangjchandler/filament-color-palette/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/ryangjchandler/filament-color-palette.svg?style=flat-square)](https://packagist.org/packages/ryangjchandler/filament-color-palette)



This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require ryangjchandler/filament-color-palette
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="filament-color-palette-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="filament-color-palette-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="filament-color-palette-views"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$filament-color-palette = new RyanChandler\FilamentColorPalette();
echo $filament-color-palette->echoPhrase('Hello, RyanChandler!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Ryan Chandler](https://github.com/ryangjchandler)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
