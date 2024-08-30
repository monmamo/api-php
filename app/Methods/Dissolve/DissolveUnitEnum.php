<?php

namespace App\Methods\Dissolve;

use App\Strings\PascalCaseString;

trait DissolveUnitEnum
{
    /**
     * Dissolves the object into a stream of pieces.
     *
     * @implements \App\Contracts\Dissolvable::dissolve
     * @group nonary
     *
     * @uses \App\Strings\PascalCaseString::dissolver
     */
    public function dissolve(): \Traversable
    {
        return PascalCaseString::dissolver($this->name);
    }
}
