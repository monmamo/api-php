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

#[Gloss('Tiger-forms.')]
#[NeuterName('Tigron')]
#[MasculineAnthropeName('Tigrander')]
#[MasculineMonsterName('Tigror')]
#[FeminineAnthropeName('Tigrquin')]
#[FeminineMonsterName('Tigress')]
#[Rarity(Felos::class, 200)]
#[SizeDelta(Felos::class, 0.4)]
class Tigros extends BaseTaxon
{
    use Species;

    public static function genus(): string
    {
        return 'Felos';
    }
}
