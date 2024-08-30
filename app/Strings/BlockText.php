<?php

namespace App\Strings;

use App\Casts\NormalScalar;
use App\Concerns\AlwaysDefined;
use App\Concerns\InnerString;
use App\Concerns\Optional\NoProperties;
use App\Concerns\SerializesValueProperty;
use App\Contracts\BlockStringable;
use App\Contracts\Dumps;
use App\Contracts\Emptyable;
use App\Contracts\Filterable;
use App\Contracts\Foldable;
use App\Contracts\HasValue;
use App\Contracts\Mappable;
use App\Contracts\Normalizable;
use App\Contracts\Optional;
use App\Contracts\TransformativeInvoker;
use App\Methods\Make\MakeFromConstructorVariadic;
use App\Methods\Normalized\NormalizedReturnsThisAsString;
use App\Methods\Sprintf\SprintfOnMake;
use App\MultivalueContext;
use Illuminate\Contracts\Database\Eloquent\Castable;
use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Support\Arr;
use Spatie\Html\Elements\Element;

/**
 * Do not use these traits:
 * - \App\Concerns\EmptyByCount
 * - \App\Concerns\AlwaysScalar
 * - \App\Options\MultivalueOption
 */
class BlockText extends \ArrayObject implements \Stringable, BlockStringable, Castable, Dumps, Emptyable, Filterable, Foldable, HasValue, Htmlable, Mappable, Normalizable, Optional, TransformativeInvoker
{
    use AlwaysDefined;
    use InnerString {
        InnerString::innerStringAsString as public __toString;
        mapInnerString as public map;
        flatMapInnerString as public flatMap;
        filterInnerString as public filter;
        filterNotInnerString as public filterNot;
        selectInnerString as public select;
        rejectInnerString as public reject;
        foldLeftInnerString as public foldLeft;
        foldRightInnerString as public foldRight;
    }
    use MakeFromConstructorVariadic;
    use NoProperties;
    use NormalizedReturnsThisAsString;
    use SerializesValueProperty;
    use SprintfOnMake;

    private MultivalueContext $_context;

    /**
     * Constructor.
     *
     * @group binary
     * @group magic
     * @group mutator
     *
     * @uses \App\MultivalueContext::__construct
     * @uses \App\MultivalueContext::put
     * @uses parent::__construct
     *
     * @return void
     */
    private function __construct(array $pieces, mixed $if_blank = null, array $debugging_context = [])
    {
        \assert(Arr::isList($pieces), 'BlockText must be constructed with a list of strings.');
        parent::__construct($pieces);

        $this->_context = new MultivalueContext();
        $this->_context->put('debugging_context', $debugging_context);
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
     * @uses \App\Callables\transform
     * @uses \ArrayObject::getArrayCopy Creates an array copy of the ArrayObject.
     */
    public function __invoke(...$transforms)
    {
        return \App\Callables\transform(
            arity: 1,
            seed: $this->getArrayCopy(),
            transforms: $transforms,
            // context: $this,
        );
    }

    /**
     * Resolves a value to a string, using the inner string if no value is given or the value is null.
     *
     * ❗ Do not use \App\Strings\cat.
     *
     * @implements \App\Concerns\ResolvesString::resolveString
     * @group resolving
     * @group unary
     *
     * @param null|mixed $value
     *
     * @uses \array_filter (native) Filters elements of an array using a callback function.
     * @uses \ArrayObject::getArrayCopy Creates an array copy of the ArrayObject.
     * @uses \implode (native) Concatenates elements of an array into a string.
     */
    protected function resolveString($value = null): string
    {
        return \implode(
            "\n\n",
            \array_filter(
                $this->getArrayCopy(),
                /**
                 * @group unary
                 *
                 * @uses \is_bool (native) Returns whether a variable is boolean.
                 * @uses \is_null (native) Returns whether a variable is null.
                 * @uses \is_numeric (native) Returns whether or not a variable is a number or a numeric string.
                 * @uses \is_string (native) Returns whether a variable is a string.
                 * @uses \trim (native) Strips whitespace from the beginning and end of a string.
                 *
                 * @throws \UnhandledMatchError
                 */
                static function (mixed $item): bool {
                    return match (true) {
                        \is_null($item) => false,
                        \is_string($item) => \trim($item) !== '',
                        $item instanceof \Stringable => \trim((string) $item) !== '',
                        \is_numeric($item) => true,
                        \is_bool($item) => false
                    };
                },
            ),
        );
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
        return new \App\Casts\BlockText();
    }

    /**
     * @group unary
     *
     * @uses \preg_match (native) Performs a regular expression match against a string.
     */
    public static function containsParagraphBreak(string $string): bool
    {
        return \preg_match('/[\r\n][\r\n]+/', $string) === 1;
    }

    /**
     * Returns the exception's context information.
     *
     * @implements \App\Contracts\HasContext::context
     * @group associative
     * @group multivalue
     * @group nonary
     */
    public function context(): \Traversable
    {
        return $this->_context;
    }

    /**
     * @implements \App\Contracts\Dumps::dump
     * @group fluent
     * @group nonary
     *
     * @uses \App\Concerns\InnerString::innerString
     * @uses \App\Dumping\dump
     */
    public function dump(): static
    {
        \App\Dumping\dump($this->innerString(), $this->_context); // 🔒
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
     * Returns whether this collection or container is empty.
     *
     * Could also return true if no value is available, false otherwise.
     *
     * 💢 Can't be declared as boolean because \Illuminate\Support\Optional::isEmpty and  \PhpOption\Option::isEmpty are not type-declared.
     *
     * 💢 See note in \App\Concerns\EmptyByCount.
     *
     * @implements \App\Contracts\Emptyable::isEmpty
     * @implements \Illuminate\Support\Optional::isEmpty
     * @group nonary
     * @group reductive
     *
     * @uses \ArrayObject::getArrayCopy Creates an array copy of the ArrayObject.
     * @uses \count (native) Returns the number of items in an array or Countable object.
     *
     * @return boolean
     */
    public function isEmpty()
    {
        return \count($this->getArrayCopy()) === 0;
    }

    /**
     * Returns whether this collection or container is not empty.
     *
     * Could also return false if no value is available, true otherwise.
     *
     * 💢 Can't be declared as boolean because \Illuminate\Support\Optional::isNotEmpty and  \PhpOption\Option::isNotEmpty are not type-declared.
     *
     * 💢 See note in \App\Concerns\EmptyByCount.
     *
     * @implements \App\Contracts\Emptyable::isNotEmpty
     * @implements \Illuminate\Support\Optional::isNotEmpty
     * @group nonary
     * @group reductive
     *
     * @uses \ArrayObject::getArrayCopy Creates an array copy of the ArrayObject.
     * @uses \count (native) Returns the number of items in an array or Countable object.
     *
     * @return boolean
     * @throws \AssertionError
     */
    public function isNotEmpty()
    {
        return \count($this->getArrayCopy()) !== 0;
    }

    /**
     * Constructs a new slug from a sequence of pieces.
     *
     * @see app/Methods/Make/README.md
     *
     * @group factory
     * @group variadic
     *
     * @uses \App\Strings\BlockText::__construct
     * @uses \array_walk_recursive
     * @uses \count (native) Returns the number of items in an array or Countable object.
     */
    public static function make(...$inbound_pieces): static
    {
        if (\count($inbound_pieces) === 0) {
            return new static([]);
        }

        if (\count($inbound_pieces) === 1 && $inbound_pieces[0] instanceof static) {
            return $inbound_pieces[0];
        }

        $pieces = [];
        \array_walk_recursive(
            $inbound_pieces,
            /**
             * @uses \App\Casts\NormalScalar::cast
             * @uses \array_push (native) Pushes one or more elements onto the end of array.
             * @uses \preg_split (native) Split string by a regular expression.
             * @uses \strlen (native) Returns the length of the given string.
             */
            function ($piece) use (&$pieces): void {
                foreach (\preg_split('/[\r\n][\r\n]+/', (string) NormalScalar::cast($piece)) as $new_piece) {
                    if (\strlen($new_piece) > 0) {
                        \array_push($pieces, $new_piece);
                    }
                }
            },
        );

        // The pieces should already be strings, so don't convert them when we store them.
        return new self($pieces);
    }

    /**
     * Returns content as a string of HTML.
     *
     * @implements \Illuminate\Contracts\Support\Htmlable::toHtml (which DOES NOT declare a return type)
     * @group nonary
     *
     * @uses \array_reduce (native) Iteratively reduces the array to a single value using a callback function.
     * @uses \ArrayObject::getArrayCopy Creates an array copy of the ArrayObject.
     *
     * @return string
     */
    public function toHtml()
    {
        return \array_reduce(
            $this->getArrayCopy(),
            /**
             * @uses \nl2br (native) Inserts HTML line breaks before all newlines in a string.
             * @uses \Spatie\Html\BaseElement::child
             * @uses \Spatie\Html\BaseElement::render
             * @uses \Spatie\Html\Elements\Element::withTag
             */
            function (mixed $result, mixed $paragraph): string {
                return $result . Element::withTag('p')->child(\nl2br((string) $paragraph))->render();
            },
            '',
        );
    }
}
