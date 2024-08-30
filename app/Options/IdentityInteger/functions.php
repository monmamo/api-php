<?php

namespace App\Options\IdentityInteger;

use App\Contracts\Emptyable;
use App\Contracts\HasKey;
use App\Contracts\Optional;
use App\Contracts\Throws;
use App\Options\NullOption;
use App\Options\NumericOption;
use Illuminate\Database\Eloquent\Model;

/**
 *
 * @group unary
 *
 * @uses \App\Options\IdentityInteger\unwrap
 * @uses \App\Options\NullOption::__construct
 * @uses \App\Options\NumericOption::__construct
 * @uses \is_int (native) Returns whether the given variable is an integer.
 * @uses \is_null (native) Returns whether a variable is null.
 * @uses \is_string (native) Returns whether a variable is a string.
 *
 * @throws \App\Strings\TypeIndicator
 */
function wrap(mixed $value): Optional
{
    $raw = \App\Options\IdentityInteger\unwrap($value);

    return match (true) {
        \is_int($raw) => new NumericOption($raw),
        \is_null($raw) => new NullOption()
    };

    // throw new \App\Strings\TypeIndicator(value: $offset_raw, expectation: 'valid integer offset');
}

/**
 *
 * @group unary
 *
 * @uses \is_float
 * @uses \is_int (native) Returns whether the given variable is an integer.
 * @uses \is_null (native) Returns whether a variable is null.
 * @uses \is_numeric (native) Returns whether or not a variable is a number or a numeric string.
 * @uses \is_string (native) Returns whether a variable is a string.
 */
function unwrap(mixed $value): ?int
{
    $raw = match (true) {
        \is_int($value) => $value,
        \is_string($value) => match (true) {
            \is_numeric($value) => (int) $value,
            default => null
        },
        $value instanceof Model => $value->getKey(),
        $value instanceof HasKey => $value->getKey(),
        $value instanceof \BackedEnum => (int) $value->value,
        $value instanceof NumericOption => $value->get(),
        \is_null($value),
        \is_float($value),
        \is_bool($value),
        $value instanceof Emptyable && $value->isEmpty() => null,
        default => \dd($value)
    };

    if (\is_null($raw)) {
        return null;
    }

    \assert(\is_int($raw));

    return $raw > 0 ? $raw : null;
}
