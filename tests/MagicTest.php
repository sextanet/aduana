<?php

use SextaNet\Aduana\Aduana;
use SextaNet\Aduana\Exceptions\TooShortPassword;

beforeEach(function () {
    Aduana::unsetPassword();
});

it('the password needs to be at least 10 characters', function () {
    Aduana::setPassword('123456789');
})->expectException(TooShortPassword::class);

it('knows when it has a password', function () {
    expect(Aduana::hasPassword())
        ->toBeFalse();

    Aduana::setPassword('123456789');

    expect(Aduana::hasPassword())
        ->toBeTrue();
})->expectException(TooShortPassword::class);
