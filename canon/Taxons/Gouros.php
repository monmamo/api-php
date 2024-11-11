<?php

namespace Canon\Taxons;

use Canon\Taxons\Attributes\FeminineAnthropeName;
use Canon\Taxons\Attributes\FeminineMonsterName;
use Canon\Taxons\Attributes\MasculineAnthropeName;
use Canon\Taxons\Attributes\MasculineMonsterName;
use Canon\Taxons\Attributes\NeuterName;

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
class Gouros extends BaseTaxon
{
    public static function rarity(): float
    {
        return 0; //TODO
    }
}
