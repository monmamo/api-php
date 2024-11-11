<?php

namespace Canon\Taxons;

use App\GeneralAttributes\Gloss;
use Canon\Taxons\Attributes\FeminineAnthropeName;
use Canon\Taxons\Attributes\FeminineMonsterName;
use Canon\Taxons\Attributes\MasculineAnthropeName;
use Canon\Taxons\Attributes\MasculineMonsterName;
use Canon\Taxons\Attributes\NeuterName;

#[Gloss('Dog forms.')]
#[NeuterName('Canon')]
#[MasculineAnthropeName('Canander')]
#[MasculineMonsterName('Canor')]
#[FeminineAnthropeName('Canquin')]
#[FeminineMonsterName('Caness')]
class Canos extends BaseTaxon
{
    public static function rarity(): float
    {
        return 5;
    }
}
