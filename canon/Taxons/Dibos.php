<?php

namespace Canon\Taxons;

use App\GeneralAttributes\Gloss;
use Canon\Taxons\Attributes\FeminineAnthropeName;
use Canon\Taxons\Attributes\FeminineMonsterName;
use Canon\Taxons\Attributes\MasculineAnthropeName;
use Canon\Taxons\Attributes\MasculineMonsterName;
use Canon\Taxons\Attributes\NeuterName;

// Sheep-forms.
// [[genus]] of phylum [[Ungulos]]

#[Gloss('Cow-forms.')]
#[NeuterName('Dibon')]
#[MasculineAnthropeName('Dibander')]
#[MasculineMonsterName('Dibor')]
#[FeminineAnthropeName('Dipquin')]
#[FeminineMonsterName('Dibess')]
class Dibos extends Ungulos
{
    public static function rarity(): float
    {
        return Ungulos::rarity() / Ungulos::subtaxons()[self::class];
    }

    public static function sizeDelta(): float
    {
        return Ungulos::sizeDelta() + 0.1;
    }
}
