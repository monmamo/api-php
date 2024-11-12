<?php

namespace Canon\Taxons\Types;

use Canon\Taxons\Enums\TaxonType;

trait SpinalMorphotype
{
    public static function type(): TaxonType
    {
        return TaxonType::SpinalMorphotype;
    }

    public static function typeHtml(): string
    {
        return 'Spinal Morphotype';
    }

    public static function typeString(): string
    {
        return 'Spinal Morphotype';
    }
}
