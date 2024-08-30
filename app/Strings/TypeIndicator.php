<?php

namespace App\Strings;

use App\Concerns\MultivalueContext;
use App\Contracts\HasLogString;
use App\Enums\ContextGroups;
use App\Methods\ReportFromContext;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;
use Monolog\Formatter\NormalizerFormatter;

/**
 * @see app/Strings/TypeIndicator.md
 *
 * @method \JsonSerializable::jsonSerialize
 */
class TypeIndicator extends \ValueError implements \JsonSerializable, \Stringable, HasLogString
{
    use MultivalueContext {
        context as generateAddedContext;
    }
    use ReportFromContext;

    private ?string $_expectation;

    private ?string $_metatype;

    private ?string $_source_class;

    private ?string $_source_path;

    private string $_string;

    /**
     * 💢 Can't dump in here because \assert constructs the object whether or not the assertion passes.
     *
     * @group magic
     * @group mutator
     * @group trinary
     *
     * @param \Throwable $previous Previous exception used for exception chaining.
     *
     * @uses \App\Strings\TypeIndicator::parse
     * @uses \is_null (native) Returns whether a variable is null.
     * @uses \LogicException::__construct
     * @uses \sprintf (native) Returns a formatted string.
     *
     * @return void
     */
    public function __construct(
        public mixed $value,
        public mixed $expectation = null,
        ?\Throwable $previous = null,
    ) {
        foreach (self::parse($value) as $inner_key => $inner_value) {
            $this->{'_' . $inner_key} = $inner_value;
        }

        $this->_metatype = match (true) {
            $value instanceof Model => 'model',
            $value instanceof Collection => 'collection',
            $value instanceof Relation => 'relation',
            $value instanceof \Illuminate\Support\Stringable => 'stringable',
            $value instanceof \Stringable => 'stringable',
            default => null,
        };

        parent::__construct(
            \sprintf(
                '%svalue of %s type %s%s',
                \is_null($expectation) ? '' : \sprintf('expected %s; received ', $expectation),
                $this->_metatype,
                $this->_string,
                isset($previous) ? '; ' . $previous->getMessage() : '',
            ),
            0,
            $previous,
        );
    }

    /**
     * Returns a representation of this object as a string.
     *
     * @group accessor
     * @group magic
     * @group magic-tostring-signature
     * @group nonary
     */
    public function __toString(): string
    {
        return $this->_string;
    }

    /**
     * Returns the exception's context information.
     *
     * While adding context to every log message can be useful, sometimes a particular exception may have unique context that you would like to include in your logs. By defining a context method on one of your application's custom exceptions, you may specify any data relevant to that exception that should be added to the exception's log entry.
     *
     * @see https://laravel.com/docs/9.x/errors#exception-log-context
     *
     * @implements \App\Contracts\HasContext::context
     * @group nonary
     *
     * @uses \get_class (native) Returns the name of the class of an object.
     * @uses \gettype (native)
     * @uses \is_callable (native) Returns whether a variable can be called as a function.
     * @uses \is_object (native) Returns whether a variable is an object.
     * @uses \is_string (native) Returns whether a variable is a string.
     * @uses \trim (native) Strips whitespace from the beginning and end of a string.
     */
    private function _generateContext(): \Traversable
    {
        yield 'value' => $this->value;
        yield 'type' => \gettype($this->value);
        yield 'value is callable' => \is_callable($this->value); // does not need specific type checking

        if (\is_object($this->value)) {
            yield 'class' => \get_class($this->value);

            if (isset($this->_source_class)) {
                yield 'source class' => $this->_source_class;
                yield 'location' => $this->_source_path;
            }
            yield 'metatype' => $this->_metatype;
        }

        if (\is_string($this->expectation) && \trim($this->expectation) !== '') {
            yield 'expectation' => $this->expectation;
        }

        // if ($this->value instanceof Gloss)
        // yield 'gloss' => $this->value->gloss();

        foreach ($this->generateAddedContext() as $key => $value) {
            yield $key => $value;
        }
    }

    /**
     * Returns any data relevant to that exception that should be added to the exception's log entry.
     *
     * @see https://laravel.com/docs/10.x/errors#exception-log-context
     *
     * @group nonary
     *
     * @uses \App\Strings\TypeIndicator::_generateContext
     */
    public function context(): array
    {
        return [...$this->_generateContext()];
    }

    /**
     * @group nonary
     * @group sugar Consider implementing literally instead of using this method.
     *
     * @uses \App\Strings\TypeIndicator::context
     * @uses \json_encode (native) Returns the JSON representation of a value.
     */
    public function contextAsString(): string
    {
        return \json_encode($this->context());
    }

    /**
     * @group binary
     *
     * @deprecated
     *
     * @uses \get_debug_type (native) Returns the type of a variable, with special handling for objects.
     * @uses \sprintf (native) Returns a formatted string.
     */
    public static function errorMessage(string $expected_class, mixed $value): string
    {
        return \sprintf('expected %s, received %s', $expected_class, \get_debug_type($value));
    }

    /**
     * Converts the object into something that can be serialized into JSON.
     *
     * @implements \JsonSerializable::jsonSerialize
     * @group accessor
     * @group nonary
     * @group reductive
     *
     * @uses \App\Strings\TypeIndicator::context
     *
     * @return mixed Value that can be serialized natively by \json_encode.
     */
    public function jsonSerialize(): mixed
    {
        return $this->context();
    }

    /**
     * @implements \App\Contracts\HasLogString::logString
     * @group nonary
     */
    public function logString(): string
    {
        static $normalizer;
        $normalizer ??= new NormalizerFormatter();

        $result = $this->_string . ': ' . $normalizer($this->value);
        return $result;
    }

    /**
     * @group unary
     *
     * @uses \array_push (native) Pushes one or more elements onto the end of array.
     * @uses \count (native) Returns the number of items in an array or Countable object.
     * @uses \explode (native) Splits a string by string.
     * @uses \get_class (native) Returns the name of the class of an object.
     * @uses \get_debug_type (native) Returns the type name of a variable in a way that is suitable for debugging.
     * @uses \gettype (native)
     * @uses \implode (native) Concatenates elements of an array into a string.
     * @uses \is_object (native)
     */
    public static function parse(mixed $value): \Traversable
    {
        $type_pieces = [\gettype($value)];
        $source_class = null;
        $source_path = null;

        if (\is_object($value)) {
            $value_class = \get_class($value);

            if (\get_debug_type($value) === $value_class) {
                \array_push($type_pieces, 'of class', $value_class);
            } else {
                $pieces = \explode('\0', $value_class);
                $source_class = $pieces[0];
                \array_push(
                    $type_pieces,
                    'of anonymous class',
                    $source_class,
                );

                if (\count($pieces) > 1) {
                    $source_path = $pieces[1];
                    \array_push(
                        $type_pieces,
                        'extending',
                        $source_path,
                    );
                }
            }
        }

        yield 'source_class' => $source_class;
        yield 'source_path' => $source_class;
        yield 'string' => \implode(' ', $type_pieces);
    }

    /**
     * Reports the exception.
     *
     * @see https://laravel.com/docs/9.x/errors#renderable-exceptions
     *
     * @group nonary
     *
     * @uses \App\Dumping\dump
     * @uses \Exception::getPrevious
     * @uses \is_object (native) Returns whether a variable is an object.
     *
     * @return null|bool
     */
    public function report()
    {
        \App\Dumping\dump($this->value);  // 🔒

        //   ContextGroups::InvalidValue->log(['exception'=>$this]);
        // if (\is_object($this->getPrevious())) { throw $this->getPrevious(); }
    }
}
