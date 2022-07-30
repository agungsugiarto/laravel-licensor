# Licensor

[![Latest Version on Packagist](https://img.shields.io/packagist/v/agungsugiarto/laravel-licensor.svg?style=flat-square)](https://packagist.org/packages/agungsugiarto/laravel-licensor)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/agungsugiarto/laravel-licensor/run-tests?label=tests)](https://github.com/agungsugiarto/laravel-licensor/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/agungsugiarto/laravel-licensor/Fix%20PHP%20code%20style%20issues?label=code%20style)](https://github.com/agungsugiarto/laravel-licensor/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/agungsugiarto/laravel-licensor.svg?style=flat-square)](https://packagist.org/packages/agungsugiarto/laravel-licensor)

This package enables license management system for your existing Laravel 7 app. If you sell your scripts (not necessarily based on Laravel) and would like to manage license keys remotely - this package can be useful to you.
Works in pair with [sribna/licensee](http://github.com/sribna/licensee).

**Note: this package does not provide any UI.**

## What included
 - Plans and plan features
 - Middleware to check user access according to purchased plan
 - Key activation/deactivation
 - Periodic key verification

## How it works

The customer chooses a plan and receives a generated public key. The public key is not valid until activated.
To activate, the customer sends you the public key from his server.
You send the private key to the domain from which activation request was sent.
The client receives your response and saves the private key on his server. Now his app is fully functional.
In the future, the client will periodically send requests to update his private key.
If no updates are received within a certain period, then his script stops working.

## Installation

You can install the package via composer:

``` bash
$ composer require agungsugiarto/laravel-licensor
```

Run migration

``` bash
$ php artisan migrate
```

## Usage

See the [documentation](docs)

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Contributions are very welcome.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Sribna](https://github.com/sribna)
- [Agung Sugiarto](https://github.com/agungsugiarto)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
