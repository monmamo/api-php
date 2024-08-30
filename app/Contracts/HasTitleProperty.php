<?php

namespace App\Contracts;

/**
 * Interface for returning the title of an entity via a `title` property.
 *
 * Usage:
 * ```
 * return match (true) {
 * ...
 * VALUE instanceof \App\Contracts\HasTitleProperty => VALUE->title,
 * ...
 * };
 * ```
 */
interface HasTitleProperty {}
