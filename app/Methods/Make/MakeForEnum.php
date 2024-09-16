<?php

namespace App\Methods\Make;

use App\Callables\Concerns\Getter;
use App\ColumnReference;
use App\Concerns\MultivalueContext;
use App\Concerns\PipelineFunctionality;
use App\Contracts\HasContext;
use App\GeneralAttributes\DefaultValue;
use App\Slug;
use Illuminate\Routing\Route;

/**
 * usage:
 * use \App\Methods\Make\MakeForEnum;
 */
trait MakeForEnum
{
    /**
     * Transforms the attribute from the underlying model values or the given value or atributes.
     *
     * @group nonary
     *
     * @param null|mixed $slug
     *
     * @uses \App\ColumnReference::__toString
     * @uses \App\Slug::of
     *
     * @throws \LogicException from \App\ColumnReference::of
     */
    public static function getter($slug = null): object
    {
        $pipeline = new class() implements HasContext
        {
            use \App\Properties\Slug;
            use Getter; // defines __invoke
            use MultivalueContext;
            use PipelineFunctionality;

            public $class;

            /**
             * Generates the transforms of the pipeline.
             *
             * @implements \App\Callables\BaseCallable::transforms
             * @implements \App\Concerns\PipelineFunctionality::transforms
             * @group nonary
             * @group sequential
             */
            protected function transforms(): \Traversable
            {
                yield \App\Attributes\getterByKey(
                    key: $this->Slug,
                    transform: [$this->class, 'make'],
                );
            }

            /**
             * Yields the object's context information.
             *
             * @implements \App\Contracts\HasContext::context
             * @group multivalue
             * @group nonary
             */
            public function context(): \Traversable
            {
                yield 'class' => $this->class;
                yield 'slug' => $this->Slug;
            }
        };

        $pipeline->class = static::class;
        $pipeline->Slug = (string) ColumnReference::of($slug ?? self::class);
        return $pipeline;
    }

    /**
     * @see app/Methods/Make/README.md
     *
     * @group factory
     * @group unary
     *
     * @uses \App\Dumping\dumpIfException
     *
     * @throws \AssertionError
     */
    public static function make(mixed $source): static
    {
        return \App\Dumping\dumpIfException(
            \compact('source'),
            /**
             * @group unary
             *
             * @uses \App\Methods\Make\MakeForEnum::makeDefaultValue
             * @uses \App\Methods\Make\MakeForEnum::makeFromString
             * @uses \App\Strings\expectationMessage
             * @uses \App\Strings\unwrap
             * @uses \assert (native) If enabled, and the given assertion is false, throws an exception.
             * @uses \Illuminate\Routing\Route::uri
             * @uses \is_null (native)
             * @uses \is_string (native) Returns whether a variable is a string.
             * @uses \trim (native)
             *
             * @throws \AssertionError
             */
            function () use ($source) {
                $result = match (true) {
                    $source instanceof static => $source,
                    \is_null($source) => static::makeDefaultValue(),
                    \is_string($source) && \trim($source) === '' => static::makeDefaultValue(),
                    $source instanceof Route => static::makeFromString(\explode('/', $source->uri())[0]),
                    default => static::makeFromString(\App\Strings\unwrap($source)),
                };
                \assert(
                    $result instanceof static,
                    \App\Strings\expectationMessage(
                        expectation: static::class,
                        value: $result,
                    ),
                );
                return $result;
            },
        );
    }

    /**
     * @group nonary
     *
     * @uses \count (native) Returns the number of items in an array or Countable object.
     * @uses \LogicEXception::__construct
     * @uses \ReflectionAttribute::newInstance
     * @uses \ReflectionClass::__construct
     * @uses \ReflectionClass::getAttributes
     *
     * @throws \LogicEXception
     */
    public static function makeDefaultValue(): static
    {
        $ref = new \ReflectionClass(self::class);
        $classAttributes = $ref->getAttributes(DefaultValue::class);

        if (\count($classAttributes) > 0) {
            return $classAttributes[0]->newInstance()->value;
        }

        throw new \LogicEXception(
            'blank value and no default value',
        );
    }

    /**
     * @group unary
     *
     * @uses \App\Strings\clean
     * @uses \BackedEnum::tryFrom
     * @uses \constant
     * @uses \is_a (native) Returns whether an object is of this class or has this class as one of its parents.
     * @uses \logger (Laravel) Returns a log driver instance.
     * @uses \sprintf (native) Returns a formatted string.
     */
    public static function makeFromString(string $source)
    {
        $source = \App\Strings\clean($source);

        if ($source === '') {
            return self::makeDefaultValue();
        }

        $result = \is_a(static::class, \BackedEnum::class, true) ? static::tryFrom($source) : null;

        if ($result instanceof static) {
            return $result;
        }

        $enum_fqn = static::class . '::' . Slug::of($source)->toPascalCase();

        if (\defined($enum_fqn)) {
            return \constant($enum_fqn);
        }

        \logger()->error(\sprintf('%s: Invalid slug "%s"', static::class, $source));

        return self::makeDefaultValue();
    }
}
