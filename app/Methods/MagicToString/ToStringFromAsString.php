<?php

namespace App\Methods\MagicToString;

use App\Facades\Handler;

/**
 * usage:
 * use \App\Methods\MagicToString\ToStringFromAsString;
 */
trait ToStringFromAsString
{
    /**
     * Returns a representation of this object as a string.
     *
     * Since PHP won't let you throw an exception from __toString,
     * this just writes the exception to the log and returns an empty string.
     *
     * @group nonary
     * @group reductive
     * @group magic-tostring-signature
     * @group magic
     *
     * @uses \App\Interfaces\Contracts\Stringable::asString
     * @uses \App\Facades\Handler::rescue
     */
    public function __toString(): string
    {
        try {
            return $this->asString();
        } catch (\Throwable $ex) {
            return Handler::rescue($ex);
        }
    }
}
