<?php

namespace App\Exceptions;

use Spatie\Ignition\Contracts\BaseSolution;
use Spatie\Ignition\Contracts\ProvidesSolution;
use Spatie\Ignition\Contracts\RunnableSolution;
use Spatie\Ignition\Contracts\Solution;

/**
 * An exception indicating that a method was not implemented.
 *
 * @extends \BadMethodCallException
 * @extends \Exception
 * @extends \LogicException
 * @implements \Throwable
 */
final class InvalidEmailAddressException extends \LogicException implements ProvidesSolution
{
    /**
     * Constructor.
     *
     * @group magic
     * @group mutator
     *
     * @uses \filled (Laravel) Returns whether the value given is not null or an empty value.
     * @uses \LogicException::__construct
     *
     * @return void
     */
    public function __construct(mixed $message = null, $address = '', $code = 0, ?\Throwable $previous = null)
    {
        parent::__construct(
            match (true) {
                \filled($message) => $message,
                \filled($address) => "given email address '{$address}' is not a valid email address.",
                default => 'invalid email address'
            },
            $code,
            $previous,
        );
    }

    /**
     * @group nonary
     */
    public function getSolution(): Solution
    {
        return new class('Check the dumped variables.') extends BaseSolution {}; // RunnableSolution
    }
}
