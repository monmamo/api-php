<?php

namespace Canon\Taxons\Types;

use Canon\Taxons\Enums\TaxonType;

trait Species
{
    abstract public static function genus(): string;

    public static function type(): TaxonType
    {
        return TaxonType::Species;
    }

    public static function typeHtml(): string
    {
        return \sprintf(
            'Species of <a href="/taxons/%1>%1</a>',
            static::genus(),
            static::genus(),
        );
    }

    public static function typeString(): string
    {
        return 'Species of ' . static::genus();
    }
}
