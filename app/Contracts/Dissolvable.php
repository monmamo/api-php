<?php

namespace App\Contracts;

/**
 * Allows an object to be dissolved into a stream of pieces.
 */
interface Dissolvable
{
    /**
     * Dissolves the object into a stream of pieces.
     *
     * The interface does not care whether the resulting dissolution is recursive or not.
     *
     * @implements \App\Contracts\Dissolvable::dissolve
     * @group nonary
     * @group multivalue
     */
    public function dissolve(): \Traversable;
}
