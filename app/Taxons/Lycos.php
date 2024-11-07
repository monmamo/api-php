<?php

namespace App\Taxons;

use App\Contracts\Taxon;
use App\GeneralAttributes\Gloss;
use App\Taxons\Attributes\FeminineAnthropeName;
use App\Taxons\Attributes\FeminineMonsterName;
use App\Taxons\Attributes\MasculineAnthropeName;
use App\Taxons\Attributes\MasculineMonsterName;
use App\Taxons\Attributes\NeuterName;

// [[Species]] of genus [[Canos]] with [[Erectos]] form.

#[MasculineMonsterName('Lycor')]
#[FeminineAnthropeName('Lyx')]

// image generation prompt:: wolflike, wolfform

#[Gloss('Erect wolf-forms (compare [[Lupos]]).')]
#[NeuterName('Lycon')]
#[MasculineAnthropeName('Lycander')]
#[MasculineMonsterName('Lycor')]
#[FeminineAnthropeName('Lycquin')]
#[FeminineMonsterName('Lycess')]
class Lycos implements Taxon
{
    public static function rarity(): float
    {
        return Canos::rarity() * 30; //TODO
    }

    public static function sizeDelta(): float
    {
        return 0.5;
    }
}

// rarity:
