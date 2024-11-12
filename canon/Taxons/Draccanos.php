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

#[Gloss('A canine species with dragon-like features.')]
#[NeuterName('Draccanon')]
#[MasculineAnthropeName('Draccanander')]
#[MasculineMonsterName('Draccanor')]
#[FeminineAnthropeName('Draccanquin')]
#[FeminineMonsterName('Draccaness')]
#[Rarity(Canos::class, 3000)]
#[SizeDelta(Canos::class, 0.1)]
class Draccanos extends BaseTaxon
{
    use Species;

    public static function genus(): string
    {
        return 'Canos';
    }
}
