<?php

namespace Canon\Taxons;

use App\GeneralAttributes\Gloss;
use Canon\Taxons\Attributes\FeminineAnthropeName;
use Canon\Taxons\Attributes\FeminineMonsterName;
use Canon\Taxons\Attributes\MasculineAnthropeName;
use Canon\Taxons\Attributes\MasculineMonsterName;
use Canon\Taxons\Attributes\NeuterName;

// [[genus]] of phylum [[Rodentos]] with [[Pygmys]].
// The most common [[genus]] of [[Pygmys]] [[Rodentos]].

// image generation prompt:: mouselike, mouseform, small rodent
// image tags:: mouse

#[Gloss('Mouse-forms, small rodents.')]
#[NeuterName('Muson')]
#[MasculineAnthropeName('Musander')]
#[MasculineMonsterName('Musor')]
#[FeminineAnthropeName('Musquin')]
#[FeminineMonsterName('Musess')]
class Musos extends BaseTaxon
{
    public static function rarity(): float
    {
        return Rodentos::sizeDelta() * Pygmys::rarity() * 2;
    }

    public static function sizeDelta(): float
    {
        return Rodentos::sizeDelta() + Pygmys::sizeDelta() - 0.2;
    }
}
