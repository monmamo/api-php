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

// image generation prompt:: [[needs representative image]]

#[Gloss('Imp forms.')]
#[NeuterName('Emphuton')]
#[MasculineAnthropeName('Emphutander')]
#[MasculineMonsterName('Emphutor')]
#[FeminineAnthropeName('Emphutquin')]
#[FeminineMonsterName('Emphutess')]
#[Rarity(Hominos::class, Faeos::class, 3)]
#[SizeDelta(Hominos::class, Faeos::class)]
class Emphutos extends BaseTaxon
{
    use Genus;

    public static function phylum(): string
    {
        return 'Hominos';
    }
}
