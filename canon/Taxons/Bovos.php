<?php

namespace Canon\Taxons;

use App\GeneralAttributes\Gloss;
use Canon\Taxons\Attributes\FeminineAnthropeName;
use Canon\Taxons\Attributes\FeminineMonsterName;
use Canon\Taxons\Attributes\MasculineAnthropeName;
use Canon\Taxons\Attributes\MasculineMonsterName;
use Canon\Taxons\Attributes\NeuterName;

// All: [[Long Tail]], [[Anterior Hooves]], [[Posterior Hooves]], [[Dual Cranial Horns]]
// Females:  [[Milking]]

// ,Ungulos ,Capros ,
// . Cow-forms.
// Alternatives:
// Masculine: Bovor
// Feminine: Bovess, Boquin

// [[genus]] of phylum [[Ungulos]]
#[Gloss('Cow-forms.')]
#[NeuterName('Bovon')]
#[MasculineAnthropeName('Bovander')]
#[MasculineMonsterName('Bovor')]
#[FeminineAnthropeName('Bovquin')]
#[FeminineMonsterName('Bovess')]
class Bovos extends Ungulos
{
    public static function rarity(): float
    {
        return Ungulos::rarity() / Ungulos::subtaxons()[self::class];
    }

    public static function sizeDelta(): float
    {
        return Ungulos::sizeDelta() + 0.7;
    }
}
