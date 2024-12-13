<?php

use SextaNet\Aduana\Aduana;
use SextaNet\Aduana\Exceptions\TooShortPassword;

beforeEach(function () {
    Aduana::unsetPassword();
});

it('the password needs to be at least 10 characters', function () {
    Aduana::setPassword('123456789');
})->expectException(TooShortPassword::class);
