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

#[Gloss('Powers of sound and vibration.')]
#[NeuterName('Sonon')]
#[MasculineAnthropeName('Sonander')]
#[MasculineMonsterName('Sonor')]
#[FeminineAnthropeName('Sonquin')]
#[FeminineMonsterName('Soness')]
#[Rarity('powers')]
class Sonos extends BaseTaxon
{
    use Power;
}
