<?php

namespace App\Callables;

use App\Contracts\Deferable;
use App\Contracts\Dumps;
use App\Contracts\Emptyable;
use App\Contracts\Filterable;
use App\Contracts\Foldable;
use App\Contracts\Mappable;
use App\Contracts\Optional;
use App\Exceptions\MethodNotValidException;
use App\Exceptions\PipelineBreak;
use App\GeneralAttributes\Gloss;
use App\Options\MultivalueOption;
use App\Options\NullOption;
use App\Options\ThrowingOption;
use Illuminate\Support\Collection;
use Illuminate\Support\Traits\ForwardsCalls;
use PHPUnit\Framework\Constraint\Constraint;

/**
 * Don't drop out if $seed is null (could be starting with a nonary function).
 *
 * Call this "transform" instead of "reduce" so that "reduce" means reducing a collection.
 *
 * usage:
 * \App\Callables\BaseCallable::transform(arity:ARITY,seed:VALUE,transforms:TRANSFORMS  );
 *
 * @group sugar Consider implementing literally instead of using this method.
 * @group trinary
 * @group variadic
 *
 * @param null|mixed $offset
 *
 * @uses \App\Dumping\dumpLabeled
 * @uses \App\Options\unwrap
 */
function _transform(int $arity, mixed $normal_transforms, $seed, $offset = null)
{
    $result = \App\Options\unwrap($seed);

    foreach ($normal_transforms as $key => $callable) {
        try {
            $result = match ($arity) {
                0 => $callable(),
                1 => $callable($result),
                2 => $callable($result, $offset),
                3 => $callable($result, $offset, $seed),
            };
        } catch (\Throwable $exception) {
            \App\Dumping\dumpLabeled([
                'normal_transforms' => $normal_transforms,
                'callable' => $callable,
                'seed' => $seed,
                'offset' => $offset,
            ]);
            //TODO Add a check for an exception that merely breaks from the loop.
            throw $exception;
        }
    }

    return $result;
}

/**
 * @group variadic
 *
 * @param null|mixed $assertion_message
 */
function asserter(
    $predicate,
    $enabled = true,
    $assertion_message = null,
): \Closure {
    return
        /**
         * @uses \App\Dumping\dumpLabeled
         * @uses \App\Options\castBoolean
         * @uses \AssertionError::__construct
         */
        function (...$predicate_arguments) use ($predicate, $enabled, $assertion_message) {
            if (!\App\Options\castBoolean($enabled)->get()) {
                return;
            }

            if (!\App\Options\castBoolean($predicate, $predicate_arguments)->get()) {
                \App\Dumping\dumpLabeled([
                    'function' => $predicate,
                    'arguments' => $predicate_arguments,
                ]);
                throw new \AssertionError($assertion_message);
            }
            return $predicate_arguments[0] ?? null;
        };
}

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
 * @uses \App\Callables\Constructor::__construct
 * @uses \App\Callables\reduce
 * @uses \App\Callables\Spread::__construct
 * @uses \App\Callables\Where::__construct
 * @uses \App\Exceptions\MethodNotValidException::__construct
 * @uses \App\Strings\trim
 * @uses \is_null (native) Returns whether a variable is null.
 * @uses \str_ends_with (native) Returns whether the haystack string ends with the given needle.
 *
 * @throws \App\Exceptions\MethodNotValidException
 */
function callByName(object $target, string $method, array $parameters)
{
    // if (str_ends_with($method, 'Where')) {
    //     return $target->{App\Strings\trim('Where',source:$method)}(new Where(...$parameters));
    // }

    if (\str_ends_with($method, 'Into')) {
        return $target->{\App\Strings\trim(suffix: 'Into', source: $method)}(new Constructor($parameters[0]));
    }

    if (\str_ends_with($method, 'Spread')) {
        return $target->{\App\Strings\trim(suffix: 'Spread', source: $method)}(new Spread($parameters[0]));
    }

    if (\str_ends_with($method, 'Through')) {
        return $target->{\App\Strings\trim(suffix: 'Through', source: $method)}(
            fn ($seed) => \App\Callables\reduce($seed, $parameters)
        );
    }

    throw new MethodNotValidException(
        method: $method,
        source: $target,
    );
}

/**
 * If the option is empty, it is returned immediately without applying the callable.
 *
 * If the option is non-empty, the callable is applied, and if it returns true, the option itself is returned; otherwise, None is returned.
 *
 * @implements \App\Contracts\Filterable::filter
 *
 * @uses \App\Constraints\evaluate
 * @uses \App\Options\NullOption::__construct
 * @uses \App\Options\wrap
 */
function filter(
    mixed $predicate,
    mixed $that,
    mixed $inner_value,
    bool $invert = false,
): Optional {
    return (\App\Constraints\evaluate($predicate, $inner_value) xor $invert) ? \App\Options\wrap($that) : new NullOption();
}

/**
 * If the option is empty, it is returned immediately without applying the callable.
 *
 * If the option is non-empty, the callable is applied, and if it returns false, the option itself is returned; otherwise, None is returned.
 *
 * @implements \App\Contracts\Filterable::filterNot
 * @group trinary
 *
 * @uses \App\Constraints\evaluate
 * @uses \App\Options\NullOption::__construct
 * @uses \App\Options\wrap
 */
function filterNot(
    mixed $predicate,
    mixed $that,
    mixed $inner_value,
): Optional {
    return \App\Constraints\evaluate($predicate, $inner_value) ? new NullOption() : \App\Options\wrap($that);
}

/**
 * Conditionally transforms a value.
 *
 * ❗ Assumes the using class is immutable and fluent. The callback needs to return $this.
 *
 * @group binary
 * @group fluent
 *
 * @uses \is_null (native) Returns whether a variable is null.
 */
function ifNotNull(mixed $value, mixed $subject, \Closure $callback)
{
    return !\is_null($value) ? $callback($subject) : $subject;
}

/**
 * @group transformative
 * @group unary
 *
 * @uses \Closure::fromCallable
 * @uses \is_callable (native) Returns whether a variable can be called as a function.
 * @uses \is_string (native) Returns whether a variable is a string.
 */
function makeClosure(mixed $callable): \Closure
{
    return match (true) {
        $callable instanceof \Closure => $callable,
        \is_null($callable) => fn () => null,
        $callable instanceof Constraint
        /*
             * @group unary
             *
             * @uses \PHPUnit\Framework\Constraint\Constraint::evaluate
             */ => function ($value) use ($callable) {
            $flag = $callable->evaluate($value, '', true);

            if ($flag) {
                return $value;
            }
            throw new PipelineBreak();
        },
        \is_callable($callable) => \Closure::fromCallable($callable),
        default => \dd($callable)
    };
}

/**
 * @group multivalue
 * @group sequential
 * @group unary
 *
 * @uses \App\Callables\makeClosure
 * @uses \data_get
 * @uses \is_array (native) Returns whether a variable is an array.
 * @uses \is_callable (native) Returns whether a variable can be called as a function.
 * @uses \is_null (native) Returns whether a variable is null.
 */
function normalizeTransform(...$transforms): \Generator
{
    foreach ($transforms as $transform) {
        if (\is_null($transform)) {
            continue;
        }

        if (\is_array($transform) && !\is_callable($transform)) {
            foreach ($transform as $item) {
                foreach (\App\Callables\normalizeTransform($item) as $new_transform) {
                    yield $new_transform;
                }
            }
            continue;
        }

        if ($transform instanceof \Traversable) {
            foreach ($transform as $item) {
                foreach (\App\Callables\normalizeTransform($item) as $new_transform) {
                    yield $new_transform;
                }
            }
            continue;
        }

        yield \App\Callables\makeClosure($transform);
    }
}

/**
 * @group binary
 *
 * @uses \App\Callables\normalizeTransform
 */
function reduce($seed, mixed $transforms)
{
    $result = $seed;

    foreach (\App\Callables\normalizeTransform($transforms) as $transform) {
        $result = $transform($result);
    }

    return $result;
}

/**
 * One method to run them all.
 *
 * Change the throw to 'die' temporarily as needed.
 * 💢 Can't declare this as mixed because it could return null.
 *
 * Do not replace this logic with \App\Callables\reduce.
 *
 * @group defered-call
 * @group sugar Consider implementing literally instead of using this method.
 * @group variadic
 *
 * @param mixed $callable Function or method to call or something that represents a callable.
 * @param array $arguments_to_callable Arguments to pass to the callable.
 *
 * @uses \App\Contracts\HasValue::get
 * @uses \App\Dumping\dumpLabeled
 * @uses \App\Options\castBoolean
 * @uses \App\Options\wrap
 * @uses \array_reduce (native) Iteratively reduces the array to a single value using a callback function.
 * @uses \array_shift (native) Removes the first element from an array and returns it.
 * @uses \assert (native) If enabled, and the given assertion is false, throws an exception.
 * @uses \count (native) Returns the number of items in an array or Countable object.
 * @uses \is_null (native) Returns whether a variable is null.
 * @uses \iterator_to_array (native) Copies the output of an iterator into an array.
 * @uses \sprintf (native) Returns a formatted string.
 *
 * @throws \AssertionError
 * @throws \Throwable Any exception thrown by any called method.
 */
function run(
    mixed $callable = null,
    array $arguments_to_callable = [],
    mixed $enabled = true,
    mixed $context_to_dump = null,
    bool $return_as_option = false,
) {
    try {
        $transforms = \iterator_to_array(\App\Callables\normalizeTransform($callable));

        if (\count($transforms) === 0) {
            return $return_as_option ? new NullOption() : null;
        }

        if (!\App\Options\castBoolean($enabled)->get()) {
            return $return_as_option ? new NullOption() : null;
        }

        $seed = (\array_shift($transforms))(...$arguments_to_callable);

        if (\count($transforms) === 0) {
            return $return_as_option ? \App\Options\wrap($seed) : $seed;
        }

        $result = \array_reduce(
            $transforms,
            fn ($carry, callable $transform) => $transform($carry),
            $seed,
        );

        return $return_as_option ? \App\Options\wrap($result) : $result;
    } catch (\Throwable $exception) {
        $context = [
            'callable' => $callable,
            'arguments_to_callable' => $arguments_to_callable,
        ];

        if (!\is_null($context_to_dump)) {
            $context['context'] = $context_to_dump instanceof \Closure ? $context_to_dump() : $context_to_dump;
        }

        \App\Dumping\dumpLabeled($context);

        return $return_as_option ? new ThrowingOption($exception, $context) : throw $exception;
    }
}

/**
 * Runs the given callable if a condition is met.
 *
 * @group variadic
 *
 * @uses \App\Callables\run
 * @uses \App\Contracts\HasValue::get
 * @uses \App\Options\castBoolean
 * @uses \array_shift (native) Removes the first element from an array and returns it.
 *
 * @throws \Throwable Any exception thrown out of \App\Callables\run.
 */
function runIf(mixed $inner_method, mixed $arguments): void
{
    $predicate = \array_shift($arguments);

    \App\Options\castBoolean($predicate)->get() && \App\Callables\run(
        callable: $inner_method,
        arguments_to_callable: $arguments,
    );
}

/**
 * Runs the given callable if the first argument is not null.
 *
 * @group variadic
 *
 * @uses \App\Callables\run
 * @uses \array_shift (native) Removes the first element from an array and returns it.
 * @uses \is_null (native) Returns whether a variable is null.
 *
 * @throws \Throwable Any exception thrown out of \App\Callables\run.
 */
function runIfNotNull(mixed $inner_method, mixed $arguments): void
{
    $predicate = \array_shift($arguments);

    if (!\is_null($predicate)) {
        \App\Callables\run(
            callable: $inner_method,
            arguments_to_callable: $arguments,
        );
    }
}

/**
 * Runs the given callable unless a condition is met.
 *
 * @group variadic
 *
 * @uses \App\Callables\run
 * @uses \App\Contracts\HasValue::get
 * @uses \App\Options\castBoolean
 * @uses \array_shift (native) Removes the first element from an array and returns it.
 *
 * @throws \Throwable Any exception thrown out of \App\Callables\run.
 */
function runUnless(mixed $inner_method, mixed $arguments): void
{
    $predicate = \array_shift($arguments);

    \App\Options\castBoolean($predicate)->get()
        && \App\Callables\run(
            callable: $inner_method,
            arguments_to_callable: $arguments,
        );
}

/**
 * @group variadic
 *
 * @deprecated Implement literally.
 *
 * @uses \App\Callables\run
 *
 * @throws \Throwable Any exception thrown out of \App\Callables\run.
 */
function runVariadic(mixed $callable, ...$arguments)
{
    return \App\Callables\run($callable, $arguments);
}

/**
 * @deprecated Implement literally.
 *
 * @group variadic
 */
function runVariadicReturnsNothing(mixed $callable, ...$arguments): void {}

/**
 * Don't drop out if $seed is null (could be starting with a nonary function).
 *
 * Call this "transform" instead of "reduce" so that "reduce" means reducing a collection.
 *
 * usage:
 * \App\Callables\BaseCallable::transform(arity:ARITY,seed:VALUE,transforms:TRANSFORMS  );
 *
 * @group trinary
 * @group variadic
 *
 * @param null|mixed $offset
 *
 * @uses \App\Callables\_transform
 * @uses \App\Callables\normalizeTransform
 */
function transform(int $arity, mixed $transforms, $seed, $offset = null)
{
    return \App\Callables\_transform($arity, \App\Callables\normalizeTransform($transforms), $seed, $offset);
}

/**
 * Don't drop out if $seed is null (could be starting with a nonary function).
 *
 * Call this "transform" instead of "reduce" so that "reduce" means reducing a collection.
 *
 * usage:
 * \App\Callables\BaseCallable::transform(arity:ARITY,seed:VALUE,transforms:TRANSFORMS  );
 *
 * @group sugar Consider implementing literally instead of using this method.
 * @group trinary
 * @group variadic
 *
 * @uses \App\Callables\_transform
 * @uses \App\Callables\normalizeTransform
 */
function transformBatch(mixed $transforms, mixed $items)
{
    $normal_transforms = \App\Callables\normalizeTransform($transforms);

    foreach ($items as $offset => $seed) {
        yield $offset => \App\Callables\_transform(3, $normal_transforms, $seed, $offset);
    }
}

/**
 * Resolves the method on the given object.
 *
 * Analog of \tap for accessing object properties.
 *
 * Based on \Illuminate\Support\Traits\ForwardsCalls::forwardCallTo.
 *
 * @group unary
 *
 * @param mixed $source Object on which to resolve the method.
 *
 * @uses \App\Dumping\dumpLabeled
 * @uses \App\Options\wrap
 * @uses \get_class (native) Returns the name of the class of an object.
 * @uses \Illuminate\Database\Eloquent\Model::getAttribute
 * @uses \Illuminate\Support\Traits\Macroable::hasMacro
 * @uses \is_array (native) Finds whether a variable is an array.
 * @uses \is_object (native) Finds whether a variable is an object.
 * @uses \LogicException::__construct
 * @uses \method_exists (native) Returns whether the class method exists.
 * @uses \sprintf (native) Returns a formatted string.
 *
 * @throws \BadMethodCallException
 * @throws \Throwable Any exception thrown from the called method.
 */
function runObjectMethod(mixed $source, string $method, array $parameters = [], bool $return_null_if_not_found = false)
{
    $candidate_objects = match (true) {
        \is_object($source) => [$source],
        \is_array($source) => $source,
        default => [\App\Options\wrap($source)],
    };

    foreach ($candidate_objects as $object) {
        if (\method_exists($object, $method)) {
            return $object->{$method}(...$parameters);
        }

        if (\method_exists($object, 'hasMacro') && $object->hasMacro($method)) {
            return $object->{$method}(...$parameters);
        }
    }

    \App\Dumping\dumpLabeled(\compact('source', 'method', 'parameters')); // 🔒

    throw new \BadMethodCallException(\sprintf(
        'call to undefined method %s::%s',
        \get_class($object),
        $method,
    ));
}

/**
 * usage:
 * \App\Callables\BaseCallable::withAll(source:VALUE,callable:$callable);
 *
 * Should never throw an exception for a null value. If the value is null or undefined, simply do not call the callable.
 *
 * @group trinary
 *
 * @uses \App\Callables\transform
 * @uses \is_null (native) Returns whether a variable is null.
 */
function withAll(mixed $source, mixed $callable, array $additional_arguments = []): void
{
    if (\is_null($callable)) {
        return;
    }

    $transforms = \App\Callables\normalizeTransform($callable);

    if ($source instanceof \Traversable) {
        foreach ($source as $offset => $item) {
            \App\Callables\transform(arity: 3, transforms: $transforms, seed: $item, offset: $offset);
        }
        return;
    }

    \App\Callables\transform(1, $callable, $source);
}

/**
 * @group unary
 */
function withEach(mixed $collection): object
{
    return new #[Gloss('For-each callable')] class($collection) implements Mappable
    {
        use ForwardsCalls;

        private Collection $_collection;

        /**
         * Constructor.
         *
         * @group magic
         * @group mutator
         * @group unary
         *
         * @uses \Illuminate\Support\Collection::__construct
         */
        public function __construct(mixed $collection)
        {
            $this->_collection = new Collection($collection);
        }

        /**
         * @group magic
         * @group magic-call-signature
         * @group variadic
         *
         * @param mixed[] $arguments Enumerated array containing the parameters passed to the method.
         *
         * @return \Closure
         * @throws \BadMethodCallException
         */
        public function __call($method, $arguments)
        {
            return
                /**
                 * @group nonary
                 *
                 * @uses \Illuminate\Support\Traits\ForwardsCalls::forwardCallTo
                 */
                function () use ($method, $arguments): \Traversable {
                    foreach ($this->_collection as $target) {
                        yield $this->forwardCallTo($target, $method, $arguments);
                        // dump(compact('target', 'method', 'arguments')); // dumps depending on environment and verbosity
                        // throw new \LogicException('missing method');
                    }
                };
        }

        /**
         * Applies the callable to the value of the option if it is non-empty, and returns the return value of the callable directly.
         *
         * @implements \App\Contracts\Mappable::flatMap
         * @group unary
         *
         * @uses \App\Callables\transform
         * @uses \App\Options\wrap
         * @uses \array_combine (native) Creates an array by using one array for keys and another for its values.
         * @uses \array_keys (native) Returns all keys of an array as a sequential array.
         * @uses \array_map (native) Applies the callback to the elements of the given arrays.
         */
        public function flatMap(mixed $callback): mixed
        {
            $array = $this->_collection->toArray();
            $keys = \array_keys($array);
            $callback = fn ($value) => \App\Options\wrap(\App\Callables\transform(
                arity: 1,
                transforms: $callback,
                seed: $value,
            ));

            try {
                $items = \array_map($callback, $array, $keys);
            } catch (\ArgumentCountError) {
                $items = \array_map($callback, $array);
            }

            return \array_combine($keys, $items);
        }

        /**
         * Applies the callable to the value of the option if it is non-empty, and returns the return value of the callable wrapped in an option.
         *
         * If the option is empty, then the callable is not applied.
         *
         * @implements \App\Contracts\Mappable::map
         * @group unary
         *
         * @param callable(TValue, TKey): TMapValue $callback
         *
         * @uses \array_combine (native) Creates an array by using one array for keys and another for its values.
         * @uses \array_keys (native) Returns all keys of an array as a sequential array.
         * @uses \array_map (native) Applies the callback to the elements of the given arrays.
         * @uses \Illuminate\Support\Arr::map
         *
         * @return static<TKey, TMapValue>
         */
        public function map(mixed $callback): Optional
        {
            $array = $this->_collection->toArray();
            $keys = \array_keys($array);

            try {
                $items = \array_map($callback, $array, $keys);
            } catch (\ArgumentCountError) {
                $items = \array_map($callback, $array);
            }

            return new class(\array_combine($keys, $items)) extends \ArrayIterator implements Deferable, Dumps, Emptyable, Filterable, Foldable, Mappable, Optional
            {
                use MultivalueOption;
            };
        }
    };
}

/**
 * @uses \App\Strings\trim
 * @uses \str_ends_with (native) Returns whether the haystack string ends with the given needle.
 */
function forwardSuffixedCall(object $target, string $suffix, string $method, mixed $arguments)
{
    if (\str_ends_with($method, $suffix)) {
        return $target->{\App\Strings\trim(suffix: $suffix, source: $method)}(...$arguments);
    }
}
