<?php

namespace Canon\Taxons;

use App\GeneralAttributes\Gloss;
use Canon\Taxons\Attributes\FeminineMonsterName;
use Canon\Taxons\Attributes\MasculineMonsterName;
use Canon\Taxons\Attributes\NeuterName;
use Canon\Taxons\Attributes\Rarity;
use Canon\Taxons\Attributes\SizeDelta;
use Canon\Taxons\Types\BaseTaxon;
use Canon\Taxons\Types\Genus;

// image generation prompt:: [[needs representative image]]
#[Gloss('Great whale forms. Exclusively aquatic.')]
#[NeuterName('Ceton')]
#[MasculineMonsterName('Cetor')]
#[FeminineMonsterName('Cetess')]
#[Rarity(Aquadys::class)]
#[SizeDelta(Aquadys::class, 1)]
class Cetos extends BaseTaxon
{
    use Genus;

    public static function phylum(): string
    {
        return 'Aquadys';
    }
}
