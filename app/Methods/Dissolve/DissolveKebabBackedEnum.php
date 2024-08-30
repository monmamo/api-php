<?php

namespace App\Methods\Dissolve;

use App\Strings\KebabCaseString;

trait DissolveKebabBackedEnum
{
    /**
     * Dissolves the object into a stream of pieces.
     *
     * @implements \App\Contracts\Dissolvable::dissolve
     * @group nonary
     *
     * @uses \App\Strings\KebabCaseString::dissolver
     */
    public function dissolve(): \Traversable
    {
        return KebabCaseString::dissolver($this->value);
    }
}
