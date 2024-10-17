<?php

namespace App\Taxons;

use App\Contracts\Taxon;
use App\Taxons\Attributes\FeminineAnthropeName;
use App\Taxons\Attributes\FeminineMonsterName;
use App\Taxons\Attributes\MasculineAnthropeName;
use App\Taxons\Attributes\MasculineMonsterName;
use App\Taxons\Attributes\NeuterName;

// [[essential power]]
// Grotesqueness, ugliness, fear, surprise/shock.

// color:: Yellow
// Rarity:: 1000
// Assets
// Gives the ability to induce nightmares and a persistent sense of danger in others.
// Flaws
// Creates problems with integrity.
// The beholder may secretly enjoy causing messes for other people.

#[NeuterName('Gouron')]
#[MasculineAnthropeName('Gourander')]
#[MasculineMonsterName('Gouror')]
#[FeminineAnthropeName('Gourquin')]
#[FeminineMonsterName('Gouress')]
class Gouros implements Taxon
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
