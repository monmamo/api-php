<?php

namespace App\Contracts;

/**
 * Indicates that the application wraps an inner value.
 */
interface TransformativeInvoker
{
    /**
     * Invoker.
     *
     * MUST NEVER RETURN AN INSTANCE OF TransformativeInvoker!
     *
     * @implements \App\Contracts\TransformativeInvoker::__invoke
     * @group magic
     * @group variadic
     *
     * @param mixed[] $items Could be transforms, string pieces, &c.
     */
    public function __invoke(...$items);
}
