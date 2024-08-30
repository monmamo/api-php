<?php

namespace App\Methods\MagicToString;

use App\Facades\Environment;

/**
 * usage:
 * use \App\Methods\MagicToString\ToStringFromRenderHtml;
 */
trait ToStringFromRenderHtml
{
    /**
     * Returns a representation of this object as a string.
     *
     * Since PHP won't let you throw an exception from __toString,
     * this just writes the exception to the log and returns an empty string.
     *
     * @group nonary
     * @group magic-tostring-signature
     * @group reductive
     * @group magic
     *
     * @uses \App\Html\HtmlRenderable::renderHtml
     * @uses \App\Enums\Environments::rescue
     */
    public function __toString(): string
    {
        try {
            return $this->renderHtml();
        } catch (\Throwable $exception) {
            return Environment::rescue(throwable: $exception);
        }
    }
}
