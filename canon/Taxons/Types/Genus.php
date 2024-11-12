<?php

namespace Canon\Taxons\Types;

use Canon\Taxons\Enums\TaxonType;

trait Genus
{
    abstract public static function phylum(): string;

    public static function type(): TaxonType
    {
        return TaxonType::Genus;
    }

    public static function typeHtml(): string
    {
        return \sprintf(
            'Genus of <a href="/taxons/%1>%1</a>',
            static::phylum(),
            static::phylum(),
        );
    }

    public static function typeString(): string
    {
        return 'Genus of ' . static::genus();
    }
}
