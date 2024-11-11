<?php

namespace Canon\Taxons;

use Canon\Taxons\Attributes\FeminineAnthropeName;
use Canon\Taxons\Attributes\FeminineMonsterName;
use Canon\Taxons\Attributes\MasculineAnthropeName;
use Canon\Taxons\Attributes\MasculineMonsterName;
use Canon\Taxons\Attributes\NeuterName;

// essential power:: Poisons, acids, musk and other bodily fluids.
// https://huggingface.co/datasets/monmamo/venenos
// image generation prompt:: [[needs representative image]]

// Color: Yellow-Green

#[NeuterName('Venenon')]
#[MasculineAnthropeName('Venenander')]
#[MasculineMonsterName('Venenor')]
#[FeminineAnthropeName('Venenquin')]
#[FeminineMonsterName('Veneness')]
#[NeuterName('Venenon')]
#[MasculineAnthropeName('Venenander')]
#[MasculineMonsterName('Venenor')]
#[FeminineAnthropeName('Venenquin')]
#[FeminineMonsterName('Veneness')]
class Venenos extends BaseTaxon
{
    public static function rarity(): float
    {
        return 1000;
    }
}
