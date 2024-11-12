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

#[Gloss('A group of monsters that generally live in the water and is adapted for prolonged time submerged.')]
#[NeuterName('Aquadyn')]
#[MasculineAnthropeName('Aquadyander')]
#[MasculineMonsterName('Aquadyr')]
#[FeminineAnthropeName('Aquadyquin')]
#[FeminineMonsterName('Aquadyss')]
#[Rarity('phyla')]
class Aquadys extends BaseTaxon
{
    use Phylum;

    public static function subtaxonRarity(string $fqn): float
    {
        return match ($fqn) {
            Campos::class => 0.05,
            Lutros::class => 0.2,
            Otarys::class => 0.2,
            Cetos::class => 0.05,
            Icthos::class => 0.05
        };
    }
}
