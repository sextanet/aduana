<?php

namespace SextaNet\Aduana;

use SextaNet\Aduana\Exceptions\MissingPassword;
use SextaNet\Aduana\Exceptions\TooShortPassword;

abstract class Magic
{
    public static $CYPHER_TYPE = 'aes-256-cbc';

    public static $PASSWORD;

    public static function setPassword(string $password): void
    {
        if (strlen($password) < 10) {
            throw new TooShortPassword;
        }

        self::$PASSWORD = $password;
    }

    public static function hasPassword(): bool
    {
        return ! is_null(self::$PASSWORD);
    }

    public static function unsetPassword(): void
    {
        self::$PASSWORD = null;
    }

    public static function checkPassword(): void
    {
        if (is_null(self::$PASSWORD)) {
            throw new MissingPassword;
        }
    }

    public static function 🔑(string $password): void
    {
        self::setPassword($password);
    }
}
