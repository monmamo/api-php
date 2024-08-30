<?php

namespace App\Contracts;

interface Foldable
{
    /**
     * Binary operator for the initial value and the option's value.
     *
     * If empty, the initial value is returned. If non-empty, the callable receives the initial value and the option's value as arguments.
     *
     * ```php
     *
     *     $some = new Some(5);
     *     $none = None::create();
     *     $result = $some->foldLeft(1, function($a, $b) { return $a + $b; }); // int(6)
     *     $result = $none->foldLeft(1, function($a, $b) { return $a + $b; }); // int(1)
     *
     *     // This can be used instead of something like the following:
     *     $option = Option::fromValue($integerOrNull);
     *     $result = 1;
     *     if ( ! $option instanceof HasValue) {
     *         $result += $option->get();
     *     }
     * ```
     *
     * Simple implementation: return \App\Options\foldLeft($callable,$this->VALUE,$initial_value);
     *
     * @implements \App\Contracts\Foldable::foldLeft
     * @group binary
     *
     * @template S
     *
     * @param S $initial_value
     * @param callable(S, T):S $callable
     *
     * @return S
     */
    public function foldLeft($initial_value, $callable);

    /**
     * Binary operator for the initial value and the option's value.
     *
     * foldLeft() but with reversed arguments for the callable.
     *
     * Simple implementation: return \App\Options\foldRight($callable,$this->VALUE,$initial_value);
     *
     * @implements \App\Contracts\Foldable::foldRight
     *
     * @template S
     *
     * @param S $initial_value
     * @param callable(T, S):S $callable
     *
     * @return S
     */
    public function foldRight($initial_value, $callable);
}
