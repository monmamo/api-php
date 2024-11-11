<?php

namespace Canon\Taxons;

use Canon\Taxons\Attributes\FeminineAnthropeName;
use Canon\Taxons\Attributes\FeminineMonsterName;
use Canon\Taxons\Attributes\MasculineAnthropeName;
use Canon\Taxons\Attributes\MasculineMonsterName;
use Canon\Taxons\Attributes\NeuterName;

// Short, brutish bipeds.
// https://huggingface.co/datasets/monmamo/orcos

// [[Species]] of genus [[Hominos]].

#[NeuterName('Orcon')]
#[MasculineAnthropeName('Orcander')]
#[MasculineMonsterName('Orcor')]
#[FeminineAnthropeName('Orcquin')]
#[FeminineMonsterName('Orckess')]
class Orcos extends BaseTaxon
{
    public static function rarity(): float
    {
        return Hominos::rarity() * 100000;
    }

    public static function sizeDelta(): float
    {
        return Hominos::sizeDelta() + 0.2;
    }
}
