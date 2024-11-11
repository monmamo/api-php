<?php

namespace Canon\Taxons;

use App\GeneralAttributes\Gloss;
use Canon\Taxons\Attributes\FeminineAnthropeName;
use Canon\Taxons\Attributes\FeminineMonsterName;
use Canon\Taxons\Attributes\MasculineAnthropeName;
use Canon\Taxons\Attributes\MasculineMonsterName;
use Canon\Taxons\Attributes\NeuterName;

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
class Lutros extends BaseTaxon
{
    public static function rarity(): float
    {
        return Aquadys::rarity() / Aquadys::subtaxons()[self::class];
    }

    public static function sizeDelta(): float
    {
        return Aquadys::sizeDelta();
    }
}
