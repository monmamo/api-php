<?php

namespace Canon\Taxons;

use App\GeneralAttributes\Gloss;
use Canon\Taxons\Attributes\FeminineAnthropeName;
use Canon\Taxons\Attributes\FeminineMonsterName;
use Canon\Taxons\Attributes\MasculineAnthropeName;
use Canon\Taxons\Attributes\MasculineMonsterName;
use Canon\Taxons\Attributes\NeuterName;

// requires Floros

#[Gloss('A taxon where plantlike forms grow from the monster or anthrope\'s back.')]
#[NeuterName('Anthron')]
#[MasculineAnthropeName('Anthrander')]
#[MasculineMonsterName('Anthror')]
#[FeminineAnthropeName('Anthrquin')]
#[FeminineMonsterName('Anthress')]
class Anthros extends BaseTaxon
{
    public static function rarity(): float
    {
        return Floros::rarity() * 100;
    }

    public static function sizeDelta(): float
    {
        return Floros::sizeDelta();
    }
}
