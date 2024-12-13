<?php

use SextaNet\Aduana\Aduana;
use SextaNet\Aduana\Exceptions\InvalidResponse;
use SextaNet\Aduana\Exceptions\MissingPassword;

beforeEach(function () {
    Aduana::unsetPassword();
});

it('can decrypt data', function () {
    Aduana::setPassword('verySecretPassword');

    $encrypted = Aduana::decrypt('Fvt2y2Q1Y26c1oh1Zr1YpXR2KzJKVlYyZzd5OUFpdEUyNi91MkR1UTMvMmtSbnVtWXhYVk5FU2Z2VWs9');

    expect($encrypted)
        ->toBe('Hello, from Aduana!');
});

it("can't decrypt data without password", function () {
    Aduana::decrypt('Fvt2y2Q1Y26c1oh1Zr1YpXR2KzJKVlYyZzd5OUFpdEUyNi91MkR1UTMvMmtSbnVtWXhYVk5FU2Z2VWs9');
})->expectException(MissingPassword::class);

it("can't decrypt data with an invalid password", function () {
    Aduana::setPassword('invalidPassword');

    Aduana::decrypt('Fvt2y2Q1Y26c1oh1Zr1YpXR2KzJKVlYyZzd5OUFpdEUyNi91MkR1UTMvMmtSbnVtWXhYVk5FU2Z2VWs9');
})->expectException(InvalidResponse::class);
