<?php

namespace App\Taxons;

use App\Contracts\Taxon;
use App\Taxons\Attributes\FeminineAnthropeName;
use App\Taxons\Attributes\FeminineMonsterName;
use App\Taxons\Attributes\MasculineAnthropeName;
use App\Taxons\Attributes\MasculineMonsterName;
use App\Taxons\Attributes\NeuterName;

#[NeuterName('Emphuton')]
#[MasculineAnthropeName('Emphutander')]
#[MasculineMonsterName('Emphutor')]
#[FeminineAnthropeName('Emphutquin')]
#[FeminineMonsterName('Emphutess')]
class Emphutos implements Taxon
{
    public static function rarity(): float
    {
        return 0; //TODO
    }

    public static function sizeDelta(): float
    {
        return 0;
    }
}

// genus:: Imp.

// image generation prompt:: [[needs representative image]]
// supertaxons::  [[Hominos]] [[Faeos]]

// rarity: {{calc: ((uuUwRY2_d))}} x [[Faeos]]
// size delta: ((qsC8F8tTR)) + [[Faeos]]
