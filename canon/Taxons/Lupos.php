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
use Canon\Taxons\Types\Species;

// Fur, Paw. [[Alertness]]

// image generation prompt:: wolflike, wolfform

#[NeuterName('Lupon')]
#[MasculineAnthropeName('Lupander')]
#[MasculineMonsterName('Lupor')]
#[FeminineAnthropeName('Lupquin')]
#[FeminineMonsterName('Lupess')]
#[Gloss('Wolf-forms. Resembles a wolf or has wolflike properties.')]
#[Rarity(Canos::class, Pronos::class)]
#[SizeDelta(Canos::class, Pronos::class, 0.1)]

class Lupos extends Canos
{
    use Species;

    public static function genus(): string
    {
        return 'Canos';
    }
}
