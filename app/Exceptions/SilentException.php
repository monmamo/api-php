<?php

namespace App\Exceptions;

/**
 * An exception to throw when infinite recursion is detected.
 *
 * @see docs/groups/nonrecursion.md
 *
 *
 * @extends \Exception
 * @extends \LogicException
 * @implements \Throwable
 */
final class SilentException extends \LogicException {}
