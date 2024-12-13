<?php

use SextaNet\Aduana\Aduana;
use SextaNet\Aduana\Exceptions\MissingPassword;

beforeEach(function () {
    Aduana::unsetPassword();
});

it('can encrypt text', function () {
    Aduana::setPassword('verySecretPassword');

    $encrypted = Aduana::encrypt('Hello, from Aduana!');

    expect($encrypted)->not
        ->toBe('Hello, from Aduana!');
});

it("can't encrypt without password", function () {
    Aduana::encrypt('Hello, from Aduana!');
})->expectException(MissingPassword::class);

it('can encrypt an array', function () {
    Aduana::setPassword('verySecretPassword');

    $encrypted = Aduana::encrypt([
        'name' => 'Aduana',
        'date' => '2024-12-13',
    ]);

    expect($encrypted)->not
        ->toBe([
            'name' => 'Aduana',
            'date' => '2024-12-13',
        ]);
});

it('can encrypt with emojis', function () {
    Aduana::🔑('verySecretPassword');

    $encrypted = Aduana::🔒('Hello, from Aduana!');

    expect($encrypted)->not
        ->toBe([
            'name' => 'Aduana',
            'date' => '2024-12-13',
        ]);
});
