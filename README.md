# Aduana

[![Latest Version on Packagist](https://img.shields.io/packagist/v/sextanet/aduana.svg?style=flat-square)](https://packagist.org/packages/sextanet/aduana)
[![Tests](https://img.shields.io/github/actions/workflow/status/sextanet/aduana/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/sextanet/aduana/actions/workflows/run-tests.yml)
[![Total Downloads](https://img.shields.io/packagist/dt/sextanet/aduana.svg?style=flat-square)](https://packagist.org/packages/sextanet/aduana)

A easy-way, bidirectional channel to encrypt and decrypt data

> The original name Aduana is inspired by [@uppercod's aduana](https://packagist.org/packages/uppercod/aduana)

## Installation

You can install the package via composer:

```bash
composer require sextanet/aduana
```

## Basic usage

> [!NOTE]
> Since version 1.0.3, the password needs to be at least 10 characters

### Encrypt text

```php
// Step 1: set a password
\SextaNet\Aduana\Aduana::setPassword('yourSecurePassword');

// Step 2: encrypt your data
return \SextaNet\Aduana\Aduana::encrypt('hello, from Aduana (:');
```

Returns encrypted text, like this:
`dWSNOkN6mqxeCH0v3mzbWlJxRDJWTGE1WUxSQnN1eVNlbCtuNzdlOTFWSDUybFJIYVluNGNDMFZ4ajQ9`

### Decrypt text

```php
// Step 1: set a password
\SextaNet\Aduana\Aduana::setPassword('yourSecurePassword');

// Step 2: decrypt your data
return \SextaNet\Aduana\Aduana::decrypt('dWSNOkN6mqxeCH0v3mzbWlJxRDJWTGE1WUxSQnN1eVNlbCtuNzdlOTFWSDUybFJIYVluNGNDMFZ4ajQ9');
```

Returns your original text:
`hello, from Aduana (:`

## Advanced usage

You can also encrypt complex structures like arrays. With the same syntax to encrypt and decrypt 😎

### Encrypt an array

```php
\SextaNet\Aduana\Aduana::setPassword('yourSecurePassword');

$array = [
    'your-complex-array' => [
        'another-level' => [
            'yes' => [
                'it works!' => [
                    'no problem!',
                ]
            ]
        ]
    ]
];

return \SextaNet\Aduana\Aduana::encrypt($array);
```

### Decrypt an array

```php
$decrypted_array = \SextaNet\Aduana\Aduana::decrypt('zwKOVw6zX2Jp8gNdQuE6TWRyNUR4MFFpN2lVaGIyeHZBMUljQXA1d2VuYjFZR3RKVkkzNC9HR25RampMUEQrSTdRbHVOT3VUU2hDL04rVXErSVNRL0FvTlAyMjRWa1pRVjdRS1RuSTFvRFBkRHVjMm9Pbm0ySnVnNnJVPQ==');

var_dump($decrypted_array);
```

## Emojis (new)

Aduana supports three emojis:

### Set password

```php
Aduana::🔑('verySecretPassword');
```

### Encrypt

```php
Aduana::🔒('Hello, from Aduana!');
```

### Decrypt

```php
Aduana::🔓('Fvt2y2Q1Y26c1oh1Zr1YpXR2KzJKVlYyZzd5OUFpdEUyNi91MkR1UTMvMmtSbnVtWXhYVk5FU2Z2VWs9');
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
