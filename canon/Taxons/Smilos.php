<?php

namespace Canon\Taxons;

use App\GeneralAttributes\Gloss;
use Canon\Taxons\Attributes\FeminineAnthropeName;
use Canon\Taxons\Attributes\FeminineMonsterName;
use Canon\Taxons\Attributes\MasculineAnthropeName;
use Canon\Taxons\Attributes\MasculineMonsterName;
use Canon\Taxons\Attributes\NeuterName;
use Canon\Taxons\Attributes\Rarity;

// [[morphotype]]. Saber-teeth.

#[NeuterName('Smilon')]
#[MasculineAnthropeName('Smilander')]
#[MasculineMonsterName('Smilor')]
#[FeminineAnthropeName('Smilquin')]
#[FeminineMonsterName('Smiless')]
#[Rarity(1000000)]
#[Gloss('Saber-teeth.')]
class Smilos extends BaseTaxon
{
    public static function rarity(): float
    {
        return 0; //TODO
    }
}
