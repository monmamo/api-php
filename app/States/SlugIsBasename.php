<?php

namespace App\States;

use App\Enums\Sections;
use App\Slug;

/**
 *
 */
trait SlugIsBasename
{
    /**
     *
     */
    private Sections $_enum;

    /**
     * Returns the section enumeration for this object.
     *
     *
     * @group nonary
     *
     * @uses \App\Enums\Sections::make
     * @uses \class_basename (Laravel) Returns the class basename of the given object or class.
     */
    final public function enum(): Sections
    {
        return $this->_enum ??= Sections::make(\class_basename(static::class));
    }

    /**
     *
     * @group nonary
     *
     * @uses \App\Slug::forClassBasename
     */
    public static function slug(): Slug
    {
        return Slug::forClassBasename(static::class);
    }
}
