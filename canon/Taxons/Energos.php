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

// Prefers: Capacitor
// Color: yellow

// yellow, electric, electricmonster, energymonster
// ,Calliope ,"Migal Tigerson , Marcy Meffitson
// https://huggingface.co/datasets/monmamo/energos/tree/main
#[Gloss('Powers of energy and electricity.')]
#[NeuterName('Energon')]
#[MasculineAnthropeName('Energander')]
#[MasculineMonsterName('Energor')]
#[FeminineAnthropeName('Energquin')]
#[FeminineMonsterName('Energess')]
#[Rarity('powers')]
class Energos extends BaseTaxon
{
    use Power;
}
