<?php

namespace App\Contracts;

/**
 * Interface for yielding a set of context information about an object.
 */
interface HasContext
{
    /**
     * Yields the object's context information.
     *
     * @implements \App\Contracts\HasContext::context
     * @group nonary
     * @group multivalue
     */
    public function context(): \Traversable;
}
