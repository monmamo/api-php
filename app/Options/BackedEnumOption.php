<?php

namespace App\Options;

use App\Contracts\HasValue;
use App\Contracts\Normalizable;
use App\Contracts\Optional;
use App\Strings\InlineText;

final class BackedEnumOption extends InlineText implements HasValue, Normalizable, Optional
{
    /**
     * Constructor.
     *
     * @group magic
     * @group mutator
     * @group unary
     *
     * @uses \App\Strings\InlineText::__construct
     *
     * @return void
     */
    public function __construct(protected \BackedEnum $_value)
    {
        parent::__construct($_value->value);
    }

    /**
     * @implements \App\Concerns\Deferable::internalArguments
     * @group nonary
     *
     * @uses \App\Concerns\InnerObject::object
     */
    protected function internalArguments(): \Traversable
    {
        yield $this;
    }

    /**
     * @group trinary
     */
    public static function areEqual(\BackedEnum $standard, mixed $candidate, bool $invert = false): bool
    {
        $equals = match (true) {
            $candidate === $standard => true,
            (string) $candidate === $standard->value => true,
            default => false
        };

        return $equals xor $invert;
    }

    /**
     * Runs the given Closure bound to this item then returns the result.
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
     * @group accessor
     * @group nonary
     * @group reductive
     */
    public function isFloat(): bool
    {
        return false;
    }

    /**
     * @group accessor
     * @group nonary
     * @group reductive
     */
    public function isInteger(): bool
    {
        return false;
    }

    /**
     * @group accessor
     * @group nonary
     * @group reductive
     */
    public function isString(): bool
    {
        return false;
    }

    /**
     * If the option is empty, it is returned immediately.
     *
     * If the option is non-empty, and its value does equal the passed value (via a shallow comparison ===), then None is returned; otherwise, the Option is returned.
     *
     * In other words, this will let all values through except the passed value.
     *
     * @implements \App\Contracts\Filterable::reject
     * @group unary
     *
     * @uses \App\Options\BackedEnumOption::areEqual
     * @uses \App\Options\NullOption::__construct
     */
    public function reject(mixed $standard): Optional
    {
        return self::areEqual(
            standard: $this->_value,
            candidate: $standard,
            invert: true,
        ) ? $this : new NullOption();
    }

    /**
     * If the option is empty, it is returned immediately.
     *
     * If the option is non-empty, and its value does not equal the passed value (via a shallow comparison ===), then None is returned. Otherwise, the    Option is returned.
     *
     * In other words, this will filter all but the passed value.
     *
     * @implements \App\Contracts\Filterable::select
     * @group unary
     *
     * @uses \App\Options\BackedEnumOption::areEqual
     * @uses \App\Options\NullOption::__construct
     */
    public function select(mixed $standard): Optional
    {
        return self::areEqual(
            standard: $this->_value,
            candidate: $standard,
        ) ? $this : new NullOption();
    }

    /**
     * @group variadic
     *
     * @uses \App\Callables\transform
     */
    public function tap(...$callables): void
    {
        \App\Callables\transform(1, $callables, $this->_value);
    }
}
