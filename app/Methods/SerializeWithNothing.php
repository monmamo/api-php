<?php

namespace App\Methods;

/**
 * The most basic implementation of __serialize() and __unserialize().
 *
 * @see https://www.php.net/manual/en/language.oop5.magic.php#object.serialize
 */
trait SerializeWithNothing
{
    /**
     * Constructs and returns an associative array of key/value pairs that represent the serialized form of the object.
     *
     * @see https://www.php.net/manual/en/language.oop5.magic.php#object.serialize
     *
     * @group accessor
     * @group magic
     * @group nonary
     * @group multivalue
     * @group associative
     */
    public function __serialize(): array
    {
        return [];
    }

    /**
     * Restores the serialized properties of the object.
     *
     * @see https://www.php.net/manual/en/language.oop5.magic.php#object.serialize
     *
     * @group magic
     * @group mutator
     * @group unary
     *
     * @param array $data Restored array that was returned from self::__serialize.
     */
    public function __unserialize(array $data): void {}
}
