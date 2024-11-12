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

#[NeuterName('Icthon')]
#[MasculineAnthropeName('Icthander')]
#[MasculineMonsterName('Icthor')]
#[FeminineAnthropeName('Icthquin')]
#[FeminineMonsterName('Icthess')]
#[Gloss('Amphibious fish-like anthropomorphs.')]
#[Rarity(Hominos::class, Aquadys::class)]
#[SizeDelta(Hominos::class, Aquadys::class)]

class Icthos extends BaseTaxon
{
    use Genus;

    public static function phylum(): string
    {
        return 'Hominos';
    }
}
