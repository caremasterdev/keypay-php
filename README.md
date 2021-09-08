# KeyPay PHP

[![Latest Version on Packagist](https://img.shields.io/packagist/v/healyhatman/keypay-php.svg?style=flat-square)](https://packagist.org/packages/healyhatman/keypay-php)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/healyhatman/keypay-php/run-tests?label=tests)](https://github.com/healyhatman/keypay-php/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/healyhatman/keypay-php/Check%20&%20fix%20styling?label=code%20style)](https://github.com/healyhatman/keypay-php/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/healyhatman/keypay-php.svg?style=flat-square)](https://packagist.org/packages/healyhatman/keypay-php)

A client library for the [KeyPay API](https://api.keypay.com.au/), built from the provided OpenAPI v2 specification

## Requirements
- PHP 7.4
## Installation

You can install the package via composer:

```bash
composer require healyhatman/keypay-php
```

## Usage
Before resource requests can be made, the application must be authorised. KeyPay supports other authorisation flows, but this package assumes you're using OAuth2

### Authorisation Code Flow
See [Healyhatman/oauth2-keypay](https://github.com/Healyhatman/oauth2-keypay) for instructions on obtaining Oauth2 credentials

## Interacting with the API
Once you have a valid access token, you can instantiate a KeypayPHP\Application, and use it to help build the appropriate API object and the desired methods.

### Insantiate an Application
```php
$application = new \KeypayPHP\Application($access_token);
```
### Access a particular API Group
All of the API classes are available under ``Swagget\Client\Api``. Using ``forApi()`` will allow you to access the API using your application object's transport
```php
$employees = $application->forApi('Swagger\Client\Api\EmployeeApi')->auEmployeeGetEmployees($business_id);
```

## Testing

Not implemented yet, one day

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Kamron Brooks](https://github.com/healyhatman)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
