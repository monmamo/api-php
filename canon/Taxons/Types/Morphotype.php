<?php

namespace Canon\Taxons\Types;

use Canon\Taxons\Enums\TaxonType;

trait Morphotype
{
    public static function type(): TaxonType
    {
        return TaxonType::OtherMorphotype;
    }

    public static function typeHtml(): string
    {
        return 'Morphotype';
    }

    public static function typeString(): string
    {
        return 'Morphotype';
    }
}
