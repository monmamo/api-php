<?php

namespace App\Taxons;

use App\Contracts\Taxon;
use App\Taxons\Attributes\FeminineAnthropeName;
use App\Taxons\Attributes\FeminineMonsterName;
use App\Taxons\Attributes\MasculineAnthropeName;
use App\Taxons\Attributes\MasculineMonsterName;
use App\Taxons\Attributes\NeuterName;

#[NeuterName('Serpon')]
#[MasculineAnthropeName('Serpander')]
#[MasculineMonsterName('Serpor')]
#[FeminineAnthropeName('Serpquin')]
#[FeminineMonsterName('Serpess')]
class Serpos implements Taxon
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

// serpent-form
// ,:
// ,Amalica Switch ,,,
// [[morphotype]] of serpentine form. Incredible flexibility.
// Excludes all [[spinal morphotype]]s.
// alternate names
// Masculine:
// Serpess
// Feminine:
// Serpor
// rarity: 400000
