<?php

namespace Canon\Taxons;

use App\GeneralAttributes\Gloss;
use Canon\Taxons\Attributes\FeminineAnthropeName;
use Canon\Taxons\Attributes\FeminineMonsterName;
use Canon\Taxons\Attributes\MasculineAnthropeName;
use Canon\Taxons\Attributes\MasculineMonsterName;
use Canon\Taxons\Attributes\NeuterName;
use Canon\Taxons\Attributes\Rarity;
use Canon\Taxons\Types\BaseTaxon;
use Canon\Taxons\Types\Phylum;

// Prefers: [[Pronos]] [[Pilos]]
// Prefers: [[Tail]]

#[Gloss('Carnivorous anthropes and monsters that are generally know for or associated with living in forests.')]
#[NeuterName('Silvadyn')]
#[MasculineAnthropeName('Silvadyander')]
#[MasculineMonsterName('Silvadyr')]
#[FeminineAnthropeName('Silvadyquin')]
#[FeminineMonsterName('Silvadyss')]
#[Rarity('phyla')] // 2.5 in forested areas, 5 in unforested rural areas

class Silvadys extends BaseTaxon
{
    use Phylum;

    public static function subtaxonRarity(string $fqn): float
    {
        return match ($fqn) {
            Canos::class => 0.3,
            Felos::class => 0.3,
            Ursos::class => 0.1,
            Vulpos::class => 0.2,
            Lupos::class => 0.2,
            Herpestos::class => 0.1,
            Mustelos::class => 0.1,
            Slovos::class => 0.03,
            Viveros::class => 0.03,
        };
    }
}
