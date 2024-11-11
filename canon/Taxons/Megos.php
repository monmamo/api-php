<?php

namespace Canon\Taxons;

use App\GeneralAttributes\Gloss;
use Canon\Taxons\Attributes\FeminineAnthropeName;
use Canon\Taxons\Attributes\FeminineMonsterName;
use Canon\Taxons\Attributes\MasculineAnthropeName;
use Canon\Taxons\Attributes\MasculineMonsterName;
use Canon\Taxons\Attributes\NeuterName;

// [[size morphotype]]
#[NeuterName('Megon')]
#[MasculineAnthropeName('Megander')]
#[MasculineMonsterName('Megor')]
#[FeminineAnthropeName('Megquin')]
#[FeminineMonsterName('Megess')]
#[Gloss('Large forms.')]
#[NeuterName('Megon')]
#[MasculineAnthropeName('Megander')]
#[MasculineMonsterName('Megor')]
#[FeminineAnthropeName('Megquin')]
#[FeminineMonsterName('Megess')]
class Megos extends BaseTaxon
{
    public static function rarity(): float
    {
        return 750;
    }

    public static function sizeDelta(): float
    {
        return 0.5;
    }
}
