<?php

namespace App\Methods\Equals;

trait EqualsForUnitEnum
{
    /**
     * Returns whether a candidate value is "equal" to this value.
     *
     * This method allows objects to be used as keys in structures such as Ds\Map and Ds\Set, or any other lookup structure that honors this interface.
     *
     * 💡 Should not throw exceptions. If an exception happens, consume the exception and return false.
     *
     * @see https://www.php.net/manual/en/ds-hashable.equals.php
     *
     * @implements \App\Contracts\Equality::equals
     * @implements \Ds\Hashable::equals
     * @group unary
     * @group comparative
     * @group throwless
     * @group reductive
     *
     * @param mixed $value The value to compare to this object.
     *
     * @uses \is_string (native)
     * @uses \is_null (native)
     */
    public function equals(mixed $value): bool
    {
        return match (true) {
            \is_string($value) => $this->name === $value,
            \is_null($value) => false,
            $value instanceof self => $this === $value,
            default => false
        };
    }
}
