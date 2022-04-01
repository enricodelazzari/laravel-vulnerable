# Laravel vulnerable

[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/enricodelazzari/laravel-vulnerable/run-tests?label=tests)](https://github.com/enricodelazzari/laravel-vulnerable/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/enricodelazzari/laravel-vulnerable/Check%20&%20fix%20styling?label=code%20style)](https://github.com/enricodelazzari/laravel-vulnerable/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)

Quickly and easily adds vulnerabilities to your project

## Installation

You can install the package via composer:

```bash
composer require enricodelazzari/laravel-vulnerable
```

## Usage

It's really simple to use. Just run this command:
```bash
php artisan make:vulnerability
```

When done, you should see this message:
> All done, your project is vulnerable!


## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](https://github.com/spatie/.github/blob/main/CONTRIBUTING.md) for details.

## Credits

- [Enrico De Lazzari](https://github.com/enricodelazzari)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
