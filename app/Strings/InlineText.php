<?php

namespace App\Strings;

use App\Concerns\AlwaysDefined;
use App\Concerns\AlwaysScalar;
use App\Concerns\InnerString;
use App\Concerns\ResolvesString;
use App\Concerns\SerializesValueProperty;
use App\Contracts\Dumps;
use App\Contracts\Emptyable;
use App\Contracts\Filterable;
use App\Contracts\Foldable;
use App\Contracts\HasValue;
use App\Contracts\InlineStringable;
use App\Contracts\Mappable;
use App\Contracts\Normalizable;
use App\Contracts\Optional;
use App\Contracts\TransformativeInvoker;
use App\Enums\MeasurementUnits;
use App\Measurement;
use App\Methods\Make\MakeFromConstructor;
use App\Methods\Sprintf\SprintfOnMake;
use App\States\Immutable;
use Illuminate\Contracts\Database\Eloquent\Castable;
use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use Illuminate\Contracts\Support\Htmlable;
use Spatie\Html\Elements\Span;

/**
 * Encapsulates an inline string of text.
 */
class InlineText implements
    \Stringable,
    Castable,
    Dumps,
    Emptyable,
    Filterable,
    Foldable,
    HasValue,
    Htmlable,
    InlineStringable,
    Mappable,
    Normalizable,
    Optional,
    TransformativeInvoker
{
    use AlwaysScalar;    // uses AlwaysDefined, AlwaysSingleValue, CountIsAlwaysOne
    use Immutable;
    use InnerString {
        innerStringIsEmpty as public isEmpty;
        innerStringIsFilled as public isNotEmpty;
        innerStringAsString as public __toString;
        innerStringAsNormal as public normalized;
        innerString as public __invoke; // implements \App\Contracts\TransformativeInvoker::__invoke
        mapInnerString as public map;
        flatMapInnerString as public flatMap;
        filterInnerString as public filter;
        filterNotInnerString as public filterNot;
        selectInnerString as public select;
        rejectInnerString as public reject;
        foldLeftInnerString as public foldLeft;
        foldRightInnerString as public foldRight;
    }
    use MakeFromConstructor;
    use ResolvesString;
    use SerializesValueProperty;
    use SprintfOnMake;

    /**
     * Constructor.
     *
     * Don't resolve to string here!
     *
     * @group binary
     * @group magic
     * @group mutator
     *
     * @return void
     */
    public function __construct(
        string $clean_value,
    ) {
        // DON'T \assert($clean_value !== '') here.
        $this->setInnerStringDirectly($clean_value);
    }

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
     * @uses self::callOnInnerString
     */
    public function __call(string $name, array $arguments)
    {
        return $this->callOnInnerString($name, $arguments) ?? throw new \BadMethodCallException(\sprintf('Call to undefined method %s::%s', static::class, $name));
    }

    /**
     * Dynamically accesses a property on the underlying object or value. Reads data from inaccessible (protected or private) or non-existing properties.
     *
     * Don't parse properties, just return the inner string.
     *
     * @group accessor
     * @group accessor-by-key
     * @group magic
     * @group selective
     * @group unary
     *
     * @param string $key Name of the property being accessed.
     */
    public function __get(string $key)
    {
        return $this->innerString();
    }

    /**
     * Resolves a value to a string, using the inner string if no value is given or the value is null.
     *
     * Don't resolve HTML here. This is the wrong class for resolving HTML.
     *
     * @implements \App\Concerns\ResolvesString::resolveString
     * @group resolving
     * @group unary
     *
     * @uses \App\Strings\unwrap
     * @uses \is_null (native) Returns whether a variable is null.
     * @uses \is_numeric (native)
     * @uses \is_string (native) Returns whether a variable is a string.
     * @uses \preg_replace
     * @uses \Stringable::__toString
     *
     * @throws \App\Strings\TypeIndicator
     */
    protected function resolveString(mixed $value = null): string
    {
        $resulting_string = \App\Strings\unwrap($value);
        $step1 = \preg_replace('~[\x00-\x1F\x80-\xFF]~u', '', $resulting_string); // remove unprintables
        $step2 = \preg_replace('~^[\s\x{FEFF}]+|[\s\x{FEFF}]+$~u', '', $step1); // trim
        return \preg_replace('~(\s|\x{3164})+~u', ' ', $step2); // squish spaces
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
        return new \App\Casts\InlineText();
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
        \App\Dumping\dump($this->innerString()); // 🔒
        return $this;
    }

    /**
     * Returns the value if available, or throws an exception otherwise.
     *
     * @implements \App\Contracts\HasValue::get
     * @group nonary
     *
     * @uses \App\Concerns\InnerString::innerString
     *
     * @throws \RuntimeException If value is not available.
     */
    public function get()
    {
        return $this->innerString();
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
     * @uses \App\Concerns\InnerString::innerString
     */
    public function getIterator(): \Traversable
    {
        yield $this->innerString();
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
     * @uses \App\Strings\InlineText::innerString
     * @uses \filter_var (native) Filters a variable with a specified filter.
     * @uses \mb_str_split (native) Split a string into an array of characters.
     * @uses \preg_split (native) Split string by a regular expression.
     */
    public function split($pattern, $limit = -1, $flags = 0): \Traversable
    {
        if (\filter_var($pattern, \FILTER_VALIDATE_INT) !== false) {
            yield from \mb_str_split($this->innerString(), $pattern);
            return;
        }

        yield from \preg_split($pattern, $this->innerString(), $limit, $flags);
    }

    /**
     * Returns content as a string of HTML.
     *
     * @implements \Illuminate\Contracts\Support\Htmlable::toHtml (which DOES NOT declare a return type)
     * @group nonary
     *
     * @uses \App\Concerns\InnerString::innerString
     *
     * @return string
     */
    public function toHtml()
    {
        return $this->innerString();
    }

    /**
     * @group unary
     *
     * @uses \App\Concerns\InnerString::innerString
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

        return Span::create()->child($this->innerString())->addClass(['d-inline-block', 'text-truncate'])->style(['max-width' => $measurement]);
    }

    /**
     * @group unary
     *
     * @uses \App\Concerns\InnerString::innerStringAsString
     * @uses \is_int (native) Returns whether the given variable is an integer.
     * @uses \is_null (native) Returns whether a variable is null.
     * @uses \is_string (native) Returns whether a variable is a string.
     */
    public function wrapAsArray(mixed $key = null): array
    {
        return match (true) {
            $this->isEmpty() => [],
            \is_null($key) => [$this->toString()],
            \is_int($key) && $key >= 0 => [$key => $this->toString()],
            \is_string($key) && $key !== '' => [$key => $this->toString()]
        };
    }
}
