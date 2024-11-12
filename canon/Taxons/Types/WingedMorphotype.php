<?php

namespace Canon\Taxons\Types;

use Canon\Taxons\Enums\TaxonType;

trait WingedMorphotype
{
    public static function type(): TaxonType
    {
        return TaxonType::WingedMorphotype;
    }

    public static function typeHtml(): string
    {
        return 'Winged Morphotype';
    }

    public static function typeString(): string
    {
        return 'Winged Morphotype';
    }
}
