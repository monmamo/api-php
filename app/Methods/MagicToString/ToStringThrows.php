<?php

namespace App\Methods\MagicToString;

use App\Facades\Environment;

/**
 * usage:
 * use \App\Methods\MagicToString\ToStringThrows;
 */
trait ToStringThrows
{
    /**
     * Returns a representation of this object as a string.
     *
     * @group nonary
     * @group resolving
     * @group magic-tostring-signature
     * @group magic
     *
     * @uses \__ (Laravel) Translates the message given to it.
     * @uses \get_debug_type (native) Returns the type of a variable, with special handling for objects.
     * @uses \App\Enums\Environments::rescue
     * @uses \LogicException::__construct
     * @uses \sprintf (native) Returns a formatted string.
     *
     * @throws \LogicException
     */
    public function __toString(): string
    {
        return Environment::rescue(
            throwable: new \LogicException(
                \sprintf(\__('no-string-representation'), \get_debug_type($this)),
            ),
            context: $this,
        );
    }
}
