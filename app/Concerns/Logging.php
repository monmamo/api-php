<?php

namespace App\Concerns;

use App\Contracts\HasContext;
use App\Methods\GenericCall;
use Illuminate\Support\Facades\Log;

/**
 * ❗ Do not include GenericCall.
 * ❗ Do not include a default __invoke.
 */
trait Logging
{
    use Disablable;
    use GenericCall;
    use MultivalueContext;

    private string $_message;

    private $_severity;

    /**
     * @group nonary
     * @group multivalue
     * @group associative
     */
    private function _canonicalSeverities(): \Traversable
    {
        yield 'Catastrophe' => 'critical';
        yield 'Debug' => 'debug';
        yield 'Emergency' => 'emergency';
        yield 'Error' => 'error';
        yield 'Info' => 'info';
        yield 'Notice' => 'notice';
        yield 'Warning' => 'warning';
    }

    /**
     * @group unary
     *
     * @uses \App\Contracts\HasContext::setContext
     * @uses \App\MultivalueContext::setContext
     * @uses \Stringable::__toString
     * @uses \is_string (native) Returns whether a variable is a string.
     */
    protected function applyArgument(mixed $argument): void
    {
        $this->enableOrDisable($argument);

        match (true) {
            \is_string($argument) => $this->_message = $argument,
            $argument instanceof \Stringable => $this->_message = (string) $argument,
            $argument instanceof HasContext => $this->setContext($argument),
            $argument instanceof \App\MultivalueContext => $this->setContext($argument),
            default => null // Ignore any unhandled argument.
        };
    }

    /**
     * @group nonary
     *
     * @uses \App\Concerns\Logging::_canonicalSeverities
     */
    protected function generateSuffixMethods(): \Traversable
    {
        foreach ($this->_canonicalSeverities() as $name_slug => $severity_slug) {
            yield $name_slug => function (callable $inner_method, $arguments) use ($severity_slug): void {
                // CAN'T DO THIS BECAUSE Laravel enters a recursion loop?!?!?!
                $this->_severity = $severity_slug;
                $inner_method();
            };
        }
    }

    /**
     * @group nonary
     */
    public function glow(): void
    {
        //glow($this->_message, $this->_severity, [...$this->context()]);
    }

    /**
     * @group nonary
     *
     * @uses \Illuminate\Log\Logger::critical
     * @uses \Illuminate\Log\Logger::debug
     * @uses \Illuminate\Log\Logger::emergency
     * @uses \Illuminate\Log\Logger::error
     * @uses \Illuminate\Log\Logger::info
     * @uses \Illuminate\Log\Logger::notice
     * @uses \Illuminate\Log\Logger::warning
     * @uses \App\Concerns\MultivalueContext::context
     */
    public function log(): void
    {
        Log::{$this->_severity}($this->_message, [...$this->context()]);
    }
}
