<?php

namespace App\Contracts;

/**
 * flatmap turns [value1,value2] into [option(result1),option(result2)].
 * map turns [value1,value2] into option([result1,result2]).
 */
interface Mappable
{
    /**
     * Applies the callable to the value of the option if it is non-empty, and returns the return value of the callable directly.
     *
     * Basic implementation:
     * return \App\Callables\BaseCallable::transform(arity: 1,transforms:$callable,seed:INNER_VALUE);
     *
     * @implements \App\Contracts\Mappable::flatMap
     * @group unary
     *
     * @template S
     */
    public function flatMap(mixed $callable): mixed;

    /**
     * Applies the callable to the value of the option if it is non-empty, and returns the return value of the callable wrapped in an option.
     *
     * If the option is empty, then the callable is not applied.
     *
     *
     * Basic implementation:
     * return \App\Options\wrap(\App\Callables\BaseCallable::transform(arity: 1,transforms:$callable,seed:INNER_VALUE));
     *
     * @implements \App\Contracts\Mappable::map
     * @group unary
     *
     * @template S
     */
    public function map(mixed $callable): Optional;
}
