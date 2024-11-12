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
use Canon\Taxons\Types\Phylum;

// Make no assumption about size.

#[Gloss('Rodent-forms.')]
#[NeuterName('Rodenton')]
#[MasculineAnthropeName('Rodentander')]
#[MasculineMonsterName('Rodentor')]
#[FeminineAnthropeName('Rodentquin')]
#[FeminineMonsterName('Rodentess')]
#[Rarity('phyla')]
class Rodentos extends BaseTaxon
{
    use Phylum;
}
