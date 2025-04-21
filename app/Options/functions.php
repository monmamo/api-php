<?php

namespace App\Options;

use App\Callables\BaseCallable;
use App\Callables\Concerns\LeftFold;
use App\Callables\Concerns\RightFold;
use App\Callables\Concerns\SingleTransform;
use App\ColumnReference;
use App\Contracts\Deferable;
use App\Contracts\Dumps;
use App\Contracts\Emptyable;
use App\Contracts\Filterable;
use App\Contracts\Foldable;
use App\Contracts\HasBooleanCast;
use App\Contracts\HasFloatCast;
use App\Contracts\HasIntegerCast;
use App\Contracts\HasProperties;
use App\Contracts\HasTitleMethod;
use App\Contracts\HasTitleProperty;
use App\Contracts\HasValue;
use App\Contracts\Inputable;
use App\Contracts\Lazy;
use App\Contracts\Mappable;
use App\Contracts\Normalizable;
use App\Contracts\Optional;
use App\Contracts\Throws;
use App\Contracts\TransformativeInvoker;
use App\Facades\Context;
use App\Facades\Environment;
use App\Facades\Handler;
use App\Facades\Request;
use App\States\Immutable;
use App\Strings\Title;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use PhpOption\Option;

/**
 * @group unary
 *
 * @uses \App\Options\FalseOption::__construct
 * @uses \App\Options\NullOption::__construct
 * @uses \App\Options\TrueOption::__construct
 */
function _castBoolean(mixed $value): Optional
{
    return match ($value) {
        true => new TrueOption(),
        false => new FalseOption(),
        null => new NullOption(),
    };
}

/**
 * @group binary
 *
 * @uses \App\Options\ThrowingOption::__construct
 * @uses \ValueError::__construct
 */
function assertOption(mixed $value, $message): Optional
{
    if ($value instanceof Optional) {
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
 * @uses \App\Options\assertOption
 * @uses \App\Options\ThrowingOption
 */
function assertOptionForFlatMap(mixed $value): Optional
{
    return \App\Options\assertOption($value, 'Callables passed to flatMap() must return an option. Maybe you should use map() instead?');
}

/**
 * @group defered-call
 * @group variadic
 *
 * @param array $arguments Arguments to pass to the callable.
 *
 * @uses \app (Laravel) Gets an item from the available container instance.
 * @uses \App\Contracts\HasBooleanCast::asBoolean
 * @uses \App\Options\ThrowingOption::__construct
 * @uses \is_callable (native) Returns whether a variable can be called as a function.
 * @uses \is_null (native) Returns whether a variable is null.
 * @uses \UnhandledMatchError::__construct
 * @uses \value (Laravel) If given a Closure, evaluates it; otherwise returns the value given.
 *
 * @throws \AssertionError
 */
function castBoolean(mixed $given_value, array $arguments = []): Optional
{
    return match (true) {
        \is_null($given_value) => new FalseOption(),
        $given_value === true => new TrueOption(),
        $given_value === false => new FalseOption(),
        $given_value instanceof HasBooleanCast => \App\Options\_castBoolean($given_value->asBoolean()),
        \is_callable($given_value) => \value(
            /**
             * @group nonary
             *
             * @uses \assert (native) If enabled, and the given assertion is false, throws an exception.
             * @uses \ReflectionFunction::__construct
             * @uses \ReflectionFunction::getReturnType
             * @uses \ReflectionNamedType::getName
             *
             * @throws \AssertionError
             */
            static function () use ($given_value, $arguments) {
                \assert($given_value !== '');

                try {
                    $reflection = new \ReflectionFunction($given_value);
                } catch (\ReflectionException $e) {
                    \dump($given_value);
                    throw $e;
                }
                $return_type = $reflection->getReturnType(); // should return named type
                \assert(
                    $return_type instanceof \ReflectionNamedType && 'bool' === $return_type->getName(),
                    'return type must be bool',
                );
                // context_to_dump: compact('reflection', 'return_type'),
                return \App\Options\_castBoolean($given_value(...$arguments));
            },
        ),
        default => new ThrowingOption(
            throwable: new \UnhandledMatchError('cannot cast to boolean'),
            context_to_dump: \compact('value'),
        )
    };
}

/**
 * @group binary
 *
 * @uses \assert (native) If enabled, and the given assertion is false, throws an exception.
 * @uses \class_exists (native) Checks whether a string is the fully-qualified name of a defined class.
 */
function classInstanceMaker(string $fqn, ?callable $transform = null): \Closure
{
    \assert(\class_exists($fqn));
    $transform ??= fn ($value) => $value;
    return static function ($value) use ($fqn, $transform) {
        return $value instanceof $fqn ? $value : new $fqn($transform($value));
    };
}

/**
 * @group variadic
 *
 * @uses \App\Options\iterate
 * @uses \App\Options\SimpleLazyOption::__construct
 * @uses \array_merge (native) Merges one or more arrays.
 * @uses \iterator_to_array (native) Copies the output of an iterator into an array.
 */
function createLeftLazy(
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
function createRightLazy(
    mixed $callable,
    mixed $internal_arguments,
    array $external_arguments = [],
    mixed $context_to_dump = [],
    mixed $enabled = true,
    mixed $binding_target = null,
): Lazy {
    return new SimpleLazyOption(
        callable: $callable,
        arguments_to_callable: \array_merge($external_arguments, \iterator_to_array(\App\Options\iterate($internal_arguments))),
        context_to_dump: $context_to_dump,
        enabled: $enabled,
        binding_target: $binding_target,
    );
}

/**
 * @group sugar Consider implementing literally instead of using this method.
 */
function ensureThenIfNotEmpty(mixed $callable): \Closure
{
    return
        /**
         * @uses \App\Dumping\dumpIfException
         */
        static function ($value) use ($callable): void {
            \App\Dumping\dumpIfException(
                $value,
                /**
                 * @uses \App\Options\wrap
                 * @uses \LogicException::__construct
                 *
                 * @throws \LogicException
                 */
                function () use ($value, $callable): void {
                    $option = \App\Options\wrap($value);

                    if ($option instanceof HasValue) {
                        $callable($option);
                        return;
                    }

                    throw new \LogicException('invalid source');
                },
            );
        };
}

/**
 * @group binary
 *
 * @uses \App\Contracts\Emptyable::isEmpty
 * @uses \App\Contracts\Inputable::fieldValue
 * @uses \App\Options\unwrap
 * @uses \Illuminate\Database\Eloquent\Model::getAttribute
 * @uses \Illuminate\Session\Store::getOldInput
 * @uses \Illuminate\Support\Facades\Request::hasSession
 * @uses \Illuminate\Support\Facades\Request::session
 */
function fieldValue(mixed $field_or_value, mixed $key)
{
    // Unwrap App\Contracts\Inputable.
    if ($field_or_value instanceof Inputable) {
        $field_or_value = $field_or_value->fieldValue();
    }

    // Unwrap model.
    if ($field_or_value instanceof Model) {
        $field_or_value = $field_or_value->getAttribute($key);
    }

    return \App\Options\unwrap($field_or_value) ?? Request::session()?->getOldInput($key);
}

/**
 * Constructs a new slug from a sequence of pieces.
 *
 * @see app/Methods/Make/README.md
 *
 * @group factory
 * @group unary
 *
 * @uses \App\Options\arrayAccessFacade
 * @uses \App\Options\fromFilterOffset
 */
function filterFactory(
    mixed $source,
    mixed $apply = null,
): \ArrayAccess {
    return \App\Options\arrayAccessFacade(
        on_isset: fn ($offset) => \App\Options\fromFilterOffset($source, $offset) instanceof HasValue,
        on_get: fn ($offset) => \App\Options\fromFilterOffset($source, $offset),
    );
}

/**
 * @group binary
 */
function arrayAccessFacade(callable $on_isset, callable $on_get): \ArrayAccess
{
    return new class($on_isset, $on_get) implements \ArrayAccess
    {
        use Immutable;

        /**
         * Constructor.
         *
         * @group magic
         * @group mutator
         * @group nonary|unary|variadic
         *
         * @uses \is_callable (native) Returns whether a variable can be called as a function.
         *
         * @return void
         */
        public function __construct(private readonly mixed $on_isset, private readonly mixed $on_get)
        {
            \assert(\is_callable($on_isset));
            \assert(\is_callable($on_get));
        }

        /**
         * Returns a boolean indicating whether an offset exists or or represents a retrievable value in this collection.
         *
         * @implements \ArrayAccess::offsetExists
         * @group accessor-by-key
         * @group reductive
         * @group unary
         *
         * @param mixed $offset Offset to check.
         *
         * @return boolean True if the offset exists in this collection; false if it doesn't.
         */
        public function offsetExists($offset): bool
        {
            return ($this->on_isset)($offset);
        }

        /**
         * Returns the value at the offset, or throws an appropriate exception.
         *
         * @implements \ArrayAccess::offsetGet
         * @group accessor
         * @group accessor-by-key
         * @group resolving
         * @group selective
         * @group unary
         *
         * @param mixed $offset Offset to retrieve.
         */
        public function offsetGet($offset): mixed
        {
            return ($this->on_get)($offset);
        }
    };
}

/**
 * Basic implementation of \App\Contracts\Foldable::foldLeft.
 *
 * @group binary
 * @group sugar
 */
function foldLeft(mixed $callable, mixed $initial_value, mixed $inner_value)
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
 * @group sugar
 */
function foldRight(mixed $callable, mixed $initial_value, mixed $inner_value)
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
 *
 * @uses \App\Facades\Context::yieldContext
 */
function fromContext(...$sources): Optional
{
    return new class(Context::yieldContext($sources)) extends \IteratorIterator implements Optional
    {
        use MultivalueOption;
    };
}

/**
 * We have a two-step process:
 * - Convert the input into an option.
 * - Use that option to determine what needs to come out of here.
 *
 * We return DateTimeOption or NullOption.
 *
 * @group unary
 *
 * @uses \App\Contracts\Emptyable::isEmpty
 * @uses \App\Options\NullOption::__construct
 * @uses \App\Options\wrap
 * @uses \dd (Laravel) Dump the passed variables and end the script.
 * @uses \is_object (native) Returns whether a variable is an object.
 * @uses \property_exists
 */
function fromDateTime($source): Optional
{
    $source_option = \App\Options\wrap($source);

    if ($source_option instanceof Emptyable && $source_option->isEmpty()) {
        return new class() extends NullOption
        {
            /**
             * @implements \App\Contracts\Dumps::dump
             * @group fluent
             * @group nonary
             */
            public function dump(): static
            {
                return $this;
            }

            /**
             * Analog of \Carbon\Traits\Comparison::isFuture.
             *
             * @group nonary
             *
             * @return boolean
             */
            public function isFuture()
            {
                return false;
            }
        };
    }

    $result = match (true) {
        $source_option instanceof TrueOption => new DateTimeOption('now'),
        $source_option instanceof \Stringable => new DateTimeOption((string) $source_option),
        default => \dd($source)
    };

    if ($result->hour === 0 && $result->minute === 0 && $result->second === 0 && $result->micro === 0) {
        // Assume we have an absolute date with no time zone.
        return $result;
    }

    // Otherwise set the timezone to our own.
    static $timezone;
    $timezone ??= new \DateTimeZone('America/Chicago');
    $result->setTimezone($timezone);
    return $result;
}

/**
 * Never call this method from within another makeOption method!
 *
 * Not the same as \App\Options\fromOffset.
 *
 * @group nonary
 * @group resolving
 *
 * @uses \App\Offset\unwrap
 * @uses \App\Options\NullOption::__construct
 * @uses \App\Options\wrap
 */
function fromFilterOffset(mixed $source, mixed $key): Optional
{
    $source_option = \App\Options\wrap($source);
    $key = (string) ColumnReference::of($key);

    if ($source_option instanceof \ArrayAccess && isset($source_option[$key])) {
        return \App\Options\wrap($source_option[$key]);
    }

    if ($source_option instanceof \Stringable && (string) $source_option === $key) {
        return $source_option;
    }

    return new NullOption();
}

/**
 * Creates an option from an array's value.
 *
 * If the key does not exist in the array, the array is not actually an array, or the array's value at the given key is null, None is returned. Otherwise, Some is returned wrapping the value at the given key.
 *
 * @group binary
 *
 * @uses \App\Contracts\Throws::throwThrowable
 * @uses \App\Options\fromOffsetOfArrayAccess
 * @uses \App\Options\InnerOption::option
 * @uses \App\Options\NullOption::__construct
 * @uses \App\Options\wrap
 * @uses \App\Strings\expectationMessage
 */
function fromOffset(mixed $source, mixed $offset): Optional
{
    $source_option = \App\Options\wrap($source);

    if ($source_option  instanceof \ArrayAccess) {
        return \App\Options\fromOffsetOfArrayAccess($source_option, $offset);
    }

    if ($source_option  instanceof NullOption) {
        return new NullOption();
    }

    if ($source_option  instanceof ThrowingOption) {
        return $source_option;
    }

    if ($source_option instanceof Throws) {
        $source_option->throwThrowable();
    }

    return new ThrowingOption(
        throwable: new \LogicException(\App\Strings\expectationMessage(
            expectation: 'something that has an offset',
            value: $source,
        )),
    );
}

/**
 * @group unary
 *
 * @uses \App\Dumping\dumpIfException
 * @uses \is_array
 * @uses \is_int
 * @uses \is_null
 * @uses \is_string
 * @uses \iterator_to_array (native) Copies the output of an iterator into an array.
 * @uses \UnhandledMatchError::__construct
 *
 * @throws \UnhandledMatchError
 */
function wrapAnythingAsArray(mixed $offset): array
{
    return \App\Dumping\dumpIfException(
        $offset,
        fn () => match (true) {
            \is_null($offset) => [],
            \is_array($offset) => $offset,
            \is_int($offset) => [$offset],
            \is_string($offset) => [$offset],
            $offset instanceof \Traversable => \iterator_to_array($offset),
            $offset instanceof \BackedEnum => [$offset->value],
            $offset instanceof NullOption => [],
            // perhaps return a ThrowingOption for this?
            default => throw new \UnhandledMatchError('invalid offset value of type ' . \get_debug_type($offset))
        },
    );
}

/**
 * Returns an option for a specific offset represented or produced by the option.
 *
 * @group binary
 *
 * @uses \__ (Laravel) Translates the message given to it.
 * @uses \App\ColumnReference::__toString
 * @uses \App\ColumnReference::of
 * @uses \App\Options\ThrowingOption::__construct
 * @uses \count (native) Returns the number of items in an array or Countable object.
 * @uses \Countable::count
 * @uses \empty
 * @uses \get_debug_type (native) Returns the type of a variable, with special handling for objects.
 * @uses \Illuminate\Support\Collection::offsetExists
 * @uses \Illuminate\Support\Collection::offsetGet
 * @uses \is_array (native) Returns whether a variable is an array.
 * @uses \is_bool (native) Returns whether a variable is boolean.
 * @uses \is_int (native) Returns whether the given variable is an integer.
 * @uses \is_null (native) Returns whether a variable is null.
 * @uses \is_numeric (native) Returns whether or not a variable is a number or a numeric string.
 * @uses \is_string (native) Returns whether a variable is a string.
 * @uses \trim (native) Strips whitespace from the beginning and end of a string.
 * @uses \UnhandledMatchError::__construct
 * @uses \value (Laravel) If given a Closure, evaluates it; otherwise returns the value given.
 * @uses \ValueError::__construct
 */
function fromOffsetOfArrayAccess(\ArrayAccess $source, mixed $offset): Optional
{
    $subkeys = \App\Options\wrapAnythingAsArray($offset);

    $result_cache = [];

    foreach ($subkeys as $subkey_offset => $subkey) {
        $subkey = (string) ColumnReference::of($subkey); // This really shouldn't be in here, but we don't have good enough resolution to avoid it.

        if ($subkey && isset($source[$subkey])) {
            $result_cache[$subkey_offset] = $source[$subkey];
            // if (match (true) {
            //     \is_null($value) => false,
            //     \is_string($value) => trim($value) !== '',
            //     $value instanceof \Stringable => trim((string) $value) !== '',
            //     is_numeric($value) => true,
            //     \is_bool($value) => true,
            //     \is_array($value) => \count($value) !== 0,
            //     $value instanceof \Countable => \count($value) !== 0,
            //     default => \App\Dumping\dumpAndExit($value)
            // }) {
            //     $callable($value);
            // }
        }
    } // foreach

    if (\count($subkeys) !== 1) {
        return new class($result_cache) extends \ArrayIterator implements \OuterIterator, Deferable, Dumps, Emptyable, Filterable, Foldable, Mappable, Optional
        {
            use MultivalueOption;
        };
    }

    if (\count($result_cache) === 1) {
        return \App\Options\fromValue($result_cache[0]);
    }

    if (\count($result_cache) === 0) {
        return new ThrowingOption(
            throwable: new \ValueError('attempted to get an offset that doesn\'t exist'),
            context_to_dump: ['offset' => $offset, 'source' => $source],
        );
    }

    return new ThrowingOption(
        throwable: new \ValueError('single value expected, but multiple values found'),
        context_to_dump: ['offset' => $offset, 'source' => $source],
    );
}

/**
 * Replacement for Arr::wrap: \iterator_to_array(\App\Options\iterate(VALUE));.
 *
 * @group unary
 *
 * @uses \App\Contracts\HasValue::get
 * @uses \App\Options\iterate
 * @uses \App\Options\wrap
 * @uses \ArrayIterator::__construct
 * @uses \EmptyIterator::__construct
 * @uses \IteratorIterator::__construct
 */
function iterate(mixed $value): \Iterator
{
    if ($value instanceof \Closure) {
        return \App\Options\iterate($value());
    }

    $option = \App\Options\wrap($value);
    return match (true) {
        $option instanceof \Iterator => $option,
        $option instanceof \IteratorAggregate => new \IteratorIterator($option),
        $option instanceof HasValue => new \ArrayIterator([$option->get()]),
        $option instanceof NullOption => new \EmptyIterator(),
    };
}

/**
 * @group binary
 *
 * @param string $key The key to check.
 *
 * @uses \App\Options\NullOption::__construct
 * @uses \App\Options\wrap
 * @uses \dd (Laravel) Dump the passed variables and end the script.
 * @uses \is_object (native) Returns whether a variable is an object.
 * @uses \property_exists
 */
function fromProperty($source, $key): Optional
{
    if (\is_object($source)) {
        if (isset($source->$key)) {
            return \App\Options\wrap($source->$key);
        }
        return new NullOption();
    }

    \dd($source, $key);
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
 * @uses \__ (Laravel) Translates the message given to it.
 * @uses \App\Optional\FalseOption::__construct
 * @uses \App\Optional\NullOption::__construct
 * @uses \App\Optional\TrueOption::__construct
 * @uses \App\Options\ThrowingOption::__construct
 * @uses \App\Strings\Title::__construct
 * @uses \App\Strings\Title::make
 * @uses \App\Strings\wrap
 * @uses \Illuminate\Contracts\Support\Arrayable::toArray,
 * @uses \Illuminate\Contracts\Support\Jsonable::toJson
 * @uses \Illuminate\Support\Enumerable::all
 * @uses \Illuminate\View\ComponentAttributeBag::getAttributes
 * @uses \is_array (native) Returns whether a variable is an array.
 * @uses \is_null (native) Returns whether a variable is null.
 * @uses \is_numeric (native) Returns whether or not a variable is a number or a numeric string.
 * @uses \is_string (native) Returns whether a variable is a string.
 * @uses \json_decode
 * @uses \JsonSerializable::jsonSerialize
 * @uses \PhpOption\Option::get
 * @uses \PhpOption\Option::isDefined
 * @uses \ValueError::__construct
 *
 * @return \App\Contracts\Optional<S>
 */
function fromValue($source): Optional
{
    return match (true) {
        // do this first
        $source instanceof TransformativeInvoker => \App\Options\fromValue($source()),
        $source instanceof \Illuminate\Support\Optional => new ThrowingOption(
            throwable: new \ValueError('Convert value of \\Illuminate\\Support\\Optional to \\App\\Optional in code.'),
            context_to_dump: \compact('source'),
        ),
        $source instanceof Optional => $source,
        $source instanceof Option => match (true) {
            $source->isDefined() => \App\Options\fromValue($source->get()),
            default => new ThrowingOption(
                throwable: new \ValueError(\__('no-value')),
                context_to_dump: \compact('source'),
            )
        },
        \is_null($source) => new NullOption(),
        $source === true => new TrueOption(),
        $source === false => new FalseOption(),
        \is_string($source) => \App\Strings\wrap($source),
        \is_numeric($source) => new NumericOption($source),
        \is_array($source) => new class($source) extends \ArrayIterator implements Deferable, Dumps, Emptyable, Filterable, Foldable, Mappable, Optional
        {
            use MultivalueOption;

            public function offset(mixed $offset): Optional
            {
                return \App\Options\fromOffset($this, $offset);
            }
        },
        // specific classes
        // more general classes and interfaces
        $source instanceof \Illuminate\Support\Stringable => \App\Strings\wrap($source->__toString()),
        $source instanceof \DateTimeInterface => new DateTimeOption($source),
        $source instanceof \BackedEnum => new BackedEnumOption($source),
        $source instanceof \UnitEnum => new UnitEnumOption($source),
        $source instanceof HasTitleMethod => $source->title(),
        $source instanceof HasTitleProperty => Title::make($source->title),
        $source instanceof Builder => \App\Strings\wrap($source->getQuery()->toRawSql()),
        $source instanceof \Illuminate\Database\Query\Builder => \App\Strings\wrap($source->toRawSql()),
        // various forms of collections
        // $source instanceof \lluminate\View\ComponentAttributeBag,
        $source instanceof Arrayable => new class($source->toArray()) extends \ArrayObject implements Deferable, Dumps, Emptyable, Filterable, Foldable, Mappable, Optional
        {
            use MultivalueOption;
        },
        // check these last in this order
        $source instanceof \Traversable => new class($source) extends \IteratorIterator implements Deferable, Dumps, Emptyable, Filterable, Foldable, Mappable, Optional
        {
            use MultivalueOption;
        },
        $source instanceof \Stringable => \App\Strings\wrap((string) $source),
        \is_object($source) => new ObjectOption($source), // will never be multivalue
        default => new ThrowingOption(
            throwable: new \ValueError('unhandled value type'),
            context_to_dump: \compact('source'),
        ),
    };
}

/**
 * Creates an option from a value or a specific attribute.
 *
 * If the key does not exist in the array, the array is not actually an array, or the array's value at the given key is null, None is returned. Otherwise, Some is returned wrapping the value at the given key.
 *
 * @group trinary
 *
 * @param string $key The key to check.
 *
 * @uses \App\Options\fromOffset
 * @uses \App\Options\fromValue
 * @uses \is_null (native) Returns whether a variable is null.
 */
function fromValueOrAttribute(mixed $value, array $attributes, $key): Optional
{
    return \is_null($value) ? \App\Options\fromOffset($attributes, $key) : \App\Options\fromValue($value);
}

/**
 * @group sugar
 * @group unary
 *
 * @uses \App\Options\IdentityInteger\wrap
 */
function identityInteger(mixed $offset_raw): Optional
{
    return \App\Options\IdentityInteger\wrap($offset_raw);
}

/**
 * Transforms the given value if it has an inner value.
 *
 * Replacement for \transform.
 *
 * @group binary
 *
 * @uses \App\Contracts\Emptyable::isEmpty
 * @uses \App\Contracts\HasValue::get
 * @uses \App\Contracts\Throws::throwThrowable
 * @uses \App\Options\wrap
 * @uses \App\Strings\expectationMessage
 * @uses \assert (native) If enabled, and the given assertion is false, throws an exception.
 *
 * @throws \AssertionError
 */
function transform(mixed $value, callable $callable): mixed
{
    $value_option = \App\Options\wrap($value);

    if ($value_option instanceof Emptyable && $value_option->isEmpty()) {
        return null;
    }

    if ($value_option instanceof HasValue) {
        return $callable($value_option->get());
    }

    if ($value_option instanceof Throws) {
        $value_option->throwThrowable();
    }

    throw new \AssertionError(
        \App\Strings\expectationMessage(
            expectation: HasValue::class,
            value: $value_option,
        ),
    );
}

/**
 * Transforms the given value if it has an inner value.
 *
 * Replacement for \transform.
 *
 * @group binary
 *
 * @uses \App\Contracts\Emptyable::isEmpty
 * @uses \App\Contracts\HasValue::get
 * @uses \App\Contracts\Throws::throwThrowable
 * @uses \App\Options\wrap
 * @uses \App\Strings\expectationMessage
 * @uses \assert (native) If enabled, and the given assertion is false, throws an exception.
 *
 * @throws \AssertionError
 */
function get(mixed $value): mixed
{
    $value_option = \App\Options\wrap($value);

    if ($value_option instanceof Emptyable && $value_option->isEmpty()) {
        return null;
    }

    if ($value_option instanceof HasValue) {
        return $value_option->get();
    }

    if ($value_option instanceof Throws) {
        $value_option->throwThrowable();
    }

    throw new \AssertionError(
        \App\Strings\expectationMessage(
            expectation: HasValue::class,
            value: $value_option,
        ),
    );
}

/**
 * Returns whether this collection or container is empty.
 *
 * Could also return true if no value is available, false otherwise.
 *
 * 💢 Can't be declared as boolean because \Illuminate\Support\Optional::isEmpty and  \PhpOption\Option::isEmpty are not type-declared.
 *
 * @implements \App\Contracts\Emptyable::isEmpty
 * @implements \Illuminate\Support\Optional::isEmpty
 * @implements \App\Contracts\Emptyable::isEmpty
 * @group nonary
 * @group reductive
 *
 * @uses \App\Contracts\Throws::throwThrowable
 * @uses \LogicException::__construct
 *
 * @return boolean
 * @throws \LogicException
 */
function isEmpty(mixed $value)
{
    $value_option = \App\Options\wrap($value);

    if ($value_option  instanceof HasValue) {
        return false;
    }

    if ($value_option instanceof Throws) {
        $value_option->throwThrowable();
    }

    throw new \LogicException('inner option is not emptyable');
}

/**
 * Returns whether this collection or container is not empty.
 *
 * Could also return false if no value is available, true otherwise.
 *
 * 💢 Can't be declared as boolean because \Illuminate\Support\Optional::isNotEmpty and  \PhpOption\Option::isNotEmpty are not type-declared.
 *
 * @implements \App\Contracts\Emptyable::isNotEmpty
 * @implements \Illuminate\Support\Optional::isNotEmpty
 * @implements \App\Contracts\Emptyable::isNotEmpty
 * @group nonary
 * @group reductive
 *
 * @uses \App\Contracts\Throws::throwThrowable
 * @uses \LogicException::__construct
 *
 * @return boolean
 * @throws \LogicException
 */
function isNotEmpty(mixed $value)
{
    $value_option = \App\Options\wrap($value);

    if ($value_option  instanceof HasValue) {
        return true;
    }

    if ($value_option instanceof Throws) {
        $value_option->throwThrowable();
    }

    throw new \LogicException('inner option is not emptyable');
}

/**
 * Returns an option for a specific property value represented or produced by the option.
 *
 * @implements \App\Contracts\HasProperties::property
 * @group unary
 *
 * @uses \App\Contracts\HasProperties::property
 * @uses \App\Contracts\Throws::throwThrowable
 * @uses \App\Options\InnerOption::option
 * @uses \App\Strings\expectationMessage
 * @uses \LogicException::__construct
 *
 * @throws \LogicException
 */
function property(mixed $value, mixed $property): mixed
{
    $value_option = \App\Options\wrap($value);

    if ($value_option  instanceof HasProperties) {
        return $value_option->property($property);
    }

    if ($value_option instanceof Throws) {
        $value_option->throwThrowable();
    }

    throw new \LogicException(\App\Strings\expectationMessage(
        expectation: HasProperties::class,
        value: $value,
    ));
}

/**
 * Lets all values through except the passed value.
 *
 * @implements \App\Contracts\Filterable::reject
 * @group passthrough
 * @group unary
 *
 * @uses \App\Contracts\Filterable::reject
 * @uses \App\Contracts\Throws::throwThrowable
 * @uses \App\Options\InnerOption::option
 * @uses \App\Strings\expectationMessage
 * @uses \LogicException::__construct
 *
 * @throws \LogicException
 */
function reject(mixed $value): Optional
{
    $value_option = \App\Options\wrap($value);

    if ($value_option  instanceof Filterable) {
        return $value_option->reject($value);
    }

    if ($value_option instanceof Throws) {
        $value_option->throwThrowable();
    }

    throw new \LogicException(\App\Strings\expectationMessage(
        expectation: Filterable::class,
        value: $value,
    ));
}

/**
 * Lets through only the passed value.
 *
 * @implements \App\Contracts\Filterable::select
 * @group passthrough
 * @group unary
 *
 * @uses \App\Contracts\Filterable::select
 * @uses \App\Contracts\Throws::throwThrowable
 * @uses \App\Options\InnerOption::option
 * @uses \App\Strings\expectationMessage
 * @uses \LogicException::__construct
 *
 * @throws \LogicException
 */
function select(mixed $value): Optional
{
    $value_option = \App\Options\wrap($value);

    if ($value_option  instanceof Filterable) {
        return $value_option->select($value);
    }

    if ($value_option instanceof Throws) {
        $value_option->throwThrowable();
    }

    throw new \LogicException(\App\Strings\expectationMessage(
        expectation: Filterable::class,
        value: $value,
    ));
}

/**
 * Runs a callable directly on the inner value if it is defined.
 *
 * This method is preferred for callables with side-effects, while map() is intended for callables without side-effects.
 *
 * Should never throw an exception for a null value. If the value is null or undefined, simply do not call the callable.
 *
 * Replacement for \with.
 *
 * @group fluent
 * @group functional
 * @group passthrough
 * @group unary
 *
 * @uses \App\Callables\transform
 * @uses \App\Contracts\Throws::throwThrowable
 * @uses \App\Options\InnerOption::option
 * @uses \App\Options\wrap
 * @uses \App\Strings\expectationMessage
 * @uses \LogicException::__construct
 *
 * @throws \LogicException
 */
function with(mixed $value, mixed $callable): void
{
    if (\is_null($callable)) {
        return;
    }

    $value_option = \App\Options\wrap($value);

    if ($value_option instanceof Throws) {
        $value_option->throwThrowable();
    }

    if ($value_option  instanceof HasValue) {
        \App\Callables\transform(1, $callable, $value_option->get());
        return;
    }

    if ($value_option instanceof NullOption) {
        return;
    }

    if ($value_option instanceof Emptyable && $value_option->isEmpty()) {
        return;
    }

    throw new \LogicException(\App\Strings\expectationMessage(
        expectation: 'tappable',
        value: $value,
    ));
}

/**
 * Runs a callable on all inner values represented or produced by the option.
 *
 * Should never throw an exception for a null value. If the value is null or undefined, simply do not call the callable.
 *
 * @group fluent
 * @group functional
 * @group passthrough
 * @group unary
 *
 * @uses \App\Callables\transform
 * @uses \App\Contracts\Throws::throwThrowable
 * @uses \App\Options\InnerOption::option
 * @uses \App\Options\wrap
 * @uses \App\Strings\expectationMessage
 * @uses \LogicException::__construct
 *
 * @throws \LogicException
 */
function withAll(mixed $value, mixed $callable): void
{
    if (\is_null($callable)) {
        return;
    }

    $value_option = \App\Options\wrap($value);

    if ($value_option instanceof Throws) {
        $value_option->throwThrowable();
    }

    if ($value_option instanceof \Traversable) {
        foreach ($value_option as $inner_value) {
            \App\Callables\transform(1, $callable, $inner_value);
        }
        return;
    }

    if ($value_option  instanceof HasValue) {
        \App\Callables\transform(1, $callable, $value_option->get());
        return;
    }

    if ($value_option instanceof Emptyable && $value_option->isEmpty()) {
        return;
    }

    throw new \LogicException(\App\Strings\expectationMessage(
        expectation: 'tappable',
        value: $value,
    ));
}

/**
 * @group nonary
 *
 * @uses \__ (Laravel) Translates the message given to it.
 * @uses \App\Contracts\HasValue::get
 * @uses \App\Contracts\Lazy::resolve
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
 * @throws \AssertionError
 * @throws \LogicException
 */
function unwrap(mixed $source)
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
            $source instanceof Throws => $source->throwThrowable(),
            $source instanceof Option => $source->getOrThrow(new \LogicException(\__('no-value'))), // throws
            \method_exists($source, 'getInnerValue') => $source->getInnerValue(),
            $source instanceof \UnitEnum => $source,
            // try these last
            $source instanceof \Traversable => \iterator_to_array($source),
            \method_exists($source, '__toString') => $source->__toString(),
            $source instanceof HasFloatCast => \value(function () use ($source) {
                Handler::glowWarning('HasFloatCast unwrapped to inner float.', \compact('source'));
                return $source->asFloat();
            }),
            $source instanceof HasIntegerCast => \value(function () use ($source) {
                Handler::glowWarning('HasFloatCast unwrapped to inner integer.', \compact('source'));
                return $source->asInteger();
            }),
            $source instanceof NullOption => null,
            default => Environment::rescue(
                value: $source,
                expectation: 'inner value',
            ),
        }
    };

    // prevent infinite recursion
    \assert(!($result instanceof Optional));
    \assert(!($result instanceof \Illuminate\Support\Optional));
    \assert(!($result instanceof Option));

    return $result;
}

/**
 * Option factory, which creates new option based on passed value.
 *
 * This method should never throw an exception.
 *
 * usage:
 * \App\Options\wrap(VALUE);
 *
 * curry:
 * fn ($value) => $callable(\App\Options\wrap($value));
 *
 * @group unary
 *
 * @uses \App\Options\fromValue
 * @uses \App\Options\ThrowingOption::__construct
 * @uses \is_callable (native) Returns whether a variable can be called as a function.
 * @uses \is_object (native) Returns whether a variable is an object.
 */
function wrap(mixed $candidate): Optional
{
    return match (true) {
        $candidate instanceof Optional => $candidate,
        $candidate instanceof \Throwable => new ThrowingOption($candidate),
        $candidate instanceof \Closure,
        \is_object($candidate) && \is_callable($candidate) => new class($candidate) implements Lazy, Optional
        {
            private readonly mixed $_inner_value;

            /**
             * Constructor.
             *
             * @group magic
             * @group mutator
             * @group variadic
             *
             * @return void
             */
            public function __construct(
                protected readonly mixed $callable,
            ) {}

            /**
             * Returns this option if non-empty, or the passed option otherwise.
             *
             * @implements \App\Contracts\Optional::orElse
             * @group passthrough
             * @group unary
             *
             * @uses \App\Contracts\Optional::orElse
             */
            final public function orElse(Optional $else): Optional
            {
                return $this->resolve()->orElse($else);
            }

            /**
             * Resolves the lazy value.
             *
             * @implements \App\Contracts\Lazy::resolve
             * @group nonary
             *
             * @uses \App\Callables\run
             * @uses \App\Options\wrap
             */
            public function resolve(): Optional
            {
                return $this->_inner_value ??= \App\Callables\run(
                    callable: $this->callable,
                    return_as_option: true,
                );
            }
        },
        default => \App\Options\fromValue($candidate)
    };
}

/**
 * @group unary
 *
 * @deprecated
 */
function wrapArray(array $candidate): Optional
{
    return new class($candidate) extends \ArrayObject implements Deferable, Dumps, Emptyable, Filterable, Foldable, HasValue, Mappable, Optional
    {
        use MultivalueOption;
    };
}

/**
 * @group unary
 *
 * @deprecated
 */
function wrapCollection(mixed $candidate): Optional
{
    return new class($candidate) extends \ArrayObject implements Deferable, Dumps, Emptyable, Filterable, Foldable, HasValue, Mappable, Optional
    {
        use MultivalueOption;
    };
}

/**
 * @group unary
 *
 * @uses \App\Options\wrap
 */
function unwrapFirst(mixed $value): mixed
{
    $option = \App\Options\wrap($value);

    if ($option instanceof \ArrayAccess) {
        return $option[0] ?? null;
    }

    if ($option instanceof HasValue) {
        return $option->get();
    }

    if ($option instanceof NullOption) {
        return null;
    }

    return new ThrowingOption($value);
}

/**
 * @group unary
 *
 * @uses \App\Options\wrap
 */
function getFilter(\ArrayAccess $source): Optional
{
    return \App\Options\wrap($source['filter'] ?? null);
}

/**
 * @group unary
 *
 * @uses \App\Options\wrap
 */
function getScope(\ArrayAccess $source): Optional
{
    return \App\Options\wrap($source['scope'] ?? null);
}

function wrapRenderable(string $input): Renderable
{
    return new class($input) implements Renderable
    {
        /**
         * Constructor.
         *
         * @group magic
         * @group mutator
         * @group unary
         *
         * @return void
         */
        public function __construct(private string $input) {}

        public function render(): string
        {
            return $this->input;
        }
    };
}
