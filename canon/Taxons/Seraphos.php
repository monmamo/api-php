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

// Requires: [[Angel Wings]]

// Emotional Strength:: 100
// Intelligence:: 100
// Spiritual Strength:: 100

#[NeuterName('Seraphon')]
#[MasculineAnthropeName('Seraphander')]
#[MasculineMonsterName('Seraphor')]
#[FeminineAnthropeName('Seraphquin')]
#[FeminineMonsterName('Seraphess')]
#[SizeDelta(Hominos::class, Angelos::class, 2)]
#[Rarity(Hominos::class, Angelos::class)]
class Seraphos extends BaseTaxon
{
    use Genus;

    public static function phylum(): string
    {
        return 'Hominos';
    }
}
