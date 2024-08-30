<?php

namespace App\Contracts;

use PHPUnit\Framework\Constraint\Constraint;

interface Filterable
{
    /**
     * If the option is empty, it is returned immediately without applying the callable.
     *
     * If the option is non-empty, the callable is applied, and if it returns true, the option itself is returned; otherwise, None is returned.
     *
     * Basic implementation: \App\Callables\filter
     *
     * @implements \App\Contracts\Filterable::filter
     * @group unary
     */
    public function filter(Constraint $predicate): Optional;

    /**
     * If the option is empty, it is returned immediately without applying the callable.
     *
     * If the option is non-empty, the callable is applied, and if it returns false, the option itself is returned; otherwise, None is returned.
     *
     * Basic implementation: \App\Callables\filterNot
     *
     * @implements \App\Contracts\Filterable::filterNot
     * @group unary
     */
    public function filterNot(Constraint $predicate): Optional;

    /**
     * Lets all values through except the passed value.
     *
     * If the option is empty, it is returned immediately.
     *
     * If the option is non-empty, and its value does equal the passed value, then None is returned; otherwise, the Option is returned.
     *
     * Basic implementation: use \App\Concerns\Optional\SelectThroughFilter
     *
     * @implements \App\Contracts\Filterable::reject
     * @group unary
     *
     * @param T $standard Standard for comparison.
     */
    public function reject(mixed $standard): Optional;

    /**
     * Filters all but the passed value.
     *
     * If the option is empty, it is returned immediately.
     *
     * If the option is non-empty, and its value does not equal the passed value, then None is returned. Otherwise, the Option is returned.
     *
     * Basic implementation: use \App\Concerns\Optional\SelectThroughFilter
     *
     * @implements \App\Contracts\Filterable::select
     * @group unary
     */
    public function select(mixed $standard): Optional;
}
