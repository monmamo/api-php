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
// image tags:: TODO

// Rarity:: [[Canos]] x 30
// size delta:: 0.5

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
        return TODO;
    }

    public static function sizeDelta(): float
    {
        return 0;
    }
}

// rarity:
