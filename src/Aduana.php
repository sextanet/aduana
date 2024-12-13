<?php

namespace SextaNet\Aduana;

use SextaNet\Aduana\Exceptions\InvalidResponse;

class Aduana extends Magic
{
    public static function encrypt($data): string
    {
        self::checkPassword();

        $data = json_encode($data);

        $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length(self::$CYPHER_TYPE));

        $cypher = openssl_encrypt($data, self::$CYPHER_TYPE, self::$PASSWORD, 0, $iv);

        return base64_encode($iv.$cypher);
    }

    public static function decrypt($data)
    {
        self::checkPassword();

        $text = base64_decode($data);

        $iv = substr($text, 0, openssl_cipher_iv_length(self::$CYPHER_TYPE));

        $cypher = substr($text, openssl_cipher_iv_length(self::$CYPHER_TYPE));

        $decrypt = openssl_decrypt($cypher, self::$CYPHER_TYPE, self::$PASSWORD, 0, $iv);

        if (! $decrypt) {
            throw new InvalidResponse;
        }

        return json_decode($decrypt, true);
    }
}
