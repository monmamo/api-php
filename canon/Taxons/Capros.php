<?php

namespace Canon\Taxons;

use App\GeneralAttributes\Gloss;
use Canon\Taxons\Attributes\FeminineAnthropeName;
use Canon\Taxons\Attributes\FeminineMonsterName;
use Canon\Taxons\Attributes\MasculineAnthropeName;
use Canon\Taxons\Attributes\MasculineMonsterName;
use Canon\Taxons\Attributes\NeuterName;

// [[genus]]
// Not to be confused with [[Faunos]].

#[Gloss('Goat-forms with horns, a tail and hooves')]
#[NeuterName('Capron')]
#[MasculineAnthropeName('Caprander')]
#[MasculineMonsterName('Capror')]
#[FeminineAnthropeName('Caprquin')]
#[FeminineMonsterName('Capress')]
class Capros extends BaseTaxon
{
    public static function rarity(): float
    {
        return Ungulos::rarity() / Ungulos::subtaxons()[self::class];
    }

    public static function sizeDelta(): float
    {
        return Ungulos::sizeDelta() + 0.4;
    }
}
