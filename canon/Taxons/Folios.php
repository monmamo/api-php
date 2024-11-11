<?php

namespace Canon\Taxons;

use App\GeneralAttributes\Gloss;
use Canon\Taxons\Attributes\FeminineAnthropeName;
use Canon\Taxons\Attributes\FeminineMonsterName;
use Canon\Taxons\Attributes\MasculineAnthropeName;
use Canon\Taxons\Attributes\MasculineMonsterName;
use Canon\Taxons\Attributes\NeuterName;

// color:: green

#[Gloss('Grasses, leaves and simple plants.')]
#[NeuterName('Folion')]
#[MasculineAnthropeName('Foliander')]
#[MasculineMonsterName('Folior')]
#[FeminineAnthropeName('Foliquin')]
#[FeminineMonsterName('Foliess')]
class Folios extends BaseTaxon
{
    public static function rarity(): float
    {
        return 200000;
    }
}
