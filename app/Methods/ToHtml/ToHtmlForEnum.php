<?php

namespace App\Methods\ToHtml;

trait ToHtmlForEnum
{
    /**
     * Returns content as a string of HTML.
     *
     * @implements \Illuminate\Contracts\Support\Htmlable::toHtml (which DOES NOT declare a return type)
     * @group nonary
     *
     * @return string
     */
    public function toHtml()
    {
        return $this->value;
    }
}
