<?php

namespace App\Taxons;

use App\Contracts\Taxon;
use App\Taxons\Attributes\FeminineAnthropeName;
use App\Taxons\Attributes\FeminineMonsterName;
use App\Taxons\Attributes\MasculineAnthropeName;
use App\Taxons\Attributes\MasculineMonsterName;
use App\Taxons\Attributes\NeuterName;

#[NeuterName('Slovon')]
#[MasculineAnthropeName('Slovander')]
#[MasculineMonsterName('Slovor')]
#[FeminineAnthropeName('Slovquin')]
#[FeminineMonsterName('Slovess')]
class Slovos implements Taxon
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

// Sloth-forms
// anteater-forms.:
// ,,,,
// [[genus]]. Sloth forms, anteater forms.
// Alternates:
// Masculine:
// Feminine:
// Attributes:

// rarity: 400
