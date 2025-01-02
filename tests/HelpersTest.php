<?php

use SextaNet\Aduana\Aduana;

it('can set a password', function () {
    aduana_password('1234567890');

    expect(Aduana::hasPassword())
        ->toBeTrue();
});

it('can encrypt', function () {
    aduana_password('1234567890');
    $encrypted = aduana_encrypt('encrypted text');

    expect($encrypted)
        ->not->toBe('encrypted text');
});

it('can decrypt', function () {
    aduana_password('1234567890');
    $encrypted = aduana_encrypt('encrypted text');
    $decrypted = aduana_decrypt($encrypted);

    expect($decrypted)
        ->toBe('encrypted text');
});
