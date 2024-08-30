<?php

namespace App\Methods\ToHtml;

trait TitleToHtml
{
    /**
     * Returns content as a string of HTML.
     *
     * @implements \Illuminate\Contracts\Support\Htmlable::toHtml (which DOES NOT declare a return type)
     * @group nonary
     *
     * @uses \App\Strings\titleUnwrapped
     *
     * @return string
     */
    public function toHtml()
    {
        return \App\Strings\titleUnwrapped($this);
    }
}
