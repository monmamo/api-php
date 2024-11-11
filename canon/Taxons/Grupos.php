<?php

namespace Canon\Taxons;

use App\GeneralAttributes\Gloss;
use Canon\Taxons\Attributes\FeminineAnthropeName;
use Canon\Taxons\Attributes\FeminineMonsterName;
use Canon\Taxons\Attributes\MasculineAnthropeName;
use Canon\Taxons\Attributes\MasculineMonsterName;
use Canon\Taxons\Attributes\NeuterName;

// Prefers: [[Pronos]] [[Pilos]]
// Prefers: [[Tail]]

#[Gloss('A large winged beast with a canine-like body. Griffin-forms.')]
#[NeuterName('Grupon')]
#[MasculineAnthropeName('Grupander')]
#[MasculineMonsterName('Grupor')]
#[FeminineAnthropeName('Grupquin')]
#[FeminineMonsterName('Grupess')]

class Grupos extends BaseTaxon
{
    public static function rarity(): float
    {
        return 1000000;
    }

    public static function sizeDelta(): float
    {
        return 1.5;
    }
}
