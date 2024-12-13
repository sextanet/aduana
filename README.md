# Aduana

[![Latest Version on Packagist](https://img.shields.io/packagist/v/sextanet/aduana.svg?style=flat-square)](https://packagist.org/packages/sextanet/aduana)
[![Tests](https://img.shields.io/github/actions/workflow/status/sextanet/aduana/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/sextanet/aduana/actions/workflows/run-tests.yml)
[![Total Downloads](https://img.shields.io/packagist/dt/sextanet/aduana.svg?style=flat-square)](https://packagist.org/packages/sextanet/aduana)

A easy-way, bidirectional channel to encrypt and decypt data

> The original name Aduana is inspired by [@uppercod's aduana](https://packagist.org/packages/uppercod/aduana)

## Installation

You can install the package via composer:

```bash
composer require sextanet/aduana
```

## Usage (encrypt data)

```php
// First step: set a password
\SextaNet\Aduana\Aduana::setPassword('yourSecurePassword');

// Second step: encrypt your data
return \SextaNet\Aduana\Aduana::encrypt('hello, from Aduana (:');

// Returns encrypted text, like this: dWSNOkN6mqxeCH0v3mzbWlJxRDJWTGE1WUxSQnN1eVNlbCtuNzdlOTFWSDUybFJIYVluNGNDMFZ4ajQ9
```

## Usage (decrypt data)

```php
// First step: set a password
\SextaNet\Aduana\Aduana::setPassword('yourSecurePassword');

// Second step: decrypt your data
return \SextaNet\Aduana\Aduana::decrypt('dWSNOkN6mqxeCH0v3mzbWlJxRDJWTGE1WUxSQnN1eVNlbCtuNzdlOTFWSDUybFJIYVluNGNDMFZ4ajQ9');

// Returns your original text: hello, from Aduana (:
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](https://github.com/spatie/.github/blob/main/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [SextaNet](https://github.com/sextanet)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
