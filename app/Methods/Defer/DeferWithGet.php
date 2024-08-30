<?php

namespace App\Methods\Defer;

use App\Concerns\Deferable;

/**
 * usage:
 * use \App\Methods\Defer\DeferWithGet;
 */
trait DeferWithGet
{
    use Deferable;

    /**
     * @implements \App\Concerns\Deferable::internalArguments
     * @group nonary
     *
     * @uses \App\Options\iterate
     * @uses \App\Concerns\InnerObject::object
     */
    protected function internalArguments(): \Traversable
    {
        return \App\Options\iterate($this->get());
    }
}
