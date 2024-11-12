<?php

namespace Canon\Taxons;

use App\GeneralAttributes\Gloss;
use Canon\Taxons\Attributes\FeminineAnthropeName;
use Canon\Taxons\Attributes\FeminineMonsterName;
use Canon\Taxons\Attributes\MasculineAnthropeName;
use Canon\Taxons\Attributes\MasculineMonsterName;
use Canon\Taxons\Attributes\NeuterName;
use Canon\Taxons\Attributes\Rarity;
use Canon\Taxons\Attributes\SizeDelta;
use Canon\Taxons\Types\BaseTaxon;
use Canon\Taxons\Types\Morphotype;

#[Gloss('Dragon-forms.')]
#[NeuterName('Dracon')]
#[MasculineAnthropeName('Dracander')]
#[MasculineMonsterName('Dracor')]
#[FeminineAnthropeName('Dracquin')]
#[FeminineMonsterName('Drax')]
#[Rarity(Erectos::class, 5e5)]
#[SizeDelta(Erectos::class, 1)]
class Dracos extends BaseTaxon
{
    use Morphotype;
}
