<?php

namespace Canon\Taxons;

use App\GeneralAttributes\Gloss;
use Canon\Taxons\Attributes\FeminineAnthropeName;
use Canon\Taxons\Attributes\FeminineMonsterName;
use Canon\Taxons\Attributes\MasculineAnthropeName;
use Canon\Taxons\Attributes\MasculineMonsterName;
use Canon\Taxons\Attributes\NeuterName;
use Canon\Taxons\Attributes\Rarity;
use Canon\Taxons\Types\BaseTaxon;
use Canon\Taxons\Types\Species;

#[Gloss('Zebra-forms.')]
#[NeuterName('Quaggon')]
#[MasculineAnthropeName('Quaggander')]
#[MasculineMonsterName('Quaggor')]
#[FeminineAnthropeName('Quaggquin')]
#[FeminineMonsterName('Quaggess')]
#[Rarity(Equos::class, 1000)]
class Quaggos extends BaseTaxon
{
    use Species;

    public static function genus(): string
    {
        return 'Equos';
    }
}
