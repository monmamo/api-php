<?php

namespace Canon\Taxons;

use App\GeneralAttributes\Gloss;
use Canon\Taxons\Attributes\FeminineAnthropeName;
use Canon\Taxons\Attributes\FeminineMonsterName;
use Canon\Taxons\Attributes\MasculineAnthropeName;
use Canon\Taxons\Attributes\MasculineMonsterName;
use Canon\Taxons\Attributes\NeuterName;

// [[genus]] with [[Pronos]] form

#[Gloss('Seal-forms.')]

#[NeuterName('Otaryn')]
#[MasculineAnthropeName('Otaryander')]
#[MasculineMonsterName('Otaryr')]
#[FeminineAnthropeName('Otaryquin')]
#[FeminineMonsterName('Otaryss')]

class Otarys extends BaseTaxon
{
    public static function rarity(): float
    {
        return Pronos::rarity() * 100000;
    }

    public static function sizeDelta(): float
    {
        return Pronos::sizeDelta();
    }
}
