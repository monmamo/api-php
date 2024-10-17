<?php

namespace App\Taxons;

use App\Contracts\Taxon;
use App\GeneralAttributes\Gloss;
use App\Taxons\Attributes\FeminineAnthropeName;
use App\Taxons\Attributes\FeminineMonsterName;
use App\Taxons\Attributes\MasculineAnthropeName;
use App\Taxons\Attributes\MasculineMonsterName;
use App\Taxons\Attributes\NeuterName;

#[Gloss('Mouse-forms, small rodents.')]
#[NeuterName('Muson')]
#[MasculineAnthropeName('Musander')]
#[MasculineMonsterName('Musor')]
#[FeminineAnthropeName('Musquin')]
#[FeminineMonsterName('Musess')]
#[NeuterName('Muson')]
#[MasculineAnthropeName('Musander')]
#[MasculineMonsterName('Musor')]
#[FeminineAnthropeName('Musquin')]
#[FeminineMonsterName('Musess')]
class Musos implements Taxon
{
    public static function rarity(): float
    {
        return 0; //TODO
    }

    public static function sizeDelta(): float
    {
        return 0; //TODO
    }
}

// [[genus]] of phylum [[Rodentos]] with [[Pygmys]].

// image generation prompt:: mouselike, mouseform, small rodent
// image tags:: mouse

// Rarity:: [[Rodentos]] x ((Dl7wZZs2n))
// size delta:: [[Rodentos]] + {{calc: ((pMJ5cJmbG)) - 0.2}}
