<?php

namespace Canon\Taxons\Types;

use Canon\Taxons\Enums\TaxonType;

trait Power
{
    public static function type(): TaxonType
    {
        return TaxonType::Power;
    }

    public static function typeHtml(): string
    {
        return 'Power';
    }

    public static function typeString(): string
    {
        return 'Power';
    }
}
