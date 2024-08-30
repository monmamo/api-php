<?php

namespace App\Methods\MagicInvoke;

/**
 * usage:
 * use \App\Methods\MagicInvoke\InvokeReturnsThis;
 */
trait InvokeReturnsThis
{
    /**
     * Returns the internal value directly.
     *
     * @implements \App\Contracts\TransformativeInvoker::__invoke
     * @group magic
     * @group nonary
     * @group fluent
     */
    public function __invoke()
    {
        return $this;
    }
}
