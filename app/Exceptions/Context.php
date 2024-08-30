<?php

namespace App\Exceptions;

use App\Contracts\HasContext;
use App\Strings\TypeIndicator;
use Symfony\Component\VarDumper\VarDumper;

/**
 *
 */
class Context extends \Exception implements HasContext
{
    /**
     *
     */
    private array $_dumpables;

    /**
     * Constructor.
     *
     *
     * @group magic
     * @group mutator
     * @group variadic
     *
     * @uses \App\Strings\TypeIndicator::__construct
     * @uses \Exception::__construct
     * @uses \Exception::getCode
     * @uses \Exception::getMessage
     * @uses \is_string (native) Returns whether a variable is a string.
     * @uses \LogicException::__construct
     */
    public function __construct(mixed $previous, ...$dumpables)
    {
        $this->_dumpables = $dumpables;

        $previous = match (true) {
            $previous instanceof \Throwable => $previous,
            \is_string($previous) => new \LogicException($previous),
            default => new TypeIndicator($previous)
        };

        parent::__construct($previous->getMessage(), $previous->getCode(), $previous);
    }

    /**
     *
     * @group unary
     *
     * @uses \header (native) Sends a raw HTTP header.
     * @uses \headers_sent (native) Checks if or where headers have been sent.
     * @uses \in_array (native) Returns whether a value exists in an array.
     */
    public function andExit(): never
    {
        if (!\in_array(\PHP_SAPI, ['cli', 'phpdbg'], true) && !\headers_sent()) {
            \header('HTTP/1.1 500 Internal Server Error');
        }
        exit(1);
    }

    /**
     *
     * @group unary
     */
    public function andThrow(\Throwable $exception): void
    {
        throw $exception;
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
        return new \ArrayIterator($this->_dumpables);
    }

    /**
     *
     * @group nonary
     *
     * @uses \App\Dumping\inDumpingContext
     * @uses \App\Facades\Context::yieldContext
     * @uses \Symfony\Component\VarDumper\VarDumper::dump
     */
    public function report(): void
    {
        if (\App\Dumping\inDumpingContext()) {
            foreach ($this->_dumpables as $index => $source) {
                foreach (\App\Facades\Context::yieldContext(name: $index, item: $source) as $label => $value) {
                    VarDumper::dump($value, $label);
                }
            }
        }
    }
}
