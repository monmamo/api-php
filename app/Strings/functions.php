<?php

namespace App\Strings;

use App\Contracts\HasTitleMethod;
use App\Contracts\HasTitleProperty;
use App\Contracts\HasValue;
use App\Contracts\Lazy;
use App\Contracts\Normalizable;
use App\Contracts\Optional;
use App\Exceptions\NoStringRepresentationException;
use App\Facades\Environment;
use App\Facades\Handler;
use App\GeneralAttributes\Gloss;
use App\Options\NullOption;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Database\Eloquent\Builder as EloquentBuilder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Database\Query\Builder as GenericBuilder;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Blade;
use Illuminate\View\ComponentAttributeBag;
use Illuminate\View\ComponentSlot;
use SebastianBergmann\Exporter\Exporter;

/**
 * @group binary
 *
 * @uses \get_debug_type (native) Returns the type of a variable, with special handling for objects.
 * @uses \sprintf (native) Returns a formatted string.
 */
function expectationMessage(string $expectation, mixed $value): string
{
    return \sprintf('expected %s, received %s', $expectation, \get_debug_type($value));
}

/**
 * @group variadic
 *
 * @param null|mixed $glue
 * @param null|mixed $prefix
 * @param null|mixed $suffix
 * @param null|mixed $transform
 *
 * @uses \App\Strings\unwrap
 */
function cat($glue = '', $prefix = '', $suffix = '', $transform = null): \Closure
{
    $transform ??= \App\Strings\unwrap(...);

    /*
    *
    * @group junctive
    * @group nonary
    *
    * @uses \array_filter (native) Filters elements of an array using a callback function.
    * @uses \array_map (native) Applies the callback to the elements of the given arrays.
    * @uses \func_get_args (native) The arguments to this function in a sequential array.
    * @uses \implode (native) Concatenates elements of an array into a string.
    */
    return
        /**
         * @group nonary
         */
        function () use ($glue, $prefix, $suffix, $transform): string {
            return $prefix . \implode($glue, \array_filter(
                \array_map($transform, \func_get_args()),
                /**
                 * @uses \count (native) Returns the number of items in an array or Countable object.
                 * @uses \Countable::count
                 * @uses \empty
                 * @uses \is_bool (native) Returns whether a variable is boolean.
                 * @uses \is_null (native) Returns whether a variable is null.
                 * @uses \is_numeric (native) Returns whether or not a variable is a number or a numeric string.
                 * @uses \is_string (native) Returns whether a variable is a string.
                 * @uses \trim (native) Strips whitespace from the beginning and end of a string.
                 *
                 * @throws \UnhandledMatchError
                 */
                function (mixed $value) {
                    return match (true) {
                        \is_null($value) => false,
                        \is_string($value) => \trim($value) !== '',
                        \is_numeric($value) => true,
                        \is_bool($value) => true,
                        $value instanceof \Stringable => \trim((string) $value) !== '',
                        $value instanceof \Countable => \count($value) !== 0,
                    };
                },
            )) . $suffix;
        };
}

/**
 * @group unary
 *
 * @uses \app (Laravel) Gets an item from the available container instance.
 * @uses \get_class (native) Returns the name of the class of an object.
 * @uses \json_encode (native) Returns the JSON representation of a value.
 * @uses \sprintf (native) Returns a formatted string.
 */
function objectRepresentation(object $value, bool $brief = false): string
{
    if (!$brief) {
        return match (true) {
            $value instanceof EloquentBuilder => $value->getQuery()->toRawSql(),
            $value instanceof GenericBuilder => $value->toRawSql(),
            default => \app()->make(Exporter::class)->export($value)
        };
    }

    if ($value instanceof \BackedEnum) {
        return \sprintf('a backed enum %s::%s (%s)', \get_class($value), $value->name, \json_encode($value->value));
    }

    if ($value instanceof \UnitEnum) {
        return \sprintf('an enum %s::%s', \get_class($value), $value->name);
    }

    return \sprintf(
        'a%s object of class %s%s',
        match (true) {
            $value instanceof Model => ' model',
            $value instanceof Collection => ' collection',
            $value instanceof EloquentBuilder => ' query builder',
            $value instanceof GenericBuilder => ' query builder',
            $value instanceof Relation => ' relation',
            $value instanceof \Illuminate\Support\Stringable => ' stringable',
            $value instanceof \Stringable => ' stringable',
            default => 'n',
        },
        \get_class($value),
        match (true) {
            $value instanceof EloquentBuilder => ': ' . $value->getQuery()->toRawSql(),
            $value instanceof GenericBuilder => ': ' . $value->toRawSql(),
            $value instanceof \Stringable => ' with inner value ' . \json_encode((string) $value),
            default => ''
        },
    );
}

/**
 * Converts a given value to SQL.
 *
 * @group unary
 *
 * @uses \dd (Laravel) Dump the passed variables and end the script.
 * @uses \Illuminate\Database\Eloquent\Builder::getQuery
 * @uses \Illuminate\Database\Query\Builder::toRawSql
 * @uses \is_string (native) Returns whether a variable is a string.
 * @uses \Stringable::__toString
 */
function sql(mixed $other): string
{
    return match (true) {
        \is_string($other) => $other,
        $other instanceof EloquentBuilder => $other->getQuery()->toRawSql(),
        $other instanceof GenericBuilder => $other->toRawSql(),
        $other instanceof \Stringable => (string) $other,
        default => \dd($other)
    };
}

/**
 * Do not trim here. The caller can do that themselves if they want.
 *
 * NOTE This is not intended for debugging.
 *
 * @group factory
 * @group unary
 *
 * @uses \App\Enums\Environments::rescue
 * @uses \App\Facades\Handler::glowWarning
 * @uses \App\Strings\unwrap
 * @uses \array_map (native) Applies the callback to the elements of the given arrays.
 * @uses \implode (native) Joins array elements with a string.
 * @uses \is_null (native) Returns whether a variable is null.
 * @uses \is_numeric (native) Returns whether or not a variable is a number or a numeric string.
 * @uses \is_string (native) Returns whether a variable is a string.
 * @uses \Stringable::__toString
 */
function unwrap(mixed $source, string $delimiter = ' '): string
{
    if (\is_null($source)) {
        return '';
    }

    if (\is_string($source)) {
        return $source;
    }

    if (\is_array($source)) {
        \assert(\array_is_list($source));
        return \implode($delimiter, \array_map(\App\Strings\unwrap(...), $source));
    }

    if (\is_numeric($source)) {
        return (string) $source;
    }

    if ($source instanceof \BackedEnum) {
        return $source->value;
    }

    if ($source instanceof \UnitEnum) {
        return $source->name;
    }

    if ($source instanceof EloquentBuilder) {
        return $source->getQuery()->toRawSql();
    }

    if ($source instanceof GenericBuilder) {
        return $source->toRawSql();
    }

    if ($source instanceof \Stringable) {
        Handler::glowWarning('Stringable normalized to inner string.', \compact('source'));
        return $source->__toString();
    }

    if ($source instanceof Normalizable) {
        Handler::glowWarning('Normalizable normalized to inner string.', \compact('source'));

        return \App\Strings\unwrap($source->normalized());
    }

    if ($source instanceof HasValue) {
        Handler::glowWarning('Pulling string from option.', \compact('source'));

        return \App\Strings\unwrap($source->get());
    }

    // do this one last
    if ($source instanceof NullOption) {
        Handler::glowWarning('Resolving empty source to empty string.', \compact('source'));
        return '';
    }

    if ($source instanceof Lazy) {
        Handler::glowWarning('Pulling string from option.', \compact('source'));

        return \App\Strings\unwrap($source->resolve());
    }

    return Environment::rescue(throwable: new NoStringRepresentationException($source));
}

/**
 * @group unary
 *
 * @uses \App\Strings\unwrap
 */
function unwrapThen(callable $callback): \Closure
{
    return fn (mixed $source) => $callback(\App\Strings\unwrap($source));
}

/**
 * @group unary
 *
 * @uses \count (native) Returns the number of items in an array or Countable object.
 * @uses \current
 * @uses \ReflectionAttribute::getArguments
 * @uses \ReflectionClass::__construct
 * @uses \ReflectionClass::getAttributes
 */
function gloss(object|string $value): ?string
{
    $ref = new \ReflectionClass($value);

    $attributes = $ref->getAttributes(Gloss::class);

    if (\count($attributes) === 0) {
        return null;
    }

    return \current($attributes)->getArguments()[0];
}

/**
 * @group unary
 *
 * @uses \App\Strings\valueRepresentation
 * @uses \is_string (native) Returns whether a variable is a string.
 */
function selectorRepresentation(mixed $value): string
{
    return match (true) {
        \is_string($value) => $value,
        default => \App\Strings\valueRepresentation($value)
    };
}

/**
 * @group unary
 *
 * @uses \App\Strings\objectRepresentation
 * @uses \gettype (native) Returns the type of a variable.
 * @uses \json_encode (native) Returns the JSON representation of a value.
 * @uses \strtolower (native) Makes a string lowercase.
 */
function valueRepresentation(mixed $value, bool $verbose = false): string
{
    $type = \strtolower(\gettype($value));

    if ($type === 'double') {
        $type = 'float';
    }

    if ($type === 'resource (closed)') {
        $type = 'closed resource';
    }

    return match ($type) {
        'array' => ($verbose ? 'an ' : '') . $type,
        'integer' => ($verbose ? 'an integer ' : '') . $value,
        'object' => \App\Strings\objectRepresentation($value, !$verbose),
        'boolean' => ($verbose ? 'a boolean ' : '') . \json_encode($value),
        'closed resource', 'float', 'resource' => ($verbose ? 'a ' : '') . $type,
        'string' => ($verbose ? 'a string ' : '') . \json_encode($value),
        'null' => 'null',
        default => ($verbose ? 'a value of ' : '') . $type,
    };
}

/**
 * @group binary
 *
 * @param TValue $value
 * @param null|(callable(TValue): (TReturn)) $callback
 */
function with($value, mixed $callback = null): void
{
    \App\Options\with($value, $callback);
}

/**
 * @group binary
 *
 * @param TValue $value
 * @param null|(callable(TValue): (TReturn)) $callback
 */
function withAll($value, mixed $callback = null): void
{
    \App\Options\withAll($value, $callback);
}

/**
 * @group factory
 * @group unary
 *
 * @uses \App\Strings\BlockText::containsParagraphBreak
 * @uses \App\Strings\BlockText::make
 * @uses \App\Strings\EmptyText::__construct
 * @uses \App\Strings\InlineText::__construct
 */
function wrap(string $source): Optional
{
    return match (true) {
        $source === '' => new EmptyText(),
        BlockText::containsParagraphBreak($source) => BlockText::make($source),
        default => new InlineText($source)
    };
}

/**
 * Resolves a value to a string, using the inner string if no value is given or the value is null.
 *
 * ❗ Do not USE \Illuminate\Support\Str::headline here. It injects a space before each uppercase character.
 *
 * @group resolving
 * @group unary
 *
 * @param null| $source_value
 *
 * @uses \App\Casts\Title::resolveBackedEnum
 * @uses \App\Casts\Title::resolveHasTitleMethod
 * @uses \App\Casts\Title::resolveHasTitleProperty
 * @uses \App\Casts\Title::resolveUnitEnum
 * @uses \App\Enums\Environments::rescue
 * @uses \App\Strings\TypeIndicator::__construct
 * @uses \App\Strings\unwrap
 */
function titleUnwrapped(mixed $source_value): string
{
    return match (true) {
        $source_value instanceof HasTitleMethod => Title::resolveHasTitleMethod($source_value),
        $source_value instanceof HasTitleProperty => Title::resolveHasTitleProperty($source_value),
        // Really, all of these should implement either HasTitleMethod or HasTitleProperty, but we'll leave this here for now.
        $source_value instanceof \BackedEnum => Title::resolveBackedEnum($source_value),
        $source_value instanceof \UnitEnum => Title::resolveUnitEnum($source_value),
        $source_value instanceof \Stringable => Title::resolveStringable($source_value),
        $source_value instanceof \ArrayAccess => Title::resolveArrayAccess($source_value),
        default => \App\Strings\unwrap($source_value) // includes null to ''
    };
}

/**
 * @group binary
 *
 * @uses \is_string (native) Returns whether a variable is a string.
 * @uses \str_ends_with (native) Returns whether the haystack string ends with the given needle.
 * @uses \str_starts_with (native) Returns whether the haystack string begins with the given needle.
 * @uses \strlen (native) Returns the length of the given string.
 * @uses \substr (native) Returns part of a string.
 */
function trim(string $source, ?string $prefix = null, ?string $suffix = null, bool $assert_not_empty = false): string
{
    $result = $source;

    if (\is_string($prefix) && $prefix !== '') {
        $result = \str_starts_with($source, $prefix) ? \substr($source, \strlen($prefix)) : $source;
    }

    if (\is_string($suffix) && $suffix !== '') {
        $result = \str_ends_with($source, $suffix) ? \substr($source, 0, -\strlen($suffix)) : $source;
    }

    if ($assert_not_empty) {
        \assert($result !== '');
    }

    return $result;
}

/**
 * Returns null so that we can use null coalescing to get rid of empty strings.
 *
 * @group unary
 *
 * @uses \App\Strings\trim
 * @uses \is_null
 */
function nullIfEmpty(?string $string): ?string
{
    if (\is_null($string)) {
        return null;
    }
    return \App\Strings\trim($string) === '' ? null : $string;
}

/**
 * @group unary
 *
 * @uses \App\Strings\trim
 * @uses \assert (native) If enabled, and the given assertion is false, throws an exception.
 *
 * @throws \AssertionError
 */
function assertStringNotEmpty(string $string): void
{
    \assert(\App\Strings\trim($string) !== '');
}

/**
 * Determines whether a given string starts with a given substring.
 *
 * Use this instead of \str_starts_with and Str::startsWith.
 *
 * @group binary
 *
 * @param string $haystack
 * @param iterable<string>|string $needles
 *
 * @uses \App\Options\wrap
 * @uses \App\Strings\unwrap
 */
function startsWith(mixed $haystack, mixed $needles): bool
{
    $haystack = \App\Strings\unwrap($haystack);
    $needle_option = \App\Options\wrap($needles);

    if ($needle_option instanceof \Stringable && \str_starts_with($haystack, (string) $needles)) {
        return true;
    }

    if ($needle_option instanceof \Traversable) {
        foreach ($needle_option as $needle) {
            if (\App\Strings\startsWith($haystack, $needle)) {
                return true;
            }
        }
    }

    return false;
}

/**
 * Determines whether a given string matches a given pattern.
 *
 * @group binary
 *
 * @param iterable<string>|string $pattern
 */
function _is(string $value, string $pattern): bool
{
    // If the given value is an exact match we can of course return true right
    // from the beginning. Otherwise, we will translate asterisks and do an
    // actual pattern match against the two strings to see if they match.
    if ($pattern === $value) {
        return true;
    }

    $pattern = \preg_quote($pattern, '#');

    // Asterisks are translated into zero-or-more regular expression wildcards
    // to make it convenient to check if the strings starts with the given
    // pattern such as "library/*", making any string check convenient.
    $pattern = \str_replace('\*', '.*', $pattern);

    return \preg_match('#^' . $pattern . '\z#u', $value) === 1;
}

/**
 * Determines whether a given string matches a given pattern.
 *
 * Use this instead of Str::is.
 *
 * @group binary
 *
 * @uses \App\Options\iterate
 * @uses \App\Strings\_is
 */
function is(mixed $value, mixed $pattern): bool
{
    foreach (\App\Options\iterate($value) as $inner_value) {
        foreach (\App\Options\iterate($pattern) as $inner_pattern) {
            if (\App\Strings\_is(pattern: $inner_pattern, value: $inner_value)) {
                return true;
            }
        }
    }
    return false;
}

/**
 * @group variadic
 *
 * @uses \array_filter
 * @uses \Illuminate\Support\Arr::flatten
 * @uses \implode (native) Joins array elements with a string.
 */
function message(...$pieces): string
{
    return \implode(': ', \array_filter(Arr::flatten($pieces)));
}

/**
 * @group unary
 *
 * @uses \json_decode
 * @uses \json_last_error
 */
function isJson(string $string): bool
{
    \json_decode($string);
    return \json_last_error() === \JSON_ERROR_NONE;
}

/**
 * @group unary
 *
 * @uses \str_ends_with
 * @uses \str_starts_with
 */
function isPlainString(string $string): bool
{
    return !\str_starts_with($string, '{') && !\str_ends_with($string, '}');
}

/**
 * Returns the standard message for an unknown value.
 *
 * @group unary
 *
 * @param null|mixed $value
 *
 * @uses \app
 * @uses \App\Options\unwrap
 */
function unknown($value = null): string
{
    $value = \App\Options\unwrap($value);

    if (\is_null($value)) {
        return \app('translator')->get('unknown');
    }

    return \app('translator')->get('unknown-value', ['value' => $value]);
}

/**
 * @group unary
 */
function explode_string_lines(string $source): \Traversable
{
    if ($source === '') {
        return;
    }

    foreach (\explode("\n", $source) as $line) {
        yield trim($line);
    }
}

/**
 * @group unary
 */
function explode_lines($source): \Traversable
{
    if (\is_iterable($source)) {
        $iterator = new \AppendIterator();

        foreach ($source as $element) {
            $iterator->append(explode_lines($element));
        }
        return $iterator;
    }

    if (\is_string($source)) {
        return explode_string_lines($source);
    }

    if (\is_null($source)) {
        return new \EmptyIterator();
    }

    if ($source instanceof ComponentSlot) {
        return explode_string_lines($source->toHtml());
    }

    \dump($source);
    throw new \LogicException('Invalid value.');
}

/**
 * ‼️ This obliterates newlines. DO NOT use this on block text or any other context where newlines are significant.
 *
 * @group unary
 *
 * @uses \assert (native) If enabled, and the given assertion is false, throws an exception.
 * @uses \is_callable (native) Returns whether a variable can be called as a function.
 * @uses \is_string (native) Returns whether a variable is a string.
 * @uses \preg_replace
 *
 * @throws \AssertionError
 */
function clean(string $raw, ?\Closure $after_clean = null): string
{
    $step1 = \preg_replace('~[\x00-\x1F\x80-\xFF]~u', '', $raw); // remove unprintables
    $step2 = \preg_replace('~^[\s\x{FEFF}]+|[\s\x{FEFF}]+$~u', '', $step1); // trim
    $clean_value = \preg_replace('~(\s|\x{3164})+~u', ' ', $step2); // squish spaces
    $final_clean_value = \is_callable($after_clean) ? $after_clean($clean_value) : $clean_value;
    \assert(\is_string($final_clean_value));
    return $final_clean_value;
}

function phpAttribute($class_fqn, ...$values): string
{
    if (\count($values) === 0) {
        return '';
    }
    return \sprintf('#[\%s(%s)]', $class_fqn, \substr(\json_encode($values), 1, -1));
}

/**
 * @group variadic
 */
function render(...$pieces): string
{
    $result = '';

    foreach ($pieces as $piece) {
        $result .= match (true) {
            $piece instanceof \ReflectionAttribute => \App\Strings\render($piece->newInstance()),
            $piece instanceof Htmlable => $piece->toHtml(),
            $piece instanceof Renderable => \App\Strings\render($piece->render()), // Renderable::render says it returns a string but doesn't enforce it.
            $piece instanceof \Stringable => (string) $piece,
            $piece instanceof \Closure => (string) $piece(),
            \is_string($piece) => Blade::render($piece, []),
            \is_null($piece) => '',
            \is_numeric($piece) => (string) $piece,
            default => \dd($piece)
        };
    }
    return $result;
}

/**
 * @group variadic
 */
function html(...$pieces): Htmlable
{
    if (\count($pieces) === 0) {
        return new class() implements Htmlable
        {
            public function toHtml(): string
            {
                return '';
            }
        };
    }

    if (\count($pieces) === 1 && $pieces[0] instanceof Htmlable) {
        return $pieces[0];
    }

    if (\count($pieces) === 1 && $pieces[0] instanceof Renderable) {
        return new class($pieces[0]) implements Htmlable
        {
            /**
             * Constructor.
             *
             * @group magic
             * @group mutator
             * @group nonary|unary|variadic
             *
             * @uses parent::__construct
             *
             * @return void
             */
            public function __construct(
                protected Renderable $renderable,
            ) {}

            public function toHtml(): string
            {
                return $this->renderable->render();
            }
        };
    }

    $content = [];
    $attributes = [];

    foreach ($pieces as $index => $piece) {
        if ($index === 0) {
            \assert(\is_string($piece));
            continue;
        }

        if (\is_null($piece)) {
            continue;
        }

        if (\is_array($piece)) {
            $attributes = \array_merge($attributes, $piece);
            continue;
        }
        $content[] = $piece;
    }

    if (\count($content) === 0) {
        return new class($pieces[0], $attributes) implements Htmlable
        {
            /**
             * Constructor.
             *
             * @group magic
             * @group mutator
             * @group nonary|unary|variadic
             *
             * @uses parent::__construct
             *
             * @return void
             */
            public function __construct(
                public string $tag,
                public array $attributes,
            ) {}

            public function toHtml(): string
            {
                return \sprintf('<%s %s />', $this->tag, new ComponentAttributeBag($this->attributes));
            }
        };
    }

    return new class($pieces[0], $attributes, $content) implements Htmlable
    {
        /**
         * Constructor.
         *
         * @group magic
         * @group mutator
         * @group nonary|unary|variadic
         *
         * @uses parent::__construct
         *
         * @return void
         */
        public function __construct(
            public string $tag,
            public array $attributes,
            public array $content,
        ) {}

        public function toHtml(): string
        {
            return \sprintf(
                '<%s %s>%s</%s>',
                $this->tag,
                new ComponentAttributeBag($this->attributes),
                \App\Strings\render(...$this->content),
                $this->tag,
            );
        }
    };
}

function viewBox(float $width, float $height, float $x = 0, float $y = 0, float $horizontal_overflow = 0, float $vertical_overflow = 0): string
{
    return \sprintf(
        '%d %d %d %d',
        $x - $width * $horizontal_overflow,
        $y - $height * $vertical_overflow,
        $width * (1 + 2 * $horizontal_overflow),
        $height * (1 + 2 * $vertical_overflow),
    );
}
