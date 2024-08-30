<?php

namespace App\Methods\Scope;

use App\ColumnReference;
use Illuminate\Support\Collection;

trait ScopeForEnum
{
    /**
     * Scopes a query to a particular enumerated value.
     *
     * @see https://laravel.com/docs/9.x/eloquent#local-scopes
     *
     * @group binary
     *
     * @param \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Relations\Relation|\Illuminate\Database\Query\Builder $query Query builder object to modify.
     * @param mixed $value Value to compare.
     *
     * @uses \is_null (native) Returns whether a variable is null.
     * @uses \App\ColumnReference::of
     * @uses \App\ColumnReference::__toString
     * @uses \assert (native) If enabled, and the given assertion is false, throws an exception.
     * @uses \explode (native) Splits a string by string.
     * @uses \Illuminate\Database\Eloquent\Builder::where Constrains the query to rows where column NAME is equal to VALUE or fits a condition pertaining to VALUE.
     * @uses \App\Strings\expectationMessage
     * @uses \Illuminate\Support\Collection::get
     *
     * @return \Illuminate\Database\Eloquent\Builder
     * @throws \AssertionError
     * @throws \LogicException from \App\ColumnReference::of
     * @throws \UnhandledMatchError
     */
    public static function scope($query, $value): void
    {
        if (\is_null($value)) {
            return;
        }

        if ($value instanceof Collection) {
            self::scope($query, $value->get(static::class));
        }
        \assert(
            $value instanceof self,
            \App\Strings\expectationMessage(
                expectation: self::class,
                value: $value,
            ),
        );

        $query->where(
            (string) ColumnReference::of(static::class),
            match (true) {
                $value instanceof \BackedEnum => $value->value,
                $value instanceof \UnitEnum => $value->name,
            },
        );
    }
}
