<?php

namespace Canon\Taxons;

use Canon\Taxons\Attributes\FeminineAnthropeName;
use Canon\Taxons\Attributes\FeminineMonsterName;
use Canon\Taxons\Attributes\MasculineAnthropeName;
use Canon\Taxons\Attributes\MasculineMonsterName;
use Canon\Taxons\Attributes\NeuterName;
use Canon\Taxons\Attributes\Rarity;
use Canon\Taxons\Attributes\SizeDelta;
use Canon\Taxons\Types\BaseTaxon;
use Canon\Taxons\Types\Genus;

#[NeuterName('Vampiron')]
#[MasculineAnthropeName('Vampirander')]
#[MasculineMonsterName('Vampiror')]
#[FeminineAnthropeName('Vampirquin')]
#[FeminineMonsterName('Vampiress')]
#[Rarity(Hominos::class, Demonos::class, 5)]
#[SizeDelta(Hominos::class, Demonos::class)]
class Vampiros extends BaseTaxon
{
    use Genus;

    public static function phylum(): string
    {
        return 'Hominos';
    }
}
