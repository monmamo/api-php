<?php

namespace App\Concerns;

use App\Methods\ReportFromContext;

/**
 * See docs/resolution-exception.md for usage template.
 */
trait SingleValueContext
{
    use ReportFromContext;

    private mixed $_value;

    /**
     * Constructor.
     *
     * @group magic
     * @group mutator
     * @group variadic
     *
     * @param mixed $value Internal value.
     * @param array $additional_arguments
     *
     * @uses \__ (Laravel) Translates the message given to it.
     * @uses \count (native) Returns the number of items in an array or Countable object.
     * @uses parent::__construct
     *
     * @return void
     */
    public function __construct(mixed $value, ...$additional_arguments)
    {
        $this->_value = $value;

        if (\count($additional_arguments) === 0) {
            $additional_arguments[] = \__('invalid value') . ':' . ' ' . \get_debug_type($value);
        }
        parent::__construct(...$additional_arguments);
    }

    /**
     * Returns the exception's context information.
     *
     * While adding context to every log message can be useful, sometimes a particular exception may have unique context that you would like to include in your logs. By defining a context method on one of your application's custom exceptions, you may specify any data relevant to that exception that should be added to the exception's log entry.
     *
     * ❗ Laravel doesn't actually do anything with this. It's just a convention defined by Laravel. We have to implement something to actually use this context.
     *
     * @see https://laravel.com/docs/9.x/errors#exception-log-context
     *
     * @implements \App\Contracts\HasContext::context
     * @group multivalue
     * @group nonary
     *
     * @uses \Exception::getMessage
     */
    public function context(): \Traversable
    {
        if ($this instanceof \Throwable) {
            yield 'message' => $this->getMessage();
        }
        yield 'value' => $this->_value;
    }
}
