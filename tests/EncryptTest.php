<?php

use SextaNet\Aduana\Aduana;
use SextaNet\Aduana\Exceptions\MissingPassword;

beforeEach(function () {
    Aduana::unsetPassword();
});

it('can encrypt data', function () {
    Aduana::setPassword('verySecretPassword');

    $encrypted = Aduana::encrypt('Hello, from Aduana!');

    expect($encrypted)->not
        ->toBe('Hello, from Aduana!');
});

it("can't encrypt data without password", function () {
    Aduana::encrypt('Hello, from Aduana!');
})->expectException(MissingPassword::class);
