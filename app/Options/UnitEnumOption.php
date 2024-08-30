<?php

namespace App\Options;

use App\Constraints\Equals;
use App\Contracts\HasValue;
use App\Contracts\Normalizable;
use App\Contracts\Optional;
use App\Strings\InlineText;

/**
 *
 */
final class UnitEnumOption extends InlineText implements HasValue, Normalizable, Optional
{
    /**
     *
     * @group mutator
     * @group unary
     *
     * @uses \App\Strings\InlineText::__construct
     */
    public function __construct(protected \UnitEnum $_value)
    {
        parent::__construct($_value->name);
    }

    /**
     * Runs the given Closure bound to this item then returns the result.
     *
     *
     * @group accessor
     * @group unary
     *
     * @param null|callable $predicate_callable Callback to execute on the inner value.
     *
     * @uses \App\Callables\makeClosure
     * @uses \App\Dumping\dump
     * @uses \App\Options\wrap
     * @uses \assert (native) If enabled, and the given assertion is false, throws an exception.
     * @uses \Closure::bindTo
     * @uses \LogicException::__construct
     *
     * @throws \AssertionError
     * @throws \LogicException
     */
    public function assert(mixed $predicate_callable): static
    {
        try {
            $closure = \App\Callables\makeClosure($predicate_callable);
            \assert($closure->bindTo($this->_value));
            return \App\Options\wrap($this);
        } catch (\AssertionError $exception) {
            \App\Dumping\dump($this); // dumps depending on environment and verbosity
            throw new \LogicException('assertion against proxy failed');
        } catch (\Throwable $exception) {
            \App\Dumping\dump($this); // dumps depending on environment and verbosity
            throw $exception;
        }
    }

    /**
     * Returns a representation of this object as a string.
     *
     *
     * @implements \App\Interfaces\Contracts\Stringable::asString
     * @group accessor
     * @group nonary
     * @group reductive
     */
    public function asString(): string
    {
        return $this->_value->name;
    }

    /**
     * Returns whether a candidate value is "equal" to this value.
     *
     * This method allows objects to be used as keys in structures such as Ds\Map and Ds\Set, or any other lookup structure that honors this interface.
     *
     * @see https://www.php.net/manual/en/ds-hashable.equals.php
     *
     *
     * @implements \App\Interfaces\Contracts\Equality::equals
     * @implements \Ds\Hashable::equals
     * @group comparative
     * @group reductive
     *
     * @param mixed $value The value to compare to this object.
     *
     * @uses \App\Constraints\Equals::__construct
     * @uses \App\Constraints\Equals::evaluate
     *
     * @return boolean
     */
    public function equals(mixed $value): bool
    {
        // WARNING This should probably be replaced with custom logic.
        static $constraint;
        $constraint ??= new Equals($this->_value);
        return $constraint->evaluate($value, '', true);
    }

    /**
     *
     * @group accessor
     * @group nonary
     * @group reductive
     *
     * @return boolean
     */
    public function isBoolean(): bool
    {
        return false;
    }

    /**
     *
     * @group accessor
     * @group nonary
     * @group reductive
     */
    public function isFloat(): bool
    {
        return false;
    }

    /**
     *
     * @group accessor
     * @group nonary
     * @group reductive
     */
    public function isInteger(): bool
    {
        return false;
    }

    /**
     *
     * @group accessor
     * @group nonary
     * @group reductive
     */
    public function isString(): bool
    {
        return false;
    }
}
