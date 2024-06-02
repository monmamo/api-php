<?php

namespace App\Taxons;

use App\Contracts\Taxon;
use App\GeneralAttributes\Gloss;
use App\Taxons\Attributes\FeminineAnthropeName;
use App\Taxons\Attributes\FeminineMonsterName;
use App\Taxons\Attributes\MasculineAnthropeName;
use App\Taxons\Attributes\MasculineMonsterName;
use App\Taxons\Attributes\NeuterName;

// genus:: of [[Pronos]]

// image generation prompt:: otterlike, otterform
// image tags:: otter

#[Gloss('Otter-form.')]
#[NeuterName('Lutron')]
#[MasculineAnthropeName('Lutrander')]
#[MasculineMonsterName('Luter')]
#[FeminineAnthropeName('Lutriquin')]
#[FeminineMonsterName('Lutress')]
#[NeuterName('Lutron')]
#[MasculineAnthropeName('Lutrander')]
#[MasculineMonsterName('Lutror')]
#[FeminineAnthropeName('Lutrquin')]
#[FeminineMonsterName('Lutress')]
class Lutros implements Taxon
{
    public static function rarity(): float
    {
        return 100000;
    }

    public static function sizeDelta(): float
    {
        return 0;
    }
}
