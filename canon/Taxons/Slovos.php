<?php

namespace Canon\Taxons;

use App\GeneralAttributes\Gloss;
use Canon\Taxons\Attributes\FeminineAnthropeName;
use Canon\Taxons\Attributes\FeminineMonsterName;
use Canon\Taxons\Attributes\MasculineAnthropeName;
use Canon\Taxons\Attributes\MasculineMonsterName;
use Canon\Taxons\Attributes\NeuterName;
use Canon\Taxons\Attributes\Rarity;

// [[genus]].

#[Rarity(400)]
#[Gloss('Sloth-forms, anteater-forms.')]
#[NeuterName('Slovon')]
#[MasculineAnthropeName('Slovander')]
#[MasculineMonsterName('Slovor')]
#[FeminineAnthropeName('Slovquin')]
#[FeminineMonsterName('Slovess')]
class Slovos extends BaseTaxon
{
    public static function rarity(): float
    {
        return 0; //TODO
    }
}
