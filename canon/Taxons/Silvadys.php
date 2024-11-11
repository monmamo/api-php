<?php

namespace Canon\Taxons;

use App\GeneralAttributes\Gloss;
use Canon\Taxons\Attributes\FeminineAnthropeName;
use Canon\Taxons\Attributes\FeminineMonsterName;
use Canon\Taxons\Attributes\MasculineAnthropeName;
use Canon\Taxons\Attributes\MasculineMonsterName;
use Canon\Taxons\Attributes\NeuterName;

// Prefers: [[Pronos]] [[Pilos]]
// Prefers: [[Tail]]

#[Gloss('Carnivorous anthropes and monsters that are generally know for or associated with living in forests.')]
#[NeuterName('Silvadyn')]
#[MasculineAnthropeName('Silvadyander')]
#[MasculineMonsterName('Silvadyr')]
#[FeminineAnthropeName('Silvadyquin')]
#[FeminineMonsterName('Silvadyss')]

class Silvadys extends BaseTaxon
{
    public static function rarity(): float
    {
        return 3; // 2.5 in forested areas, 5 in unforested rural areas
    }
}
