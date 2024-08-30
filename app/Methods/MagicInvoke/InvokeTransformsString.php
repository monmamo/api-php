<?php

namespace App\Methods\MagicInvoke;

trait InvokeTransformsString
{
    /**
     * Calls any number of transforms with the stringification of this instance then return the instance.
     *
     * 💡 This makes this object callable, eliminating the need for a tap method.
     *
     * @implements \App\Contracts\TransformativeInvoker::__invoke
     * @group magic
     * @group variadic
     *
     * @uses \App\Callables\transform
     */
    final public function __invoke(...$transforms)
    {
        return \App\Callables\transform(
            arity: 1,
            seed: $this->__toString(),
            transforms: $transforms,
        );
    }
}
