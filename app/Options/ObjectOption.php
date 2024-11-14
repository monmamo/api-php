<?php

namespace App\Options;

use App\Concerns\InnerObject;
use App\Contracts\HasValue;
use App\Contracts\Optional;
use App\Facades\ArrayAccess;
use App\Methods\Count\CountIsAlwaysOne;
use App\States\NotValidForOption;
use Illuminate\Support\Traits\ForwardsCalls;
use PhpOption\Option;

/**
 * Do not use these traits:
 * - \App\Concerns\NeverEmpty (is(Not)Empty defined by inner object)
 */
final class ObjectOption implements HasValue, Optional
{
    use CountIsAlwaysOne;
    use ForwardsCalls;
    use InnerObject;

    /**
     * @group mutator
     * @group unary
     *
     * @uses \App\Dumping\dump
     * @uses \assert (native) If enabled, and the given assertion is false, throws an exception.
     * @uses \count (native) Returns the number of items in an array or Countable object.
     * @uses \get_debug_type (native) Returns the type of a variable, with special handling for objects.
     * @uses \LogicException::__construct
     * @uses \ReflectionObject::__construct
     * @uses \ReflectionObject::getAttributes
     *
     * @throws \AssertionError
     * @throws \LogicException
     */
    public function __construct(protected object $_value)
    {
        \assert(!($this->_value instanceof Optional));
        \assert(!($this->_value instanceof Option));
        // assert(!($this->_value instanceof \App\Callables\BaseCallable));

        $reflection = new \ReflectionObject($_value);
        $attributes = $reflection->getAttributes(NotValidForOption::class);

        if (\count($attributes) > 0) {
            \App\Dumping\dump($_value); // 🔒
            throw new \LogicException('object of class ' . \get_debug_type($_value) . ' is not valid for use as an option.');
        }
    }

    /**
     * Method invoked when attempting invoke an inaccessible or undefined method of this class in an object context.
     * Dynamically passes a method to the underlying object.
     *
     * @group magic
     * @group magic-call-signature
     * @group variadic
     *
     * @param mixed[] $parameters Enumerated array containing the parameters passed to the method.
     *
     * @uses \Illuminate\Support\Traits\ForwardsCalls::forwardCallTo
     *
     * @throws \BadMethodCallException
     */
    public function __call($name, $parameters)
    {
        return $this->forwardCallTo($this->_value, $name, $parameters);
    }

    /**
     * @implements \App\Concerns\InnerObject::object
     * @group nonary
     * @group resolving
     */
    protected function object(): object
    {
        return $this->_value;
    }

    /**
     * @implements \App\Contracts\Dumps::dump
     * @group fluent
     * @group nonary
     *
     * @uses \App\Dumping\dump
     */
    public function dump(): static
    {
        \App\Dumping\dump($this->_value); // 🔒
        return $this;
    }

    /**
     * @group unary
     */
    public static function forMultivalue(\Traversable $value): static
    {
        return new class($value) extends ObjectOption implements \Countable, \IteratorAggregate
        {
            /**
             * Returns whether an item exists at an offset.
             *
             * @implements \ArrayAccess::offsetGet
             * @group accessor
             * @group accessor-by-key
             * @group nonary
             *
             * @param mixed $key Offset to check.
             *
             * @uses \App\Facades\ArrayAccess::offsetExists
             */
            public function offsetExists(mixed $key): bool
            {
                return ArrayAccess::offsetExists($this->_value, $key);
            }

            /**
             * Retrieves the item at the given offset.
             *
             * @implements \ArrayAccess::offsetGet
             * @group accessor
             * @group accessor-by-key
             * @group selective
             * @group unary
             *
             * @param mixed $key Offset to get or check.
             *
             * @uses \App\Facades\ArrayAccess::offsetGet
             */
            public function offsetGet(mixed $key): mixed
            {
                return ArrayAccess::offsetGet($this->_value, $key);
            }
        };
    }

    /**
     * @group unary
     */
    public static function make($value): static
    {
        if ($value instanceof \Traversable) {
            return static::forMultivalue($value);
        }
        return new self($value);
    }
}
