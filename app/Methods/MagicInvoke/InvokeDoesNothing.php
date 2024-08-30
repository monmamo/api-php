<?php

namespace App\Methods\MagicInvoke;

/**
 * usage:
 * use \App\Methods\MagicInvoke\InvokeDoesNothing;
 */
trait InvokeDoesNothing
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
    public function __invoke(...$items): void {}
}
