<?php

namespace App\Discord;

use RuntimeException;

class Interaction
{
    public static function verifyKey($raw_body, $signature, $timestamp, $client_public_key):bool
    {
        if (is_null($signature) || is_null($timestamp)) {
            return false;
        }

        $ec = new \Elliptic\EdDSA('ed25519');
        $key = $ec->keyFromPublic($client_public_key, 'hex');

        $message = array_merge(unpack('C*', $timestamp), unpack('C*', $raw_body));
        return $key->verify($message, $signature) == TRUE;
    }
}
