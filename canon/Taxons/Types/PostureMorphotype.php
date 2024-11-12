<?php

namespace Canon\Taxons\Types;

use Canon\Taxons\Enums\TaxonType;

trait PostureMorphotype
{
    public static function type(): TaxonType
    {
        return TaxonType::PostureMorphotype;
    }

    public static function typeHtml(): string
    {
        return 'Posture Morphotype';
    }

    public static function typeString(): string
    {
        return 'Posture Morphotype';
    }
}
