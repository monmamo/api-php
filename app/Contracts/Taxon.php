<?php

namespace App\Contracts;

interface Taxon extends HasSizeDelta
{
    public static function rarity(): float;
}
