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
use Canon\Taxons\Types\Species;

// image generation prompt:: foxlike, foxform
// requires: [[Fur]], [[Long Tail]]

#[Gloss('A fox-like body style characterized by large ears.')]
#[NeuterName('Fanacon')]
#[MasculineAnthropeName('Fanacander')]
#[MasculineMonsterName('Fanacor')]
#[FeminineAnthropeName('Fanacquin')]
#[FeminineMonsterName('Fanax')]
#[Rarity(Vulpos::class, 100)]
#[SizeDelta(Vulpos::class, 0.2)]

class Fanacos extends BaseTaxon
{
    use Species;

    public static function genus(): string
    {
        return 'Vulpos';
    }
}
