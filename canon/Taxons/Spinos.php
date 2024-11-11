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

#[Gloss('Spinal morphotype:: Sharp horns protruding from the spine.')]
#[NeuterName('Spinon')]
#[MasculineAnthropeName('Spinander')]
#[MasculineMonsterName('Spinor')]
#[FeminineAnthropeName('Spinquin')]
#[FeminineMonsterName('Spiness')]
#[Rarity(200000)]
#[SizeDelta(0.3)]
class Spinos extends BaseTaxon
{
    public static function rarity(): float
    {
        return 0; //TODO
    }
}
