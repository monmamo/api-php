<?php

namespace App\Concerns;

use App\Contracts\Optional;
use App\Options\NullOption;
use PHPUnit\Framework\Constraint\Constraint;

/**
 * usage:
 * use \App\Concerns\MapsOnInnerValue;
 */
trait MapsOnInnerValue
{
    /**
     * If the option is empty, it is returned immediately without applying the callable.
     *
     * If the option is non-empty, the callable is applied, and if it returns true, the option itself is returned; otherwise, None is returned.
     *
     * @implements \App\Contracts\Filterable::filter
     * @group unary
     *
     * @uses \App\Options\NullOption::__construct
     * @uses \App\Options\unwrap
     * @uses \App\Options\wrap
     * @uses \PHPUnit\Framework\Constraint\Constraint::evaluate
     *
     * @throws \AssertionError
     */
    public function filter(Constraint $predicate): Optional
    {
        return $predicate->evaluate(\App\Options\unwrap($this), '', true) ? \App\Options\wrap($this) : new NullOption();
    }

    /**
     * If the option is empty, it is returned immediately without applying the callable.
     *
     * If the option is non-empty, the callable is applied, and if it returns false, the option itself is returned; otherwise, None is returned.
     *
     * @implements \App\Contracts\Filterable::filterNot
     * @group unary
     *
     * @uses \App\Options\NullOption::__construct
     * @uses \App\Options\unwrap
     * @uses \App\Options\wrap
     * @uses \PHPUnit\Framework\Constraint\Constraint::evaluate
     *
     * @throws \AssertionError
     */
    public function filterNot(Constraint $predicate): Optional
    {
        return $predicate->evaluate(\App\Options\unwrap($this), '', true) ? new NullOption() : \App\Options\wrap($this);
    }

    /**
     * Applies the callable to the value of the option if it is non-empty, and returns the return value of the callable directly.
     * The return value of the callable is expected to be an Option itself; it is not automatically wrapped in Some().
     *
     * @implements \App\Contracts\Mappable::flatMap
     * @group unary
     *
     * @uses \App\Callables\transform
     * @uses \App\Options\unwrap
     *
     * @throws \AssertionError
     */
    public function flatMap($callable): mixed
    {
        return \App\Callables\transform(
            arity: 1,
            transforms: $callable,
            seed: \App\Options\unwrap($this),
        );
    }

    /**
     * Applies the callable to the value of the option if it is non-empty, and returns the return value of the callable wrapped in Some(). If the option is empty, then the callable is not applied.
     *
     * @implements \App\Contracts\Mappable::map
     * @group unary
     *
     * @uses \App\Concerns\MapsOnInnerValue::flatMap
     * @uses \App\Options\wrap
     *
     * @throws \AssertionError
     */
    public function map($callable): Optional
    {
        return \App\Options\wrap($this->flatMap($callable));
    }
}
