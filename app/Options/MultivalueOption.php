<?php

namespace App\Options;

use App\Callables\BaseCallable;
use App\Concerns\AlwaysDefined;
use App\Concerns\AlwaysGettable;
use App\Concerns\Deferable;
use App\Concerns\Optional\NoProperties;
use App\Concerns\Optional\SelectThroughFilter;
use App\Contracts\Dumps;
use App\Contracts\Emptyable;
use App\Contracts\Filterable;
use App\Contracts\Foldable;
use App\Contracts\Mappable;
use App\Contracts\Optional;
use App\Facades\Context;
use App\Methods\Equals\EqualsNothing;
use App\Methods\MagicGet\MagicGetNotValid;
use App\States\Immutable;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Contracts\Support\Jsonable;
use Illuminate\Support\Collection;
use Illuminate\Support\Traits\Conditionable;
use PHPUnit\Framework\Constraint\Constraint;

/**
 * Implementations:
 *
 * new class(ARRAY) extends \ArrayIterator implements  \App\Contracts\Optional,  \App\Contracts\Deferable, \App\Contracts\Dumps, \App\Contracts\Emptyable, \App\Contracts\Filterable, \App\Contracts\Foldable, \App\Contracts\Mappable {use \App\Options\MultivalueOption;}
 * OR
 * new class(ITERATOR) extends \IteratorIterator implements  \App\Contracts\Optional,  \App\Contracts\Deferable, \App\Contracts\Dumps, \App\Contracts\Emptyable, \App\Contracts\Filterable, \App\Contracts\Foldable, \App\Contracts\Mappable {use \App\Options\MultivalueOption;}
 *
 *
 * Can't use \Illuminate\Support\Traits\EnumeratesValues because it defines at least one function that clashes with \PhpOption\Option.
 *
 * Can't implement \Illuminate\Support\Enumerable because it specifies several unnecessary methods.
 *
 * Don't use \Illuminate\Support\Traits\ForwardsCalls.
 *
 * Don't extend \Illuminate\Support\Collection with this.
 *
 * Do not implement the following methods:
 * - __toString
 */
trait MultivalueOption
{
    use AlwaysDefined;
    use AlwaysGettable;
    use Conditionable;
    use Deferable;
    use EqualsNothing;
    use Immutable;
    use MagicGetNotValid;
    use NoProperties;
    use SelectThroughFilter; // defines ::select and ::reject

    /**
     * Indicates that the object's string representation should be escaped when __toString is invoked.
     */
    protected bool $escapeWhenCastingToString = false;

    /**
     * Method invoked when attempting invoke an inaccessible or undefined method of this class in an object context.
     * Dynamically passes a method to the underlying object.
     *
     * @group magic
     * @group magic-call-signature
     * @group variadic
     *
     * @param string $method Name of the method being called.
     * @param mixed[] $parameters Enumerated array containing the parameters passed to the method.
     *
     * @uses \App\Callables\callByName
     */
    public function __call($method, $parameters)
    {
        return \App\Callables\callByName($this, $method, $parameters);
    }

    /**
     * Invoker.
     *
     * Retrieves the inner value or pipes it through any number of transforms.
     *
     * 💡 This makes this object callable, eliminating the need for a tap method.
     *
     * @implements \App\Contracts\TransformativeInvoker::__invoke
     * @group magic
     * @group nonary
     *
     * @param mixed[] $transforms The transforms to apply to the inner value.
     *
     * @uses \App\Assertions\assertInstanceOf
     * @uses \App\Callables\transform
     * @uses \App\Options\MultivalueOption::_array
     */
    public function __invoke(...$transforms)
    {
        \App\Assertions\assertInstanceOf($this, \OuterIterator::class);
        return \App\Callables\transform(
            arity: 1,
            seed: $this->_array(),
            transforms: $transforms,
            // context: $this,
        );
    }

    /**
     * Triggered by calling isset() or empty() on inaccessible (protected or private) or non-existing properties.
     * Dynamically check a property exists on the underlying object.
     *
     * @group accessor
     * @group accessor-by-key
     * @group magic
     * @group unary
     *
     * @param string $name Name of the property being called.
     *
     * @return bool
     */
    public function __isset(string $name)
    {
        return false;
    }

    /**
     * @uses \App\Options\MultivalueOption::getInnerIterator
     * @uses \iterator_to_array (native) Copies the output of an iterator into an array.
     */
    private function _array(): array
    {
        return \iterator_to_array($this->getInnerIterator());
    }

    /**
     * @group associative
     * @group multivalue
     * @group nonary
     *
     * @uses \App\Callables\run
     * @uses \App\Options\MultivalueOption::getInnerIterator
     * @uses \App\Options\wrap
     * @uses \is_null (native) Returns whether a variable is null.
     *
     * @throws \Throwable Any exception thrown out of \App\Callables\run.
     */
    private function _flatMapGenerator($callable)
    {
        foreach ($this->getInnerIterator() as $key => $value) {
            if (\is_null($value)) {
                continue;
            }

            yield $key => \App\Options\wrap(\App\Callables\run(
                callable: $callable,
                arguments_to_callable: [$value, $key, $this],
            ));
        }
    }

    /**
     * @group associative
     * @group multivalue
     * @group nonary
     *
     * @uses \App\Assertions\assertInstanceOf
     * @uses \App\Callables\run
     * @uses \App\Options\MultivalueOption::getInnerIterator
     * @uses \is_null (native) Returns whether a variable is null.
     *
     * @throws \Throwable Any exception thrown out of \App\Callables\run.
     */
    private function _mapGenerator($callable): \Generator
    {
        foreach ($this->getInnerIterator() as $key => $value) {
            if (\is_null($value)) {
                continue;
            }

            yield $key => \App\Callables\run(
                callable: $callable,
                arguments_to_callable: [$value, $key, $this],
            );
        }
    }

    /**
     * Not the same as self::reduce.
     *
     * @group binary
     *
     * @uses \App\Options\MultivalueOption::getInnerIterator
     */
    private function _reduce(callable $transform, mixed $seed = null): mixed
    {
        $result = $seed;

        foreach ($this->getInnerIterator() as $key => $value) {
            $result = $transform($result, $value, $key);
        }

        return $result;
    }

    /**
     * @implements \App\Concerns\Deferable::internalArguments
     * @group nonary
     *
     * @uses \App\Options\MultivalueOption::_array
     * @uses \ArrayIterator::__construct
     */
    protected function internalArguments(): \Traversable
    {
        return new \ArrayIterator($this->_array());
    }

    /**
     * Determines whether all items pass the given truth test.
     *
     * @group unary
     */
    public function any(Constraint $predicate): bool
    {
        foreach ($this as $item) {
            if ($predicate->evaluate($item, '', true)) {
                return true;
            }
        }

        return false;
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
    public function assert(mixed $predicate_callable): Optional
    {
        try {
            $closure = \App\Callables\makeClosure($predicate_callable);
            \assert($closure->bindTo($this));
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
     * Alias for the "avg" method.
     *
     * @group unary
     *
     * @param null|(callable(TValue): float|int)|string $callback
     *
     * @return null|float|int
     */
    public function average($callback = null)
    {
        return $this->avg($callback);
    }

    /**
     * Don't use \App\Dumping\dumpLabeled here. We want to dump the inner array as a whole, not as labeled items.
     *
     * @implements \App\Contracts\Dumps::dump
     * @group fluent
     * @group nonary
     *
     * @uses \App\Dumping\dumpWithLabel
     * @uses \App\Strings\titleUnwrapped
     */
    public function dump(): static
    {
        \App\Assertions\assertInstanceOf($this, \OuterIterator::class);
        \App\Dumping\dumpWithLabel(
            value: $this->array(),
            label: \App\Strings\titleUnwrapped($this),
        );
        return $this;
    }

    /**
     * Indicate that the model's string representation should be escaped when __toString is invoked.
     *
     * @group unary
     *
     * @param bool $escape
     *
     * @uses \App\Contracts\HasValue::get
     * @uses \App\Options\castBoolean
     *
     * @return $this
     */
    public function escapeWhenCastingToString(mixed $escape = true)
    {
        $this->escapeWhenCastingToString = \App\Options\castBoolean($escape)->get();

        return $this;
    }

    /**
     * Determines whether all items pass the given truth test.
     *
     * @group unary
     */
    public function every(Constraint $predicate): bool
    {
        return $this->_reduce(
            seed: true,
            transform: fn ($result, $value) => $result && !$predicate->evaluate($value, '', true),
        );
    }

    /**
     * If the option is empty, it is returned immediately without applying the callable.
     *
     * If the option is non-empty, the callable is applied, and if it returns true, the option itself is returned; otherwise, None is returned.
     *
     * @implements \App\Contracts\Filterable::filter
     * @group unary
     *
     * @uses \App\Options\MultivalueOption::partition
     */
    public function filter(Constraint $predicate): Optional
    {
        return $this->partition($predicate)->passed;
    }

    /**
     * If the option is empty, it is returned immediately without applying the callable.
     *
     * If the option is non-empty, the callable is applied, and if it returns false, the option itself is returned; otherwise, None is returned.
     *
     * @implements \App\Contracts\Filterable::filterNot
     * @group unary
     *
     * @uses \App\Options\MultivalueOption::partition
     */
    public function filterNot(Constraint $predicate): Optional
    {
        return $this->partition($predicate)->failed;
    }

    /**
     * Applies the callable to the value of the option if it is non-empty, and returns the return value of the callable directly.
     *
     * WARNING Doesn't do the assertion (instance of \App\Contracts\Optional) for the return value of the callable.
     *
     * @implements \App\Contracts\Mappable::flatMap
     * @group unary
     *
     * @throws \Throwable Any exception thrown out of generator.
     */
    public function flatMap($callable): mixed
    {
        return new class($this->_flatMapGenerator($callable)) extends \IteratorIterator implements \App\Contracts\Deferable, Dumps, Emptyable, Filterable, Foldable, Mappable, Optional
        {
            use MultivalueOption;
        };
    }

    /**
     * @implements \App\Contracts\Foldable::foldLeft
     * @group binary
     *
     * @uses \App\Options\foldLeft
     * @uses \App\Options\MultivalueOption::_array
     */
    public function foldLeft($initial_value, $callable)
    {
        return \App\Options\foldLeft($callable, $initial_value, $this->_array());
    }

    /**
     * @implements \App\Contracts\Foldable::foldRight
     * @group binary
     *
     * @uses \App\Options\foldRight
     * @uses \App\Options\MultivalueOption::_array
     */
    public function foldRight($initial_value, $callable)
    {
        return \App\Options\foldRight($callable, $initial_value, $this->_array());
    }

    /**
     * Calculate the fraction of items that pass a given truth test.
     *
     * @group unary
     *
     * @return null|float
     */
    public function fraction(mixed $callback)
    {
        if ($this->isEmpty()) {
            return;
        }

        return $this->filter($callback)->count() / $this->count();
    }

    /**
     * Returns the value if available, or throws an exception otherwise.
     *
     * @implements \App\Contracts\HasValue::get
     * @group nonary
     *
     * @uses \App\Options\MultivalueOption::_array
     *
     * @throws \RuntimeException If value is not available.
     */
    public function get()
    {
        return $this->_array();
    }

    /**
     * @implements \OuterIterator::getInnerIterator
     */
    public function getInnerIterator(): ?\Iterator
    {
        return match (true) {
            $this instanceof \Iterator => $this,
            $this instanceof \IteratorAggregate => new \IteratorIterator($this)
        };
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
     * Returns whether this collection or container is empty.
     *
     * Could also return true if no value is available, false otherwise.
     *
     * 💢 Can't be declared as boolean because \Illuminate\Support\Optional::isEmpty and  \PhpOption\Option::isEmpty are not type-declared.
     *
     * 💢 Do not implement as "return $this->count() === 0;" See note in \App\Concerns\EmptyByCount.
     *
     * @implements \App\Contracts\Emptyable::isEmpty
     * @implements \Illuminate\Support\Optional::isEmpty
     * @implements \App\Contracts\Emptyable::isEmpty
     * @group nonary
     * @group reductive
     *
     * @uses \count (native) Returns the number of items in an array or Countable object.
     * @uses \is_countable
     *
     * @return boolean
     */
    public function isEmpty()
    {
        return match (true) {
            \is_countable($this) => \count($this),
            default => \count($this->_array())
        }
        === 0;
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
     * Returns whether this collection or container is not empty.
     *
     * Could also return false if no value is available, true otherwise.
     *
     * 💢 Can't be declared as boolean because \Illuminate\Support\Optional::isNotEmpty and  \PhpOption\Option::isNotEmpty are not type-declared.
     *
     * 💢 Do not implement as "return $this->count() !== 0;" See note in \App\Concerns\EmptyByCount.
     *
     * @implements \App\Contracts\Emptyable::isNotEmpty
     * @implements \Illuminate\Support\Optional::isNotEmpty
     * @implements \App\Contracts\Emptyable::isNotEmpty
     * @group nonary
     * @group reductive
     *
     * @uses \count (native) Returns the number of items in an array or Countable object.
     * @uses \is_countable
     *
     * @return boolean
     */
    public function isNotEmpty()
    {
        return match (true) {
            \is_countable($this) => \count($this),
            default => \count($this->_array())
        }
        !== 0;
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
     * Converts the object into something that can be serialized into JSON.
     *
     * @implements \JsonSerializable::jsonSerialize
     * @group accessor
     * @group nonary
     * @group reductive
     *
     * @uses \App\Options\MultivalueOption::getInnerIterator
     * @uses \Illuminate\Contracts\Support\Arrayable::toArray
     * @uses \Illuminate\Contracts\Support\Jsonable::toJson
     * @uses \json_decode (native) Decodes a JSON string.
     * @uses \JsonSerializable::jsonSerialize(),
     *
     * @return mixed Value that can be serialized natively by \json_encode.
     */
    public function jsonSerialize(): array
    {
        $result = [];

        foreach ($this->getInnerIterator() as $key => $value) {
            $result[$key] = match (true) {
                $value instanceof \JsonSerializable => $value->jsonSerialize(),
                $value instanceof Jsonable => \json_decode($value->toJson(), true),
                $value instanceof Arrayable => $value->toArray(),
                default => $value,
            };
        }
        return $result;
    }

    /**
     * Applies the callable to all non-empty values in the collection.
     *
     * @implements \App\Contracts\Mappable::map
     * @group unary
     *
     * @throws \Throwable Any exception thrown out of generator.
     */
    public function map($callable): Optional
    {
        return new class($this->_mapGenerator($callable)) extends \IteratorIterator implements \App\Contracts\Deferable, Dumps, Emptyable, Filterable, Foldable, Mappable, Optional
        {
            use MultivalueOption;
        };
    }

    /**
     * Returns the numerical maximum value of the collection.
     *
     * @group nonary
     *
     * @uses \App\Options\MultivalueOption::reduce
     * @uses \is_null (native) Returns whether a variable is null.
     */
    public function max()
    {
        return $this
            ->_reduce(fn ($result, $value, $key) => \is_null($result) || $value > $result ? $value : $result);
    }

    /**
     * Returns the numerical minimum value of the collection.
     *
     * @group nonary
     *
     * @uses \App\Options\MultivalueOption::reduce
     * @uses \is_null (native) Returns whether a variable is null.
     */
    public function min()
    {
        return $this
            ->_reduce(fn ($result, $value, $key) => \is_null($result) || $value < $result ? $value : $result);
    }

    /**
     * Determines whether all items pass the given truth test.
     *
     * @group unary
     *
     * @uses \App\Options\MultivalueOption::_reduce
     */
    public function none(Constraint $predicate): bool
    {
        return $this->_reduce(
            seed: true,
            transform: fn (bool $result, mixed $value) => $result && !$predicate->evaluate($value, '', true),
        );
    }

    /**
     * Partition the collection into two arrays using the given callback or key.
     *
     * @group unary
     *
     * @uses \App\Options\MultivalueOption::getInnerIterator
     * @uses \PHPUnit\Framework\Constraint\Constraint::evaluate
     *
     * @return static<int<0, 1>, static<TKey, TValue>>
     */
    public function partition(Constraint $predicate): object
    {
        $passed = [];
        $failed = [];

        foreach ($this->getInnerIterator() as $key => $item) {
            if ($predicate->evaluate($item, '', true)) {
                $passed[$key] = $item;
            } else {
                $failed[$key] = $item;
            }
        }

        return (object) [
            'passed' => new class($passed) extends \ArrayIterator implements \App\Contracts\Deferable, Dumps, Emptyable, Filterable, Foldable, Mappable, Optional
            {
                use MultivalueOption;
            },
            'failed' => new class($failed) extends \ArrayIterator implements \App\Contracts\Deferable, Dumps, Emptyable, Filterable, Foldable, Mappable, Optional
            {
                use MultivalueOption;
            },
        ];
    }

    /**
     * Reduces the collection to a single value.
     *
     * @group binary
     * @group reductive
     *
     * @template TReduceInitial
     * @template TReduceReturnType
     *
     * @param TReduceInitial $initial
     *
     * @uses \App\Callables\transform
     * @uses \App\Options\MultivalueOption::getInnerIterator
     *
     * @return TReduceReturnType
     */
    public function reduce(mixed $transforms, $initial = null)
    {
        $result = $initial;

        foreach ($this->getInnerIterator() as $offset => $value) {
            $result = \App\Callables\transform(
                arity: 3,
                seed: $value,
                transforms: $transforms,
                offset: $offset,
                // context: $this,
            );
        }

        return $result;
    }

    /**
     * Alias for the "contains" method.
     *
     * @group trinary
     *
     * @param (callable(TValue, TKey): bool)|string|TValue $key
     * @param null|mixed $operator
     * @param null|mixed $value
     *
     * @return bool
     */
    public function some($key, $operator = null, $value = null)
    {
        return $this->contains(...\func_get_args());
    }

    /**
     * Returns the numerical sum of the collection.
     *
     * @uses \App\Options\MultivalueOption::_reduce
     */
    public function sum()
    {
        return $this->_reduce(
            transform: fn ($result, $value, $key) => $result + $value,
            seed: 0,
        );
    }

    /**
     * @group variadic
     *
     * @uses \App\Callables\transform
     * @uses \App\Options\MultivalueOption::_array
     */
    public function tap(...$callables): void
    {
        \App\Callables\transform(arity: 1, transforms: $callables, seed: $this->_array());
    }

    /**
     * Returns the collection of items as JSON.
     *
     * @group unary
     *
     * @param int $options
     *
     * @uses \json_encode (native) Returns the JSON representation of a value.
     *
     * @return string
     */
    public function toJson($options = 0)
    {
        return \json_encode($this->jsonSerialize(), $options);
    }

    /**
     * Returns only unique items from the collection array.
     *
     * @group binary
     *
     * @param null|(callable(TValue, TKey): mixed)|string $key
     * @param bool $strict
     *
     * @uses \App\Callables\BaseCallable::makeTransform
     *
     * @return static
     */
    public function unique($key = null, $strict = false)
    {
        $callback = BaseCallable::makeTransform($key);

        $exists = [];

        return $this->reject(
            /**
             * @uses \in_array (native) Returns whether a value exists in an array.
             */
            function ($item, $key) use ($callback, $strict, &$exists) {
                if (\in_array($id = $callback($item, $key), $exists, $strict)) {
                    return true;
                }

                $exists[] = $id;
            },
        );
    }

    /**
     * Returns only unique items from the collection array using strict comparison.
     *
     * @group unary
     *
     * @param null|(callable(TValue, TKey): mixed)|string $key
     *
     * @return static
     */
    public function uniqueStrict($key = null)
    {
        return $this->unique($key, true);
    }

    /**
     * Applies the callback unless the collection is empty.
     *
     * @group binary
     *
     * @template TUnlessEmptyReturnType
     *
     * @param callable($this): TUnlessEmptyReturnType $callback
     * @param null|(callable($this): TUnlessEmptyReturnType) $default
     *
     * @return $this|TUnlessEmptyReturnType
     */
    public function unlessEmpty(callable $callback, ?callable $default = null)
    {
        return $this->whenNotEmpty($callback, $default);
    }

    /**
     * Applies the callback unless the collection is not empty.
     *
     * @group binary
     *
     * @template TUnlessNotEmptyReturnType
     *
     * @param callable($this): TUnlessNotEmptyReturnType $callback
     * @param null|(callable($this): TUnlessNotEmptyReturnType) $default
     *
     * @return $this|TUnlessNotEmptyReturnType
     */
    public function unlessNotEmpty(callable $callback, ?callable $default = null)
    {
        return $this->whenEmpty($callback, $default);
    }

    /**
     * Returns a single key's value from the first matching item in the collection.
     *
     * @group binary
     *
     * @template TValueDefault
     *
     * @param string $key
     * @param (\Closure(): TValueDefault)|TValueDefault $default
     *
     * @uses \data_get
     * @uses \value
     *
     * @return TValue|TValueDefault
     */
    public function value($key, $default = null)
    {
        if ($value = $this->firstWhere($key)) {
            return \data_get($value, $key, $default);
        }

        return \value($default);
    }

    /**
     * Applies the callback if the collection is empty.
     *
     * @group binary
     *
     * @template TWhenEmptyReturnType
     *
     * @param (callable($this): TWhenEmptyReturnType) $callback
     * @param null|(callable($this): TWhenEmptyReturnType) $default
     *
     * @return $this|TWhenEmptyReturnType
     */
    public function whenEmpty(callable $callback, ?callable $default = null)
    {
        return $this->when($this->isEmpty(), $callback, $default);
    }

    /**
     * Applies the callback if the collection is not empty.
     *
     * @group binary
     *
     * @template TWhenNotEmptyReturnType
     *
     * @param callable($this): TWhenNotEmptyReturnType $callback
     * @param null|(callable($this): TWhenNotEmptyReturnType) $default
     *
     * @return $this|TWhenNotEmptyReturnType
     */
    public function whenNotEmpty(callable $callback, ?callable $default = null)
    {
        return $this->when($this->isNotEmpty(), $callback, $default);
    }
}
