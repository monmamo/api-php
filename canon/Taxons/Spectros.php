<?php

namespace Canon\Taxons;

use App\GeneralAttributes\Gloss;
use Canon\Taxons\Attributes\FeminineAnthropeName;
use Canon\Taxons\Attributes\FeminineMonsterName;
use Canon\Taxons\Attributes\MasculineAnthropeName;
use Canon\Taxons\Attributes\MasculineMonsterName;
use Canon\Taxons\Attributes\NeuterName;
use Canon\Taxons\Attributes\Rarity;
use Canon\Taxons\Attributes\SizeDelta;
use Canon\Taxons\Types\BaseTaxon;
use Canon\Taxons\Types\Genus;

// [[]] of genus [[Hominos]].
// [[genus]]
// Alternates:
// Masculine: Specter
// Feminine: Spectress
// Attributes:

// Emotional Strength:: 25
// Intelligence:: 25
// Spiritual Strength:: 0

#[Gloss('Zombie-like anthropomorph of low intelligence but high power.')]
#[NeuterName('Spectron')]
#[MasculineAnthropeName('Spectrander')]
#[MasculineMonsterName('Spectror')]
#[FeminineAnthropeName('Spectrquin')]
#[FeminineMonsterName('Spectress')]
#[Rarity(Hominos::class, 200000)]
#[SizeDelta(Hominos::class, -0.3)]
class Spectros extends BaseTaxon
{
    use Genus;

    public static function phylum(): string
    {
        return 'Hominos';
    }
}
