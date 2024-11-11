<?php

namespace Canon\Taxons;

use Canon\Taxons\Attributes\FeminineAnthropeName;
use Canon\Taxons\Attributes\FeminineMonsterName;
use Canon\Taxons\Attributes\MasculineAnthropeName;
use Canon\Taxons\Attributes\MasculineMonsterName;
use Canon\Taxons\Attributes\NeuterName;

// [[Power]]. Sound.
// Sound.
#[NeuterName('Sonon')]
#[MasculineAnthropeName('Sonander')]
#[MasculineMonsterName('Sonor')]
#[FeminineAnthropeName('Sonquin')]
#[FeminineMonsterName('Soness')]
class Sonos extends BaseTaxon
{
    public static function rarity(): float
    {
        return 70000; //TODO
    }
}
