<?php

namespace Canon\Taxons;

use App\DistributionArray;
use App\GeneralAttributes\Gloss;
use Canon\Taxons\Attributes\FeminineAnthropeName;
use Canon\Taxons\Attributes\FeminineMonsterName;
use Canon\Taxons\Attributes\MasculineAnthropeName;
use Canon\Taxons\Attributes\MasculineMonsterName;
use Canon\Taxons\Attributes\NeuterName;
use Canon\Taxons\Attributes\Rarity;
use Canon\Taxons\Attributes\SizeDelta;
use Canon\Taxons\Types\BaseTaxon;
use Canon\Taxons\Types\Phylum;

// These monsters are shaped like anthropes. They walk erect on two legs, have two arms with usable paws or hands, and have a strong [[Skull]].  They tend to have a lean build.

// Attributes:
// Requires: [[Arm]], [[Skin]], [[Skull]]

// Posterior Physical Strength:: 10
// Anterior Physical Strength:: 10
// Counterattacking Strength:: 5
// Emotional Strength:: 25
// Intelligence:: 25
// Spiritual Strength:: 25

#[Gloss('Anthropomorphic forms.')]
#[NeuterName('Hominon')]
#[MasculineAnthropeName('Hominander')]
#[MasculineMonsterName('Hominor')]
#[FeminineAnthropeName('Hominquin')]
#[FeminineMonsterName('Hominess')]
#[Rarity('phyla')]
#[SizeDelta(Erectos::class)]
class Hominos extends BaseTaxon
{
    use Phylum;

    public static function subtaxonRarity(string $fqn): float
    {
        static $distribution;
        $distribution ??= new DistributionArray([
            Cherubos::class => 0.2,
            Icthos::class => 0.03,
            Orcos::class => 0.1,
            Satanos::class => 0.01,
            Seraphos::class => 0.2,
            Spectros::class => 0.07,
            Truslos::class => 0.2,
            Vampiros::class => 0.02,
            Vectos::class => 0.20,
            Emphutos::class => 0.20,
        ]);
        return $distribution[$fqn];
    }
}
