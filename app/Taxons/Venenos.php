<?php

namespace App\Taxons;

use App\Contracts\Taxon;
use App\Taxons\Attributes\FeminineAnthropeName;
use App\Taxons\Attributes\FeminineMonsterName;
use App\Taxons\Attributes\MasculineAnthropeName;
use App\Taxons\Attributes\MasculineMonsterName;
use App\Taxons\Attributes\NeuterName;

// essential power:: Poisons, acids, musk and other bodily fluids.
// https://huggingface.co/datasets/monmamo/venenos
// image generation prompt:: [[needs representative image]]

// Color: Yellow-Green

// Poisons.

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
class Venenos implements Taxon
{
    public static function rarity(): float
    {
        return 1000;
    }

    public static function sizeDelta(): float
    {
        return 0;
    }
}
