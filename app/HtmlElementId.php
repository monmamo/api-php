<?php

namespace App;

use App\Concerns\InnerString;
use App\Enums\HtmlAttributes;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Str;
use Illuminate\View\ComponentAttributeBag;

/**
 * Class used to construct IDs for HTML elements.
 *
 * ❗ Do not extend __construct! \Illuminate\Database\Eloquent\Collection calls it from several functions.
 *
 * @method \JsonSerializable::jsonSerialize
 */
final class HtmlElementId extends Collection implements \Stringable
{
    use Concerns\ResolvesString;
    use InnerString {
        InnerString::innerStringAsString as public __toString;
    }
    use Methods\Get\GetExtends;
    use Methods\Make\MakeFromConstructorVariadic;

    /**
     * Resolves a value to a string, using the inner string if no value is given or the value is null.
     *
     * @implements \App\Concerns\ResolvesString::resolveString
     * @group resolving
     * @group unary
     *
     * @uses \App\Dumping\dumpIfException
     * @uses \assert (native) If enabled, and the given assertion is false, throws an exception.
     * @uses \count (native) Returns the number of items in an array or Countable object.
     * @uses \is_countable (native) Returns whether a variable is countable.
     * @uses \is_iterable (native) Returns whether a variable can be iterated over.
     * @uses \uniqid (native) Generates a unique ID.
     *
     * @throws \AssertionError
     */
    protected function resolveString(mixed $value = null): string
    {
        \assert(\is_countable($this));
        \assert(\is_iterable($this));

        if (\count($this) === 0) {
            return \uniqid();
        }

        return \App\Dumping\dumpIfException(
            $this,
            fn () => Str::camel($this->join('')),
        );
    }

    /**
     * @group nonary
     *
     * @uses \App\Concerns\InnerString::innerString
     * @uses \App\Enums\HtmlAttributes::bag
     */
    public function asBag(): ComponentAttributeBag
    {
        return HtmlAttributes::ID->bag($this->innerString());
    }

    /**
     * @group nonary
     *
     * @uses \App\Concerns\InnerString::innerString
     * @uses \App\Enums\HtmlAttributes::bag
     */
    public function asFor(): ComponentAttributeBag
    {
        return HtmlAttributes::DescribedElement->bag($this->innerString());
    }

    /**
     * @group nonary
     *
     * @uses \App\Concerns\InnerString::innerString
     * @uses \App\Enums\HtmlAttributes::bag
     */
    public function asHref(): ComponentAttributeBag
    {
        return HtmlAttributes::ReferencedTarget->bag('#' . $this->innerString());
    }

    /**
     * Dissolves the object into a stream of pieces.
     *
     * @implements \App\Contracts\Dissolvable::dissolve
     * @group multivalue
     * @group nonary
     */
    public function dissolve(): \Traversable
    {
        return $this;
    }
}
