<?php

namespace App\Concerns;

use App\Callables\Concerns\Unary;
use App\Facades\Context;
use App\Facades\Environment;
use App\GeneralAttributes\Gloss;

/**
 * Returns a function that is a pipeline of component functions.
 *
 * Not to be confused with \Illuminate\Pipeline\Pipeline.
 *
 * ❗ Do not add context. see self::value.
 *
 * ❗ Do not define a constructor here.
 *
 * ❗ Do not implement __invoke here. Do it through the appropriate arity trait.
 */
trait PipelineFunctionality
{
    public mixed $transforms;

    /**
     * Method invoked when attempting invoke an inaccessible or undefined method of this class in an object context.
     *
     * Returns a method-calling placeholder.
     *
     * @group magic
     * @group magic-call-signature
     * @group variadic
     *
     * @uses \App\Callables\runObjectMethod
     */
    public function __call(mixed $method, mixed $arguments)
    {
        return $this->extend(
            fn (object $object) => \App\Callables\runObjectMethod($object, $method, $arguments),
        );
    }

    /**
     * Dynamically accesses a property on the underlying object or value. Reads data from inaccessible (protected or private) or non-existing properties.
     *
     * @group accessor
     * @group accessor-by-key
     * @group fluent
     * @group magic
     * @group selective
     * @group unary
     *
     * @uses \App\Concerns\PipelineFunctionality::then
     */
    public function __get(mixed $property)
    {
        return $this->extend(fn (object $object) => $object->$property);
    }

    /**
     * @group binary
     * @group magic
     *
     * @uses \App\Concerns\PipelineFunctionality::extend
     */
    public function __set(mixed $property, mixed $value): void
    {
        $this->extend(
            /**
             * @group trinary
             */
            function (object $object) use ($property, $value): void {
                $object->$property = $value;
            },
        );
    }

    /**
     * @group nonary
     *
     * @uses \App\Concerns\PipelineFunctionality::transforms
     * @uses \App\Dumping\reflect
     * @uses \iterator_to_array (native) Copies the output of an iterator into an array.
     * @uses \method_exists (native) Returns whether the class method exists.
     */
    private function _getTransforms(): array
    {
        return $this->transforms ?? match (true) {
            \method_exists($this, 'transforms') => \iterator_to_array($this->transforms()),
            default => \dd('no transforms defined', ...\App\Dumping\reflect($this))
        };
    }

    /**
     * Handles an exception thrown within this class.
     *
     * @group variadic
     *
     * @uses \App\Callables\BaseCallable::getTransforms
     * @uses \App\Dumping\dumpLabeled
     * @uses \App\Enums\Environments::rescue
     * @uses \App\Facades\Context::yieldContext
     */
    protected function handleException(\Throwable $thrown_exception, array $additional_context = [])
    {
        $dumpable = ['transforms' => $this->getTransforms(), ...$additional_context];

        foreach (Context::yieldContext(name: 'this', item: $this) as $key => $value) {
            $dumpable[$key] = $value;
        }

        foreach (Context::yieldContext(name: 'this', item: $this) as $key => $value) {
            $dumpable[$key] = $value;
        }

        return Environment::rescue(throwable: $thrown_exception, context: $dumpable);
    }

    /**
     * Invoker.
     *
     * 💢 Can't declare this as mixed because it could return null.
     *
     * ❗ Resist the temptation to apply this logic literally. We may extend or modify this method in the future.
     *
     * @group magic
     * @group variadic
     *
     * @uses \App\Callables\run
     * @uses \App\Concerns\PipelineFunctionality::_getTransforms
     * @uses \func_get_args (native) The arguments to this function in a sequential array.
     *
     * @throws \Throwable Any exception thrown out of \App\Callables\run.
     */
    protected function invoke()
    {
        return \App\Callables\run(
            callable: [...$this->_getTransforms()],
            arguments_to_callable: \func_get_args(),
            context_to_dump: \compact('this'),
        );
    }

    /**
     * Compare self::then.
     *
     * @group variadic
     *
     * @uses \App\Callables\BaseCallable::_getTransforms
     * @uses \count (native) Returns the number of items in an array or Countable object.
     * @uses \tap (Laravel) Calls the given Closure with the given value then returns the value.
     */
    public function extend(...$subsequent_callables): object
    {
        if (\count($subsequent_callables) === 0) {
            return $this;
        }

        $pipeline = new #[Gloss('Extension pipeline')] class()
        {
            use PipelineFunctionality;

            /**
             * Invoker.
             *
             * MUST NEVER RETURN AN INSTANCE OF TransformativeInvoker!
             *
             * @implements \App\Contracts\TransformativeInvoker::__invoke
             * @group magic
             * @group variadic
             */
            public function __invoke(mixed $source)
            {
                return $this->invoke($source);
            }
        };
        $pipeline->transforms = \tap(
            [...$this->_getTransforms(), ...$subsequent_callables],
            /**
             * @group unary
             *
             * @uses \assert (native) If enabled, and the given assertion is false, throws an exception.
             * @uses \count (native) Returns the number of items in an array or Countable object.
             *
             * @throws \AssertionError
             */
            static function (array $transforms): void {
                \assert(\count($transforms) > 0);
            },
        );
        return $pipeline;
    }

    /**
     * @group nonary
     *
     * @uses \App\Callables\BaseCallable::getTransforms
     * @uses \count (native) Returns the number of items in an array or Countable object.
     */
    public function isNull(): bool
    {
        return \count($this->_getTransforms()) === 0;
    }
}
