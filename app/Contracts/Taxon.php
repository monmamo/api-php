<?php

namespace App\Contracts;

use Canon\Taxons\Enums\TaxonType;

interface Taxon extends HasSizeDelta
{
    /**
     * @group nonary
     */
    public static function rarity(): float;

    /**
     * @group nonary
     */
    public static function type(): TaxonType;

    /**
     * @group nonary
     */
    public static function typeHtml(): string;

    /**
     * @group nonary
     */
    public static function typeString(): string;
}
