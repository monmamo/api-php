<?php

namespace App\Methods\Transform;

trait TransformFacadeRoot
{
    /**
     * @group variadic
     *
     * @uses \App\Callables\run
     * @uses \is_null (native) Returns whether a variable is null.
     *
     * @throws \Throwable Any exception thrown out of \App\Callables\run.
     */
    public static function transform(mixed $callable, ...$additional_arguments)
    {
        $facade_root = static::getFacadeRoot();

        if (\is_null($facade_root)) {
            return;
        }
        return \App\Callables\run(
            callable: $callable,
            arguments_to_callable: [$facade_root, ...$additional_arguments],
            context_to_dump: \compact('this'),
        );
    }
}
