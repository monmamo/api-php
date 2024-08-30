<?php

namespace App\Contracts;

use Illuminate\Database\Eloquent\Builder as EloquentBuilder;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Database\Query\Builder as GenericBuilder;

/**
 * Not the same as \Illuminate\Database\Eloquent\Scope.
 */
interface QueryScope
{
    /**
     * Applies the scope to a given Eloquent query builder.
     *
     * Differs from \Illuminate\Database\Eloquent\Scope::apply in that the other takes a Model argument.
     *
     * @implements \App\Contracts\QueryScope::apply
     * @group trinary
     */
    public function apply(
        EloquentBuilder|GenericBuilder|Relation $builder,
        mixed $value,
        mixed $boolean = 'and',
    ): void;
}
