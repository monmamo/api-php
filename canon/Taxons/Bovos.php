<?php

namespace Canon\Taxons;

use App\GeneralAttributes\Gloss;
use Canon\Taxons\Attributes\FeminineAnthropeName;
use Canon\Taxons\Attributes\FeminineMonsterName;
use Canon\Taxons\Attributes\MasculineAnthropeName;
use Canon\Taxons\Attributes\MasculineMonsterName;
use Canon\Taxons\Attributes\NeuterName;
use Canon\Taxons\Attributes\Rarity;
use Canon\Taxons\Attributes\SizeDelta;
use Canon\Taxons\Types\BaseTaxon;
use Canon\Taxons\Types\Genus;

// All: [[Long Tail]], [[Anterior Hooves]], [[Posterior Hooves]], [[Dual Cranial Horns]]
// Females:  [[Milking]]

#[Gloss('Cow-forms.')]
#[NeuterName('Bovon')]
#[MasculineAnthropeName('Bovander')]
#[MasculineMonsterName('Bovor')]
#[FeminineAnthropeName('Bovquin')]
#[FeminineMonsterName('Bovess')]
#[Rarity(Ungulos::class)]
#[SizeDelta(Ungulos::class, 0.7)]

class Bovos extends BaseTaxon
{
    use Genus;

    public static function phylum(): string
    {
        return 'Ungulos';
    }
}
