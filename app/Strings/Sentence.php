<?php

namespace App\Strings;

use App\Casts\BlockText;
use App\Concerns\AlwaysDefined;
use App\Concerns\EmptyByCount;
use App\Concerns\InnerString;
use App\Concerns\Optional\NoOffsets;
use App\Concerns\Optional\NoProperties;
use App\Concerns\ResolvesString;
use App\Concerns\SerializesValueProperty;
use App\Contracts\BlockStringable;
use App\Contracts\HasValue;
use App\Contracts\Normalizable;
use App\Contracts\Optional;
use App\Methods\Count\CountIsAlwaysOne;
use App\Methods\MagicGet\MagicGetNotValid;
use App\Methods\Make\MakeFromConstructorVariadic;
use App\Methods\Normalized\NormalizedReturnsThisAsString;
use App\Methods\ToHtml\ThisAsStringToHtml;
use App\MultivalueContext;
use App\States\Immutable;
use Illuminate\Contracts\Database\Eloquent\Castable;
use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use Illuminate\Contracts\Support\Htmlable;

/**
 * Similar to InlineText but not the same because a sentence may span multiple lines.
 */
class Sentence extends \ArrayObject implements BlockStringable, Castable, HasValue, Htmlable, Normalizable, Optional
{
    use AlwaysDefined;
    use CountIsAlwaysOne;
    use EmptyByCount;
    use Immutable;
    use InnerString{
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
    use MagicGetNotValid;
    use MakeFromConstructorVariadic;
    use NoOffsets;
    use NoProperties;
    use NormalizedReturnsThisAsString;
    use ResolvesString;
    use SerializesValueProperty;
    use ThisAsStringToHtml;

    private MultivalueContext $_context;

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
     * @implements \App\Concerns\ResolvesString::resolveString
     * @group resolving
     * @group unary
     *
     * @uses \App\Strings\cat
     * @uses \ArrayObject::getArrayCopy Creates an array copy of the ArrayObject.
     */
    protected function resolveString(mixed $value = null): string
    {
        static $sentencifier;
        $sentencifier ??= \App\Strings\cat(glue: ' ');
        return $sentencifier(...$this->getArrayCopy());
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
        return new BlockText();
    }

    /**
     * Returns the exception's context information.
     *
     * While adding context to every log message can be useful, sometimes a particular exception may have unique context that you would like to include in your logs. By defining a context method on one of your application's custom exceptions, you may specify any data relevant to that exception that should be added to the exception's log entry.
     *
     * 💢 Laravel's documentation doesn't indicate that when including this in an exception, this has to be an array. I found out the hard way that it does. Here's how to get around that:
     * - Follow `use \App\Concerns\MultivalueContext` with `{ context as contextGenerator; }`.
     * - Add this method: `public function context(): array { return [...$this->contextGenerator()]; }`
     *
     * @see https://laravel.com/docs/9.x/errors#exception-log-context
     *
     * @implements \App\Contracts\HasContext::context
     * @group associative
     * @group multivalue
     * @group nonary
     */
    public function context(): \Traversable
    {
        return $this;
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
        \App\Dumping\dump($this->innerString(), $this->_context); // dumps depending on environment and verbosity
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
}
