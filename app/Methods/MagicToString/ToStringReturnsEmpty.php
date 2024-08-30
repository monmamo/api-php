<?php

namespace App\Methods\MagicToString;

/**
 * usage:
 * use \App\Methods\MagicToString\ToStringReturnsEmpty;
 */
trait ToStringReturnsEmpty
{
    /**
     * Returns a representation of this object as a string.
     *
     * @group nonary
     * @group resolving
     * @group magic-tostring-signature
     * @group magic
     */
    public function __toString(): string
    {
        return '';
    }
}
