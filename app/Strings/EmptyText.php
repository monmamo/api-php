<?php

namespace App\Strings;

use App\Casts\InlineText;
use App\Concerns\AlwaysDefined;
use App\Concerns\AlwaysScalar;
use App\Concerns\Deferable;
use App\Concerns\Optional\SelectThroughFilter;
use App\Concerns\ResolvesString;
use App\Concerns\SerializesValueProperty;
use App\Contracts\Dumps;
use App\Contracts\Emptyable;
use App\Contracts\Filterable;
use App\Contracts\Foldable;
use App\Contracts\InlineStringable;
use App\Contracts\Mappable;
use App\Contracts\Normalizable;
use App\Contracts\Optional;
use App\Contracts\TransformativeInvoker;
use App\Enums\MeasurementUnits;
use App\Measurement;
use App\Methods\MagicCall\MagicCallNeverValid;
use App\Methods\MagicToString\ToStringReturnsEmpty;
use App\Methods\Make\MakeFromConstructor;
use App\Methods\Sprintf\SprintfOnMake;
use App\Options\NullOption;
use App\States\Immutable;
use Illuminate\Contracts\Database\Eloquent\Castable;
use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use Illuminate\Contracts\Support\Htmlable;
use PHPUnit\Framework\Constraint\Constraint;
use Spatie\Html\Elements\Span;

/**
 * DO NOT USE these traits:
 * - \App\Concerns\AlwaysEmpty
 */
final class EmptyText implements \App\Contracts\Deferable, Castable, Dumps, Emptyable, Filterable, Foldable, Htmlable, InlineStringable, Mappable, Normalizable, Optional, TransformativeInvoker
{
    use AlwaysScalar;
    use Deferable;    // uses AlwaysDefined, AlwaysSingleValue
    use Immutable;
    use MagicCallNeverValid;
    use MakeFromConstructor;
    use ResolvesString;
    use SelectThroughFilter;
    use SerializesValueProperty;
    use SprintfOnMake;
    use ToStringReturnsEmpty;

    /**
     * Method invoked when attempting invoke an inaccessible or undefined method of this class in an object context.
     *
     * @group magic
     * @group magic-call-signature
     * @group variadic
     *
     * @param string $name Method being called.
     * @param mixed[] $arguments Enumerated array containing the parameters passed to the method.
     *
     * @uses \BadMethodCallException::__construct
     * @uses \sprintf (native) Returns a formatted string.
     */
    public function __call(string $name, array $arguments): void
    {
        throw new \BadMethodCallException(\sprintf('Call to undefined method %s::%s', self::class, $name));
    }

    /**
     * Invoker.
     *
     * @implements \App\Contracts\TransformativeInvoker::__invoke
     * @group magic
     * @group variadic
     *
     * @uses \App\Callables\normalizeTransform
     */
    public function __invoke(...$transforms)
    {
        $result = '';

        foreach (\App\Callables\normalizeTransform($transforms) as $transform) {
            $result = $transform($result);
        }
        return $result;
    }

    /**
     * Returns a representation of this object as a string.
     *
     * @group magic
     * @group magic-tostring-signature
     * @group nonary
     */
    public function __toString()
    {
        return '';
    }

    /**
     * @implements \App\Concerns\Deferable::internalArguments
     * @group nonary
     *
     * @uses \EmptyIterator::__construct
     */
    protected function internalArguments(): \Traversable
    {
        return new \EmptyIterator();
    }

    /**
     * Resolves a value to a string, using the inner string if no value is given or the value is null.
     *
     * @implements \App\Concerns\ResolvesString::resolveString
     * @group resolving
     * @group unary
     *
     * @param null|mixed $value
     */
    protected function resolveString($value = null): string
    {
        return '';
    }

    /**
     * Returns the name of the caster class to use when casting from/to this cast target.
     *
     * When using Castable classes, you may still provide arguments in the $casts definition. The arguments will be passed to the castUsing method.
     *
     * @see https://laravel.com/docs/10.x/eloquent-mutators#castables
     *
     * @implements \Illuminate\Contracts\Database\Eloquent\Castable::castUsing
     * @group factory
     * @group variadic
     *
     * @param array<string, mixed> $arguments
     */
    public static function castUsing(array $arguments): CastsAttributes
    {
        return new InlineText();
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
        \App\Dumping\dump(''); // 🔒
        return $this;
    }

    /**
     * If the option is empty, it is returned immediately without applying the callable.
     *
     * If the option is non-empty, the callable is applied, and if it returns true, the option itself is returned; otherwise, None is returned.
     *
     * @implements \App\Contracts\Filterable::filter
     * @group unary
     *
     * @uses \App\Options\NullOption::__construct
     * @uses \PHPUnit\Framework\Constraint\Constraint::evaluate
     */
    public function filter(Constraint $predicate): Optional
    {
        return $predicate->evaluate('', '', true) ? $this : new NullOption();
    }

    /**
     * If the option is empty, it is returned immediately without applying the callable.
     *
     * If the option is non-empty, the callable is applied, and if it returns false, the option itself is returned; otherwise, None is returned.
     *
     * @implements \App\Contracts\Filterable::filterNot
     * @group unary
     *
     * @uses \App\Options\NullOption::__construct
     * @uses \PHPUnit\Framework\Constraint\Constraint::evaluate
     */
    public function filterNot(Constraint $predicate): Optional
    {
        return $predicate->evaluate('', '', true) ? new NullOption() : $this;
    }

    /**
     * Applies the callable to the value of the option if it is non-empty, and returns the return value of the callable directly.
     *
     * @implements \App\Contracts\Mappable::flatMap
     * @group unary
     *
     * @template S
     *
     * @param callable(T):Option<S> $callable must return an Option
     *
     * @uses \App\Callables\transform
     */
    public function flatMap($callable): Optional
    {
        return \App\Callables\transform(arity: 1, transforms: $callable, seed: '');
    }

    /**
     * Binary operator for the initial value and the option's value.
     *
     * @implements \App\Contracts\Foldable::foldLeft
     * @group binary
     *
     * @template S
     *
     * @uses \App\Callables\run
     *
     * @throws \Throwable Any exception thrown out of \App\Callables\run.
     */
    public function foldLeft($initialValue, $callable)
    {
        return \App\Callables\run(
            callable: $callable,
            arguments_to_callable: [$initialValue],
            context_to_dump: \compact('this'),
        );
    }

    /**
     * Binary operator for the initial value and the option's value.
     *
     * @implements \App\Contracts\Foldable::foldRight
     * @group binary
     *
     * @template S
     *
     * @uses \App\Callables\run
     *
     * @throws \Throwable Any exception thrown out of \App\Callables\run.
     */
    public function foldRight($initialValue, $callable)
    {
        return \App\Callables\run(
            callable: $callable,
            arguments_to_callable: [$initialValue],
            context_to_dump: \compact('this'),
        );
    }

    /**
     * Returns an iterator (either as an explicit implementation of \Traversable or an implicit implementation of \Generator with yield statements) that iterates through the component items of this object.
     *
     * @implements \IteratorAggregate::getIterator
     * @group accessor
     * @group multivalue
     * @group nonary
     * @group ordered
     *
     * @uses \EmptyIterator::__construct
     */
    public function getIterator(): \Traversable
    {
        return new \EmptyIterator();
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
     * @group nonary
     * @group reductive
     *
     * @return boolean
     */
    public function isEmpty()
    {
        return true;
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
     * @group nonary
     * @group reductive
     *
     * @return boolean
     */
    public function isNotEmpty()
    {
        return false;
    }

    /**
     * Applies the callable to the value of the option if it is non-empty, and returns the return value of the callable wrapped in Some().
     *
     * @implements \App\Contracts\Mappable::map
     * @group unary
     *
     * @uses \App\Callables\transform
     * @uses \App\Options\wrap
     */
    public function map($callable): Optional
    {
        return \App\Options\wrap($this->flatMap($callable));
    }

    /**
     * Returns the "normal" value of the object, as defined by \App\Casts\NormalScalar.
     *
     * @implements \App\Contracts\Normalizable::normalized
     * @group nonary
     */
    public function normalized(): string|int|float|bool|null|\DateTimeInterface
    {
        return '';
    }

    /**
     * Splits a string using a regular expression or by length.
     *
     * Same argument signature as \Illuminate\Support\Stringable::split.
     *
     * @group trinary
     *
     * @param int|string $pattern
     * @param int $limit
     * @param int $flags
     *
     * @uses \EmptyIterator::__construct
     */
    public function split($pattern, $limit = -1, $flags = 0): \Traversable
    {
        return new \EmptyIterator();
    }

    /**
     * Returns content as a string of HTML.
     *
     * @implements \Illuminate\Contracts\Support\Htmlable::toHtml (which DOES NOT declare a return type)
     * @group nonary
     *
     * @return string
     */
    public function toHtml()
    {
        return '';
    }

    /**
     * @group unary
     *
     * @uses \App\Enums\MeasurementUnits::quantity
     * @uses \is_int (native) Returns whether the given variable is an integer.
     * @uses \is_string (native) Returns whether a variable is a string.
     * @uses \Spatie\Html\BaseElement::addClass
     * @uses \Spatie\Html\BaseElement::create
     * @uses \Spatie\Html\BaseElement::style
     *
     * @throws \UnhandledMatchError
     */
    public function truncate(mixed $measurement): Htmlable
    {
        $measurement = match (true) {
            \is_int($measurement) => MeasurementUnits::Pixels->quantity($measurement),
            $measurement instanceof Measurement => $measurement,
            \is_string($measurement) => $measurement,
        };

        return Span::create()->addClass(['d-inline-block', 'text-truncate'])->style(['max-width' => $measurement]);
    }
}
