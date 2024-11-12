<?php

namespace Canon\Taxons\Types;

use Canon\Taxons\Enums\TaxonType;

trait Phylum
{
    public static function type(): TaxonType
    {
        return TaxonType::Phylum;
    }

    public static function typeHtml(): string
    {
        return 'Phylum';
    }

    public static function typeString(): string
    {
        return 'Phylum';
    }
}
