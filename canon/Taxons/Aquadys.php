<?php

namespace Canon\Taxons;

use App\GeneralAttributes\Gloss;
use Canon\Taxons\Attributes\FeminineAnthropeName;
use Canon\Taxons\Attributes\FeminineMonsterName;
use Canon\Taxons\Attributes\MasculineAnthropeName;
use Canon\Taxons\Attributes\MasculineMonsterName;
use Canon\Taxons\Attributes\NeuterName;

#[Gloss('A group of monsters that generally live in the water and is adapted for prolonged time submerged.')]
#[NeuterName('Aquadyn')]
#[MasculineAnthropeName('Aquadyander')]
#[MasculineMonsterName('Aquadyr')]
#[FeminineAnthropeName('Aquadyquin')]
#[FeminineMonsterName('Aquadyss')]
class Aquadys extends BaseTaxon
{
    public static function rarity(): float
    {
        return 100;
    }

    public static function subtaxons(): array
    {
        return [
            Campos::class => 0.05,
            Lutros::class => 0.2,
            Cetos::class => 0.05,
        ];
    }
}
