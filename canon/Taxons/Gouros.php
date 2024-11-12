<?php

namespace Canon\Taxons;

use App\GeneralAttributes\Gloss;
use Canon\Taxons\Attributes\FeminineAnthropeName;
use Canon\Taxons\Attributes\FeminineMonsterName;
use Canon\Taxons\Attributes\MasculineAnthropeName;
use Canon\Taxons\Attributes\MasculineMonsterName;
use Canon\Taxons\Attributes\NeuterName;
use Canon\Taxons\Attributes\Rarity;
use Canon\Taxons\Types\BaseTaxon;
use Canon\Taxons\Types\Power;

// color:: Yellow
// Assets
// Gives the ability to induce nightmares and a persistent sense of danger in others.
// Flaws
// Creates problems with integrity.
// The beholder may secretly enjoy causing messes for other people.

#[Gloss('Grotesqueness, ugliness, fear, surprise/shock.')]
#[NeuterName('Gouron')]
#[MasculineAnthropeName('Gourander')]
#[MasculineMonsterName('Gouror')]
#[FeminineAnthropeName('Gourquin')]
#[FeminineMonsterName('Gouress')]
#[Rarity('powers')]
class Gouros extends BaseTaxon
{
    use Power;
}
