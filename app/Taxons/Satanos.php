<?php

namespace App\Taxons;

use App\Contracts\Taxon;
use App\Taxons\Attributes\FeminineAnthropeName;
use App\Taxons\Attributes\FeminineMonsterName;
use App\Taxons\Attributes\MasculineAnthropeName;
use App\Taxons\Attributes\MasculineMonsterName;
use App\Taxons\Attributes\NeuterName;

#[NeuterName('Satanon')]
#[MasculineAnthropeName('Satanander')]
#[MasculineMonsterName('Satanor')]
#[FeminineAnthropeName('Satanquin')]
#[FeminineMonsterName('Sataness')]
class Satanos implements Taxon
{
    public static function rarity(): float
    {
        return 0; //TODO
    }

    public static function sizeDelta(): float
    {
        return 0;
    }
}

// species of genus Hominos with Demonos and Megos forms.

// ,"Hominos , Demonos , Megos ",,,
// [[Species]] of genus [[Hominos]] with [[Demonos]] and [[Megos]] forms.
// Alternates:
// Masculine:
// Feminine:
// Attributes:

// rarity: {{calc: ((uuUwRY2_d))}} x [[Demonos]] x ((ZN7RF27RS))
// size delta: [[Hominos]] + [[Demonos]] + ((Tm13NKApe))
