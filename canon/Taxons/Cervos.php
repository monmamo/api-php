<?php

namespace Canon\Taxons;

use Canon\Taxons\Attributes\FeminineAnthropeName;
use Canon\Taxons\Attributes\FeminineMonsterName;
use Canon\Taxons\Attributes\MasculineAnthropeName;
use Canon\Taxons\Attributes\MasculineMonsterName;
use Canon\Taxons\Attributes\NeuterName;

// genus:: Deer-forms.
// supertaxons:: [[Ungulos]]
// size delta:: [[Ungulos]]

#[NeuterName('Cervon')]
#[MasculineAnthropeName('Cervander')]
#[MasculineMonsterName('Cervor')]
#[FeminineAnthropeName('Cerfquin')]
#[FeminineMonsterName('Cervess')]
class Cervos extends Ungulos
{
    public static function rarity(): float
    {
        return Ungulos;
    }
}
