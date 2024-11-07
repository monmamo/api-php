<?php

namespace App\Taxons;

use App\Contracts\Taxon;
use App\Taxons\Attributes\FeminineAnthropeName;
use App\Taxons\Attributes\FeminineMonsterName;
use App\Taxons\Attributes\MasculineAnthropeName;
use App\Taxons\Attributes\MasculineMonsterName;
use App\Taxons\Attributes\NeuterName;

// genus:: Deer-forms.
// supertaxons:: [[Ungulos]]
// size delta:: [[Ungulos]]

#[NeuterName('Cervon')]
#[MasculineAnthropeName('Cervander')]
#[MasculineMonsterName('Cervor')]
#[FeminineAnthropeName('Cerfquin')]
#[FeminineMonsterName('Cervess')]
class Cervos extends Ungulos implements Taxon
{
    public static function rarity(): float
    {
        return Ungulos;
    }

    public static function sizeDelta(): float
    {
        return 0;
    }
}
