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

// (compare [[Lupos]]).
// image generation prompt:: wolflike, wolfform

#[Gloss('Erect wolf-forms.')]
#[NeuterName('Lycon')]
#[MasculineAnthropeName('Lycander')]
#[MasculineMonsterName('Lycor')]
#[FeminineAnthropeName('Lycquin')]
#[FeminineMonsterName('Lyx')]
#[Rarity(Canos::class, Erectos::class, 5)]
#[SizeDelta(Canos::class, Erectos::class, 0.3)]
class Lycos extends BaseTaxon
{
    use Species;

    public static function genus(): string
    {
        return 'Canos';
    }
}
