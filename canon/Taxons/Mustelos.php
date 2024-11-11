<?php

namespace Canon\Taxons;

use App\GeneralAttributes\Gloss;
use Canon\Taxons\Attributes\FeminineAnthropeName;
use Canon\Taxons\Attributes\FeminineMonsterName;
use Canon\Taxons\Attributes\MasculineAnthropeName;
use Canon\Taxons\Attributes\MasculineMonsterName;
use Canon\Taxons\Attributes\NeuterName;

// [[genus]]
#[Gloss('Weasel-forms, badger-forms.')]
#[NeuterName('Mustelon')]
#[MasculineAnthropeName('Mustelander')]
#[MasculineMonsterName('Mustelor')]
#[FeminineAnthropeName('Mustelquin')]
#[FeminineMonsterName('Musteless')]
class Mustelos extends BaseTaxon
{
    public static function rarity(): float
    {
        return Pronos::rarity() * 30;
    }

    public static function sizeDelta(): float
    {
        return Pronos::sizeDelta() - 0.2;
    }
}
