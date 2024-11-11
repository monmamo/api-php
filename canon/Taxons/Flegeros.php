<?php

namespace Canon\Taxons;

use App\GeneralAttributes\Gloss;
use Canon\Taxons\Attributes\FeminineAnthropeName;
use Canon\Taxons\Attributes\FeminineMonsterName;
use Canon\Taxons\Attributes\MasculineAnthropeName;
use Canon\Taxons\Attributes\MasculineMonsterName;
use Canon\Taxons\Attributes\NeuterName;

// morphotype::
// Excludes [[Wings]] and any [[spinal morphotype]].

#[Gloss('Webbed arms (but no wings) that enable flight.')]
#[NeuterName('Flegeron')]
#[MasculineAnthropeName('Flegerander')]
#[MasculineMonsterName('Flegeror')]
#[FeminineAnthropeName('Flegerquin')]
#[FeminineMonsterName('Flegeress')]
class Flegeros extends BaseTaxon
{
    public static function rarity(): float
    {
        return 10000;
    }

    public static function sizeDelta(): float
    {
        return 0.1;
    }
}
