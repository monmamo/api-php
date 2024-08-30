<?php

namespace App\Contracts;

use App\Strings\InlineText;

/**
 * Interface for returning the title of an entity via a `title` method.
 *
 * Usage:
 * ```
 * return match (true) {
 * ...
 * VALUE instanceof \App\Contracts\HasTitleMethod => VALUE->title(),
 * ...
 * };
 * ```
 */
interface HasTitleMethod
{
    /**
     * Returns the title of the entity packaged in a Title object.
     *
     * @implements \App\Contracts\HasTitleMethod::title
     * @group nonary
     * @group accessor
     */
    public function title(): InlineText;
}
