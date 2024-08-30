<?php

namespace App\Facades;

use App\Callables\BaseCallable;
use App\Callables\Concerns\LeftFold;
use App\Callables\Concerns\RightFold;
use App\Callables\Concerns\SingleTransform;
use App\Contracts\HasValue;
use App\Contracts\Lazy;
use App\Contracts\Normalizable;
use App\Contracts\Throws;
use App\Options\FalseOption;
use App\Options\NullOption;
use App\Options\SimpleLazyOption;
use App\Options\ThrowingOption;
use App\Options\TrueOption;
use PhpOption\Option;

/**
 * Facade for making options.
 *
 * @deprecated Use \App\Options\functions.php instead.
 */
abstract class Optional
{
    /**
     * Method invoked when attempting invoke an inaccessible or undefined method of this class in a static context.
     *
     * @group magic
     * @group magic-call-signature
     * @group variadic
     *
     * @param string $name Name of the method being called.
     * @param mixed[] $arguments Enumerated array containing the parameters passed to the method.
     *
     * @uses \App\Options\wrap
     * @uses \array_shift (native) Removes the first element from an array and returns it.
     *
     * @return mixed (usually self)
     */
    public static function __callStatic(string $name, array $arguments)
    {
        $target = \array_shift($arguments);
        return \App\Options\wrap($target)->$name(...$arguments);
    }

    /**
     * @group unary
     *
     * @uses \App\Options\FalseOption::__construct
     * @uses \App\Options\NullOption::__construct
     * @uses \App\Options\TrueOption::__construct
     */
    private static function _castBoolean(mixed $value): \App\Contracts\Optional
    {
        return match ($value) {
            true => new TrueOption(),
            false => new FalseOption(),
            null => new NullOption(),
        };
    }

    /**
     * Runs the given Closure bound to this item then returns the result.
     *
     * Usage: return \App\Options\assert($callable,$this, VALUE);
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
    public static function assert(
        mixed $predicate_callable,
        mixed $that,
        object $object_representation_of_inner_value,
    ): \App\Contracts\Optional {
        try {
            $closure = \App\Callables\makeClosure($predicate_callable);
            \assert($closure->bindTo($object_representation_of_inner_value));
            return \App\Options\wrap($that);
        } catch (\AssertionError $exception) {
            \App\Dumping\dump($that); // dumps depending on environment and verbosity
            throw new \LogicException('assertion against proxy failed');
        } catch (\Throwable $exception) {
            \App\Dumping\dump($that); // dumps depending on environment and verbosity
            throw $exception;
        }
    }

    /**
     * @group binary
     *
     * @uses \App\Options\ThrowingOption::__construct
     * @uses \ValueError::__construct
     */
    public static function assertOption(mixed $value, $message): \App\Contracts\Optional
    {
        if ($value instanceof \App\Contracts\Optional) {
            return $value;
        }

        return new ThrowingOption(
            throwable: new \ValueError($message),
            context_to_dump: \compact('value'),
        );
    }

    /**
     * @group unary
     *
     * @uses \App\Options\ThrowingOption
     */
    public static function assertOptionForFlatMap(mixed $value): \App\Contracts\Optional
    {
        return \App\Options\assertOption($value, 'Callables passed to flatMap() must return an option. Maybe you should use map() instead?');
    }

    /**
     * @group defered-call
     * @group variadic
     *
     * @param array $arguments Arguments to pass to the callable.
     *
     * @throws \AssertionError
     */
    public static function castBoolean(mixed $given_value, array $arguments = []): mixed
    {
        return \App\Options\castBoolean($given_value, $arguments = []);
    }

    /**
     * @group binary
     */
    public static function classInstanceMaker(string $fqn, ?callable $transform = null): \Closure
    {
        return \App\Options\classInstanceMaker($fqn, $transform);
    }

    /**
     * @group variadic
     *
     * @uses \App\Options\iterate
     * @uses \App\Options\SimpleLazyOption::__construct
     * @uses \array_merge (native) Merges one or more arrays.
     * @uses \iterator_to_array (native) Copies the output of an iterator into an array.
     */
    public static function createLeftLazy(
        mixed $callable,
        mixed $internal_arguments,
        array $external_arguments = [],
        mixed $context_to_dump = [],
        mixed $enabled = true,
        mixed $binding_target = null,
    ): Lazy {
        return new SimpleLazyOption(
            callable: $callable,
            arguments_to_callable: \array_merge(
                \iterator_to_array(\App\Options\iterate($internal_arguments)),
                $external_arguments,
            ),
            context_to_dump: $context_to_dump,
            enabled: $enabled,
            binding_target: $binding_target,
        );
    }

    /**
     * @group variadic
     *
     * @uses \App\Options\iterate
     * @uses \App\Options\SimpleLazyOption::__construct
     * @uses \array_merge (native) Merges one or more arrays.
     * @uses \iterator_to_array (native) Copies the output of an iterator into an array.
     */
    public static function createRightLazy(
        mixed $callable,
        mixed $internal_arguments,
        array $external_arguments = [],
        mixed $context_to_dump = [],
        mixed $enabled = true,
        mixed $binding_target = null,
    ): Lazy {
        return new SimpleLazyOption(
            callable: $callable,
            arguments_to_callable: \array_merge(
                $external_arguments,
                \iterator_to_array(\App\Options\iterate($internal_arguments)),
            ),
            context_to_dump: $context_to_dump,
            enabled: $enabled,
            binding_target: $binding_target,
        );
    }

    /**
     * @group sugar Consider implementing literally instead of using this method.
     */
    public static function ensureThenIfNotEmpty(mixed $callable): \Closure
    {
        return \App\Options\ensureThenIfNotEmpty($callable);
    }

    /**
     * Basic implementation of \App\Contracts\Foldable::foldLeft.
     *
     * @group binary
     */
    public static function foldLeft(mixed $callable, mixed $initial_value, mixed $inner_value)
    {
        $folder = new class($callable) extends BaseCallable
        {
            use LeftFold;
            use SingleTransform;
        };
        return $folder($inner_value, $initial_value);
    }

    /**
     * Basic implementation of \App\Contracts\Foldable::foldRight.
     *
     * @group binary
     */
    public static function foldRight(mixed $callable, mixed $initial_value, mixed $inner_value)
    {
        $folder = new class($callable) extends BaseCallable
        {
            use RightFold;
            use SingleTransform;
        };
        return $folder($inner_value, $initial_value);
    }

    /**
     * @group variadic
     */
    public static function fromContext(...$sources): \App\Contracts\Optional
    {
        return \App\Options\fromContext(...$sources);
    }

    /**
     * Creates an option from an array's value.
     *
     * If the key does not exist in the array, the array is not actually an array, or the array's value at the given key is null, None is returned. Otherwise, Some is returned wrapping the value at the given key.
     *
     * @group binary
     *
     * @param string $key The key to check.
     */
    public static function fromOffset($source, $key): \App\Contracts\Optional
    {
        return \App\Options\fromOffset($source, $key);
    }

    /**
     * @group binary
     *
     * @param string $key The key to check.
     */
    public static function fromProperty($source, $key): \App\Contracts\Optional
    {
        return \App\Options\fromProperty($source, $key);
    }

    /**
     * Creates an option given a return value.
     *
     * ❗ Try to avoid calling this method. Instead, resolve the value to an appropriate instance of \App\Contracts\Optional.
     *
     * @group factory
     * @group unary
     *
     * @template S
     *
     * @return \App\Contracts\Optional<S>
     */
    public static function fromValue($source): \App\Contracts\Optional
    {
        return \App\Options\fromValue($source);
    }

    /**
     * Creates an option from a value or a specific attribute.
     *
     * If the key does not exist in the array, the array is not actually an array, or the array's value at the given key is null, None is returned. Otherwise, Some is returned wrapping the value at the given key.
     *
     * @template S
     *
     * @param string $key The key to check.
     *
     * @uses \App\Options\fromOffset
     * @uses \App\Options\fromValue
     */
    public static function fromValueOrAttribute(mixed $value, array $attributes, $key): \App\Contracts\Optional
    {
        return \is_null($value) ? \App\Options\fromOffset($attributes, $key) : \App\Options\fromValue($value);
    }

    /**
     * @group nonary
     *
     * @uses \__ (Laravel) Translates the message given to it.
     * @uses \App\Contracts\Throws::throwThrowable
     * @uses \App\Facades\Handler::dumpAndThrow
     * @uses \ArrayIterator::getArrayCopy
     * @uses \ArrayObject::getArrayCopy Creates an array copy of the ArrayObject.
     * @uses \assert (native) If enabled, and the given assertion is false, throws an exception.
     * @uses \CachingIterator::getCache
     * @uses \is_array (native) Returns whether a variable is an array.
     * @uses \is_null (native) Returns whether a variable is null.
     * @uses \is_object (native) Returns whether a variable is an object.
     * @uses \is_scalar (native) Returns whether a variable is a scalar value.
     * @uses \iterator_to_array (native) Copies the output of an iterator into an array.
     * @uses \LogicException::__construct
     * @uses \method_exists (native) Returns whether the class method exists.
     * @uses \PhpOption\Option::getOrThrow
     * @uses \ValueError::__construct
     *
     * @throws \LogicException
     */
    public static function unwrap(mixed $source)
    {
        $result = match (true) {
            \is_null($source) => null,
            \is_scalar($source) => $source,
            \is_array($source) => $source,
            \is_object($source) => match (true) {
                // specific classes
                $source instanceof \ArrayObject => $source->getArrayCopy(),
                $source instanceof \ArrayIterator => $source->getArrayCopy(),
                $source instanceof \CachingIterator => $source->getCache(),
                // specific interfaces
                $source instanceof \Illuminate\Support\Optional => throw new \LogicException('resolve value of  \\Illuminate\\Support\\Optional in code'),
                $source instanceof HasValue => $source->get(),
                $source instanceof Normalizable => $source->normalized(),
                $source instanceof Throws => throw $source->throwThrowable(),
                $source instanceof Option => $source->getOrThrow(new \LogicException(\__('no-value'))), // throws
                \method_exists($source, 'getInnerValue') => $source->getInnerValue(),
                $source instanceof \UnitEnum => $source,
                // try these last
                $source instanceof \Traversable => \iterator_to_array($source),
                \method_exists($source, '__toString') => $source->__toString(),
                default => Environment::rescue(
                    value: $source,
                    expectation: 'inner value',
                )
            }
        };

        // prevent infinite recursion
        \assert(!($result instanceof \App\Contracts\Optional));
        \assert(!($result instanceof \Illuminate\Support\Optional));
        \assert(!($result instanceof Option));

        return $result;
    }

    /**
     * Option factory, which creates new option based on passed value.
     *
     * @group unary
     */
    public static function wrap(mixed $candidate): \App\Contracts\Optional
    {
        return \App\Options\wrap($candidate);
    }
}
