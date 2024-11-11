<?php

namespace Canon\Taxons;

use App\GeneralAttributes\Gloss;
use Canon\Taxons\Attributes\FeminineAnthropeName;
use Canon\Taxons\Attributes\FeminineMonsterName;
use Canon\Taxons\Attributes\MasculineAnthropeName;
use Canon\Taxons\Attributes\MasculineMonsterName;
use Canon\Taxons\Attributes\NeuterName;
use Canon\Taxons\Attributes\Rarity;

// ,Amalica Switch ,
// [[morphotype]] of serpentine form. Incredible flexibility.
// Excludes all [[spinal morphotype]]s.

#[Gloss('Serpent-forms. Long, sinuous bodies; thin, flexible limbs.')]
#[NeuterName('Serpon')]
#[MasculineAnthropeName('Serpander')]
#[MasculineMonsterName('Serpor')]
#[FeminineAnthropeName('Serpquin')]
#[FeminineMonsterName('Serpess')]
#[Rarity(400000)]
class Serpos extends BaseTaxon
{
    public static function rarity(): float
    {
        return 0; //TODO
    }
}
