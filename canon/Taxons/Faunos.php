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

#[Gloss('Goat-like biped with short horns, a tail, and hooves instead of feet.')]
#[NeuterName('Faunon')]
#[MasculineAnthropeName('Faunander')]
#[MasculineMonsterName('Faunor')]
#[FeminineAnthropeName('Faunquin')]
#[FeminineMonsterName('Fauness')]
#[Rarity(Capros::class, 20)]
#[SizeDelta(Capros::class, Erectos::class)]
class Faunos extends BaseTaxon
{
    use Species;

    public static function genus(): string
    {
        return 'Capros';
    }
}
