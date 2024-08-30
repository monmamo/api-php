<?php

namespace App\Options;

use App\Contracts\HasContext;
use App\Contracts\HasSettableContext;
use App\Contracts\Optional;
use App\Stringable;

/**
 *
 *
 * @template T
 */
trait ContextualLazyOption
{
    use InnerOption;

    /**
     *
     */
    private array $_arguments_to_generator = [];

    /**
     *
     */
    private array $_items;

    /**
     *
     */
    private ?Optional $_option;

    /**
     * Constructor.
     *
     * @group magic
     * @group mutator
     * @group variadic
     *
     * @return void
     */
    public function __construct(
    ) {}

    /**
     * The generator should never return an option.
     *
     *
     * @implements \App\Options\ContextualLazyOption::argumentsToGenerator
     * @group variadic
     */
    abstract protected function argumentsToGenerator(): \Traversable;

    /**
     * The generator should never return an option.
     *
     *
     * @implements \App\Options\ContextualLazyOption::generator
     * @group variadic
     */
    abstract protected function generator(...$arguments): \Generator;

    /**
     *
     * @implements \App\Options\LazyOption::makeOption
     * @group nonary
     * @group resolving
     *
     * @uses \App\Dumping\dump
     * @uses \App\Options\wrap
     * @uses \assert (native) If enabled, and the given assertion is false, throws an exception.
     * @uses \iterator_to_array (native) Copies the output of an iterator into an array.
     *
     * @throws \AssertionError
     */
    protected function makeOption(): Optional
    {
        $generator = null;

        $this->_arguments_to_generator ??= \iterator_to_array($this->argumentsToGenerator());

        try {
            $generator = $this->generator(...$this->_arguments_to_generator);
        } catch (\Throwable $exception) {
            \App\Dumping\dump($this); // 🔒
            throw $exception;
        }

        try {
            \assert(
                $generator instanceof \Generator,
            );

            $this->_items = [];

            foreach ($generator as $context_key => $context_value) {
                $this->_items[$context_key] = $context_value;
            }

            $result = $generator->getReturn();

            if ($result instanceof HasSettableContext) {
                $context = [];

                foreach ($this->_arguments_to_generator as $index => $argument) {
                    $context[Stringable::UNDERSCORE . $index] = $argument;

                    if ($context instanceof HasContext) {
                        foreach ($context->context() as $key => $value) {
                            $context[Stringable::UNDERSCORE . $index . ':' . $key] = $value;
                        }
                    }
                }

                $result->setContext($context);
            }

            return \App\Options\wrap($result);
        } catch (\Throwable $exception) {
            \App\Dumping\dump($this, $generator); // 🔒
            throw $exception;
        }
    }

    /**
     * @implements \App\Options\InnerOption::option
     * @group nonary
     * @group resolving
     */
    protected function option(): Optional
    {
        return $this->_option ??= $this->makeOption();
    }

    /**
     * Yields the object's context information.
     *
     *
     * @implements \App\Contracts\HasContext::context
     * @group multivalue
     * @group nonary
     *
     * @uses \ArrayIterator::__construct
     */
    public function context(): \Traversable
    {
        $this->option();
        return new \ArrayIterator($this->_items);
    }

    /**
     * Resolves the lazy value.
     *
     *
     * @implements \App\Contracts\Lazy::resolve
     * @group nonary
     */
    public function resolve(): Optional
    {
        return $this->option();
    }
}
