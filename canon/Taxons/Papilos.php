<?php

namespace Canon\Taxons;

use App\GeneralAttributes\Gloss;
use Canon\Taxons\Attributes\FeminineAnthropeName;
use Canon\Taxons\Attributes\FeminineMonsterName;
use Canon\Taxons\Attributes\MasculineAnthropeName;
use Canon\Taxons\Attributes\MasculineMonsterName;
use Canon\Taxons\Attributes\NeuterName;

// [[morphotype]] [[winged morphotype]]

// automatic features:: [[Butterfly Wings]]
#[Gloss('Butterfly-form.')]
#[NeuterName('Papilon')]
#[MasculineMonsterName('Papilor')]
#[FeminineMonsterName('Papiless')]
#[NeuterName('Papilon')]
#[MasculineAnthropeName('Papilander')]
#[MasculineMonsterName('Papilor')]
#[FeminineAnthropeName('Papilquin')]
#[FeminineMonsterName('Papiless')]
class Papilos extends BaseTaxon
{
    public static function rarity(): float
    {
        return 400000;
    }
}
