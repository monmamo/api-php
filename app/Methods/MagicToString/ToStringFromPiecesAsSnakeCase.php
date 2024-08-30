<?php

namespace App\Methods\MagicToString;

use App\Facades\Environment;
use App\Generic\SnakeCaseSlug;

/**
 * usage:
 * use \App\Methods\MagicToString\ToStringFromPiecesAsSnakeCase;
 */
trait ToStringFromPiecesAsSnakeCase
{
    /**
     * Returns a representation of this object as a string.
     *
     * Since PHP won't let you throw an exception from __toString,
     * this just writes the exception to the log and returns an empty string.
     *
     * @group magic
     * @group nonary
     * @group reductive
     * @group magic-tostring-signature
     * @group throwless
     *
     * @uses \App\Enums\Environments::rescue
     * @uses self::asPieces
     */
    public function __toString(): string
    {
        try {
            return (string) new SnakeCaseSlug(...$this->asPieces());
        } catch (\Throwable $exception) {
            return Environment::rescue(throwable: $exception);
        }
    }
}
