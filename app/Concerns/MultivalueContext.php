<?php

namespace App\Concerns;

use Illuminate\Support\Facades\Log;

/**
 * Don't use \App\Methods\ReportFromContext. Let users use it themselves.
 */
trait MultivalueContext
{
    private \App\MultivalueContext $_context;

    /**
     * @group nonary
     *
     * @uses \App\MultivalueContext::__construct
     */
    private function _initializeContext(): void
    {
        $this->_context ??= new \App\MultivalueContext();
    }

    /**
     * Returns a boolean indicating whether an offset exists or or represents a retrievable value in this collection.
     *
     * @group reductive
     * @group unary
     *
     * @param mixed $offset Offset to check.
     *
     * @return boolean True if the offset exists in this collection; false if it doesn't.
     */
    protected function contextPointExists(mixed $offset): bool
    {
        return isset($this->_context) && isset($this->_context[$offset]);
    }

    /**
     * Returns the value at the offset, or throws an appropriate exception.
     *
     * Do not throw missing-element exceptions from here.
     *
     * 💢 Can't declare this as mixed because it could return null.
     *
     * @group binary
     * @group resolving
     * @group selective
     *
     * @param mixed $offset Offset to retrieve.
     */
    protected function getContextPoint(mixed $offset)
    {
        if (!isset($this->_context)) {
            return;
        }
        return $this->_context[$offset];
    }

    /**
     * @group mutator
     * @group unary
     *
     * @param mixed $offset Offset to unset.
     */
    protected function unsetContextPoint(mixed $offset): void
    {
        if (!isset($this->_context)) {
            return;
        }
        unset($this->_context[$offset]);
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
     * @group nonary
     * @group multivalue
     * @group associative
     */
    public function context(): \Traversable
    {
        return $this->_context ?? new \EmptyIterator();
    }

    /**
     * @group nonary
     *
     * @uses \App\Dumping\dumpLabeled
     * @uses \Illuminate\Support\Enumerable::toArray
     */
    public function dumpContext(): void
    {
        \App\Dumping\dumpLabeled($this->_context->toArray());
    }

    /**
     * @group unary
     *
     * @uses \is_null (native) Returns whether a variable is null.
     * @uses \Illuminate\Support\Facades\Log::info
     * @uses \Illuminate\Support\Enumerable::toArray
     */
    public function logContext(?string $message = null): void
    {
        if (!\is_null($message)) {
            Log::info($message, $this->_context->toArray());
        }
    }

    /**
     * @implements \App\Contracts\HasSettableContext::setContext
     * @group mutator
     * @group unary
     * @group fluent
     *
     * @uses \App\MultivalueContext::__construct
     * @uses \App\Concerns\MultivalueContext::getMessage
     */
    public function setContext(mixed $context): self
    {
        $this->_context = new \App\MultivalueContext($context);

        if ($this instanceof \Throwable) {
            $this->_context['message'] = $this->getMessage();
        }
        return $this;
    }

    /**
     * Sets the corresponding data value at the offset.
     *
     * @implements \App\Contracts\HasSettableContext::setContextPoint
     * @group binary
     * @group mutator
     * @group fluent
     *
     * @param mixed $offset Offset to set.
     * @param mixed $value New value of the context point.
     *
     * @uses \App\Concerns\MultivalueContext::_initializeContext
     */
    public function setContextPoint(mixed $offset, mixed $value): self
    {
        $this->_initializeContext();
        $this->_context[$offset] = $value;
        return $this;
    }

    /**
     * Sets the corresponding data value at the offset.
     *
     * @group binary
     * @group mutator
     *
     * @param mixed $offset Offset to set.
     * @param mixed $value New value of the context point.
     *
     * @uses \App\Concerns\MultivalueContext::_initializeContext
     */
    public function setInternalContextPoint(mixed $offset, mixed $value): void
    {
        $this->_initializeContext();
        $class_array = $this->_context[self::class] ?? [];
        $class_array[$offset] = $value;
        $this->_context[self::class] = $class_array;
    }
}
