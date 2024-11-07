<?php

namespace App\Taxons;

use App\Contracts\Taxon;
use App\GeneralAttributes\Gloss;
use App\Taxons\Attributes\FeminineAnthropeName;
use App\Taxons\Attributes\FeminineMonsterName;
use App\Taxons\Attributes\MasculineAnthropeName;
use App\Taxons\Attributes\MasculineMonsterName;
use App\Taxons\Attributes\NeuterName;

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
class Megos implements Taxon
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
