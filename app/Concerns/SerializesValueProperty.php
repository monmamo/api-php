<?php

namespace App\Concerns;

trait SerializesValueProperty
{
    /**
     * Constructs and returns an associative array of key/value pairs that represent the serialized form of the object.
     *
     * @see https://www.php.net/manual/en/language.oop5.magic.php#object.serialize
     *
     * @group accessor
     * @group associative
     * @group magic
     * @group multivalue
     * @group nonary
     */
    public function __serialize(): array
    {
        return ['value' => $this->value];
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
    public function __unserialize(array $data): void
    {
        $this->value = $data['value'];
    }
}
