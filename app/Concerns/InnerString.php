<?php

namespace App\Concerns;

use App\Contracts\Mappable;
use App\Contracts\Optional;
use App\Enums\Environments;
use App\Facades\Environment;
use App\Options\NullOption;
use Illuminate\Support\Str;
use Illuminate\Support\Stringable as BaseStringable;

/**
 * This is a trait for classes that have an inner string.
 *
 * Resist the temptation to add string-manipulation methods to this trait.
 *
 * Can't define self::get here because of conflicts with methods in other traits and classes.
 */
trait InnerString
{
    use Deferable;

    private readonly string $_inner_string;

    /**
     * @group nonary
     * @group accessor
     */
    private function _innerString(): string
    {
        return $this->_inner_string ??= $this->_resolveString();
    }

    /**
     * Resolves a value to a string, using the inner string if no value is given or the value is null.
     *
     * @group unary
     * @group resolving
     *
     * @uses \App\Concerns\ResolvesString::resolveString
     * @uses \App\Concerns\ResolvesString::validateString
     * @uses \App\Strings\unwrap
     * @uses \App\Enums\Environments::isCurrent
     * @uses \App\Enums\Environments::rescue
     * @uses \assert (native) If enabled, and the given assertion is false, throws an exception.
     * @uses \get_class (native) Returns the name of the class of an object.
     * @uses \is_string (native) Returns whether a variable is a string.
     * @uses \method_exists (native) Returns whether the class method exists.
     *
     * @throws \AssertionError
     */
    private function _resolveString(mixed $value = null): string
    {
        try {
            $string = match (true) {
                \method_exists($this, 'resolveString') => $this->resolveString($value),
                default => \App\Strings\unwrap($value),
            };

            \assert(\is_string($string));

            // if (Environments::Development->isCurrent() && method_exists($this, 'validateString')) {
            //     $this->validateString($string);
            // }
            return $string;
        } catch (\Throwable $exception) {
            return Environment::rescue(
                throwable: $exception,
                context: [
                    'this' => $this,
                    'exception_class' => \get_class($exception),
                    'exception_message' => $exception->getMessage(),
                ],
            );
        }
    }

    /**
     * @group magic-call-signature
     * @group variadic
     *
     * @param string $name Method being called.
     * @param mixed[] $arguments Enumerated array containing the parameters passed to the method.
     *
     * @uses \method_exists (native) Returns whether the class method exists.
     * @uses \App\Concerns\InnerString::_innerString
     */
    protected function callOnInnerString(string $name, array $arguments)
    {
        if (\method_exists(BaseStringable::class, $name)) {
            return (new BaseStringable($this->_innerString()))->$name(...$arguments);
        }

        if (\method_exists(Str::class, $name)) {
            return Str::$name($this->_innerString(), ...$arguments);
        }
    }

    /**
     * Retrieves the string or a transformation on the string.
     * DEPRECATE?
     *
     * @group variadic
     * @group accessor
     * @group caching
     * @group resolving
     * @group magic
     *
     * @uses \App\Concerns\InnerString::_innerString
     * @uses \App\Callables\transform
     */
    final protected function innerString(...$transforms)
    {
        return \App\Callables\transform(arity: 1, seed: $this->_innerString(), transforms: $transforms);
    }

    /**
     * Returns the "normal" value, which is one of the following:
     * - A scalar.
     * - \DateTimeInterface
     * - null
     * - An array.
     * - A generic object.
     *
     * @implements \App\Contracts\Normalizable::normalized
     * @group nonary
     *
     * @uses \App\Concerns\InnerString::innerString
     *
     * @return mixed
     */
    final protected function innerStringAsNormal(): string|int|float|bool|null|\DateTimeInterface
    {
        return $this->_innerString();
    }

    /**
     * Cast with:
     * InnerString::innerStringAsString as public __toString;
     *
     * @group magic-tostring-signature
     * @group nonary
     *
     * @uses \App\Concerns\InnerString::_innerString
     */
    final protected function innerStringAsString(): string
    {
        return $this->_innerString();
    }

    /**
     * Returns whether the inner string is empty.
     *
     * @group nonary
     * @group accessor
     *
     * @uses \Illuminate\Support\Stringable::isEmpty
     * @uses \App\Concerns\InnerString::_innerString
     */
    final protected function innerStringIsEmpty(): bool
    {
        return $this->_innerString() === '';
    }

    /**
     * Returns whether the inner string is not empty.
     *
     * @group nonary
     * @group accessor
     *
     * @uses \Illuminate\Support\Stringable::isNotEmpty
     * @uses \App\Concerns\InnerString::_innerString
     */
    protected function innerStringIsFilled(): bool
    {
        return $this->_innerString() !== '';
    }

    /**
     * Returns whether the given offset exists.
     *
     * @group unary
     *
     * @uses \is_int (native) Returns whether a variable is an integer.
     * @uses \is_string (native) Returns whether a variable is a string.
     * @uses \strlen (native) Returns the length of the given string.
     * @uses \App\Concerns\InnerString::_innerString
     *
     * @throws \UnhandledMatchError
     */
    protected function innerStringOffsetExists(mixed $offset): bool
    {
        return match (true) {
            \is_int($offset) => $offset >= 0 && $offset < \strlen($this->_innerString()),
            \is_string($offset) => true, // don't allow \Stringables here
        };
    }

    /**
     * Returns the value at the given offset.
     *
     * @group unary
     *
     * @uses \App\Concerns\InnerString::_innerString
     * @uses \is_int (native) Returns whether a variable is an integer.
     * @uses \is_string (native) Returns whether a variable is a string.
     *
     * @throws \UnhandledMatchError
     */
    protected function innerStringOffsetGet(mixed $offset): string
    {
        return match (true) {
            \is_int($offset) => $offset[$this->_innerString()],
            \is_string($offset) => $this->_innerString(), // don't allow \Stringables here
        };
    }

    /**
     * @implements \App\Concerns\Deferable::internalArguments
     * @group nonary
     *
     * @uses \App\Concerns\InnerString::_innerString
     */
    protected function internalArguments(): \Traversable
    {
        yield $this->_innerString();
    }

    /**
     * @group unary
     * @group mutator
     *
     * @uses \App\Concerns\ResolvesString::_resolveString
     */
    protected function setInnerString(mixed $value): void
    {
        $this->_inner_string = $this->_resolveString($value);
    }

    /**
     * @group unary
     * @group mutator
     *
     * @uses \App\Concerns\ResolvesString::_resolveString
     */
    protected function setInnerStringDirectly(string $value): void
    {
        $this->_inner_string = $value;
    }

    /**
     * @group unary
     * @group functional
     *
     * @uses \App\Callables\normalizeTransform
     * @uses \App\Callables\run
     * @uses \App\Dumping\dumpLabeled
     * @uses \App\Concerns\InnerString::_innerString
     * @uses \array_reduce (native) Iteratively reduces the array to a single value using a callback function.
     * @uses \array_shift (native) Removes the first element from an array and returns it.
     * @uses \count (native) Returns the number of items in an array or Countable object.
     * @uses \iterator_to_array (native) Copies the output of an iterator into an array.
     *
     * @throws \Throwable Any exception thrown out of \App\Callables\run.
     */
    protected function withInnerString(mixed $callable, ...$additional_arguments)
    {
        try {
            $transforms = \iterator_to_array(\App\Callables\normalizeTransform($callable));

            if (\count($transforms) === 0) {
                return;
            }

            $seed = (\array_shift($transforms))($this->_innerString, ...$additional_arguments);

            if (\count($transforms) === 0) {
                return $seed;
            }

            return \array_reduce(
                $transforms,
                fn ($carry, callable $transform) => $transform($carry),
                $seed,
            );
        } catch (\Throwable $exception) {
            $context = [
                'this' => $this,
                'callable' => $callable,
                'additional_arguments' => $additional_arguments,
            ];

            \App\Dumping\dumpLabeled($context);

            throw $exception;
        }
    }

    /**
     * @group unary
     * @group functional
     *
     * @uses \App\Callables\filter
     * @uses \App\Concerns\InnerString::_innerString
     */
    public function filterInnerString(mixed $callable): Optional
    {
        return \App\Callables\filter($callable, $this, $this->_innerString());
    }

    /**
     * @group unary
     * @group functional
     *
     * @uses \App\Callables\filterNot
     * @uses \App\Concerns\InnerString::_innerString
     */
    public function filterNotInnerString($callable): Optional
    {
        return \App\Callables\filterNot($callable, $this, $this->_innerString());
    }

    /**
     * @group unary
     * @group functional
     *
     * @uses \App\Callables\transform
     * @uses \App\Concerns\InnerString::_innerString
     */
    public function flatMapInnerString($callable): Mappable
    {
        return \App\Callables\transform(
            arity: 1,
            transforms: $callable,
            seed: $this->_innerString(),
        );
    }

    /**
     * @group binary
     *
     * @uses \App\Options\foldLeft
     * @uses \App\Concerns\InnerString::_innerString
     */
    public function foldLeftInnerString($initial_value, $callable)
    {
        return \App\Options\foldLeft($callable, $initial_value, $this->_innerString());
    }

    /**
     * @group binary
     *
     * @uses \App\Options\foldRight
     * @uses \App\Concerns\InnerString::_innerString
     */
    public function foldRightInnerString($initial_value, $callable)
    {
        return \App\Options\foldRight($callable, $initial_value, $this->_innerString());
    }

    /**
     * @group unary
     * @group functional
     *
     * @uses \App\Callables\transform
     * @uses \App\Options\wrap
     * @uses \App\Concerns\InnerString::_innerString
     */
    public function mapInnerString($callable): Optional
    {
        return \App\Options\wrap(
            \App\Callables\transform(
                arity: 1,
                transforms: $callable,
                seed: $this->_innerString(),
            ),
        );
    }

    /**
     * @group unary
     * @group functional
     *
     * @uses \App\Options\wrap
     * @uses \App\Options\NullOption::__construct
     * @uses \App\Concerns\InnerString::_innerString
     */
    public function rejectInnerString(mixed $value): Optional
    {
        return $this->_innerString() === (string) $value ? new NullOption() : \App\Options\wrap($this);
    }

    /**
     * @group unary
     * @group functional
     *
     * @uses \App\Options\wrap
     * @uses \App\Options\NullOption::__construct
     * @uses \App\Concerns\InnerString::_innerString
     */
    public function selectInnerString(mixed $value): Optional
    {
        return $this->_innerString() === (string) $value ? \App\Options\wrap($this) : new NullOption();
    }
}
