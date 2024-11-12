<?php

namespace Canon\Taxons\Types;

use Canon\Taxons\Enums\TaxonType;

trait BodyCoveringMorphotype
{
    public static function type(): TaxonType
    {
        return TaxonType::BodyCoveringMorphotype;
    }

    public static function typeHtml(): string
    {
        return 'Body Covering Morphotype';
    }

    public static function typeString(): string
    {
        return 'Body Covering Morphotype';
    }
}
