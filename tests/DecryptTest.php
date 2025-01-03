<?php

use SextaNet\Aduana\Aduana;
use SextaNet\Aduana\Exceptions\InvalidResponse;
use SextaNet\Aduana\Exceptions\MissingPassword;

beforeEach(function () {
    Aduana::unsetPassword();
});

it('can decrypt text', function () {
    Aduana::setPassword('verySecretPassword');

    $encrypted = Aduana::decrypt('Fvt2y2Q1Y26c1oh1Zr1YpXR2KzJKVlYyZzd5OUFpdEUyNi91MkR1UTMvMmtSbnVtWXhYVk5FU2Z2VWs9');

    expect($encrypted)
        ->toBe('Hello, from Aduana!');
});

it('can decrypt an array', function () {
    Aduana::setPassword('verySecretPassword');

    $encrypted = Aduana::decrypt('eJqcxKZDwLuh0LuvoKwufWdUbEQ1cE5PdWxJc1dOZUtYWXdEdU9qMDVjQUlIK29GQjY5elVrNmUrdERHdmI5d2IyLzBnd3BrQnNnVEt0eTQ=');

    expect($encrypted)
        ->toBe([
            'name' => 'Aduana',
            'date' => '2024-12-13',
        ]);
});

it("can't decrypt without password", function () {
    Aduana::decrypt('Fvt2y2Q1Y26c1oh1Zr1YpXR2KzJKVlYyZzd5OUFpdEUyNi91MkR1UTMvMmtSbnVtWXhYVk5FU2Z2VWs9');
})->expectException(MissingPassword::class);

it("can't decrypt with an invalid password", function () {
    Aduana::setPassword('invalidPassword');

    Aduana::decrypt('Fvt2y2Q1Y26c1oh1Zr1YpXR2KzJKVlYyZzd5OUFpdEUyNi91MkR1UTMvMmtSbnVtWXhYVk5FU2Z2VWs9');
})->expectException(InvalidResponse::class);

it('can decrypt with emojis', function () {
    Aduana::🔑('verySecretPassword');

    $encrypted = Aduana::🔓('Fvt2y2Q1Y26c1oh1Zr1YpXR2KzJKVlYyZzd5OUFpdEUyNi91MkR1UTMvMmtSbnVtWXhYVk5FU2Z2VWs9');

    expect($encrypted)
        ->toBe('Hello, from Aduana!');
});
