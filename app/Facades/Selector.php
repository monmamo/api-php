<?php

namespace App\Facades;

use App\ColumnReference;
use App\Contracts\HasSelector;
use App\Enums\Selectors;

final class Selector
{
    /**
     * @group binary
     *
     * @uses \App\Dumping\dumpUnhandledValue
     * @uses \implode (native) Concatenates elements of an array into a string.
     * @uses \is_array (native) Returns whether a variable is an array.
     * @uses \is_null (native) Returns whether a variable is null.
     * @uses \is_string (native) Returns whether a variable is a string.
     * @uses \UnhandledMatchError::__construct
     */
    public static function fromName($name, callable $transform): string
    {
        return match (true) {
            \is_string($name) => $transform($name),
            \is_array($name) => $transform(\implode(Stringable::UNDERSCORE, $name)),
            $name instanceof Selectors => $transform($name->value),
            $name instanceof HasSelector => $name->selector() ?? throw new \UnhandledMatchError('selector that returned null'),
            $name instanceof \BackedEnum => $transform($name->value),
            $name instanceof \UnitEnum => $transform($name->name),
            $name instanceof ColumnReference => $transform((string) $name),
            \is_null($name) => throw new \UnhandledMatchError('null selector'),
            default => \App\Dumping\dumpUnhandledValue($name, 'invalid name value')
        };
    }

    /**
     * @group unary
     */
    public static function inputSelector(string $name): string
    {
        return 'input[name="' . $name . '"]';
    }

    /**
     * @group unary
     *
     * @uses \App\Dumping\dumpUnhandledValue
     * @uses \is_string (native) Returns whether a variable is a string.
     * @uses \value (Laravel) If given a Closure, evaluates it; otherwise returns the value given.
     */
    public static function nameAsString($name): string
    {
        return match (true) {
            \is_string($name) => $name,
            $name instanceof \BackedEnum => $name->value,
            $name instanceof \UnitEnum => $name->name,
            default => \App\Dumping\dumpUnhandledValue($name, 'invalid name value')
        };
    }

    /**
     * @group unary
     */
    public static function selectSelector(string $name): string
    {
        return 'select[name="' . $name . '"]';
    }

    /**
     * @group unary
     */
    public static function textareaSelector(string $name): string
    {
        return 'textarea[name="' . $name . '"]';
    }
}
