<?php

namespace Canon\Taxons\Types;

use Canon\Taxons\Enums\TaxonType;

trait SizeMorphotype
{
    public static function type(): TaxonType
    {
        return TaxonType::Size;
    }

    public static function typeHtml(): string
    {
        return 'Size Morphotype';
    }

    public static function typeString(): string
    {
        return 'Size Morphotype';
    }
}
