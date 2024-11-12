<?php

namespace Canon\Taxons;

use App\GeneralAttributes\Gloss;
use Canon\Taxons\Attributes\FeminineMonsterName;
use Canon\Taxons\Attributes\MasculineMonsterName;
use Canon\Taxons\Attributes\NeuterName;
use Canon\Taxons\Attributes\Rarity;
use Canon\Taxons\Attributes\SizeDelta;
use Canon\Taxons\Types\BaseTaxon;
use Canon\Taxons\Types\Species;

#[Gloss('Winged horse form.')]
#[NeuterName('Pegason')]
#[MasculineMonsterName('Pegasor')]
#[FeminineMonsterName('Pegasess')]
#[Rarity(Equos::class, 10)]
#[SizeDelta(Equos::class, 0.5)]
class Pegasos extends BaseTaxon
{
    use Species;

    public static function genus(): string
    {
        return 'Equos';
    }
}
