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

// image generation prompt:: bearlike, bearform
// image tags:: bear, bearmonster, bearanthro
#[Gloss('Bear-forms and raccoon-forms.')]
#[NeuterName('Urson')]
#[MasculineAnthropeName('Ursander')]
#[MasculineMonsterName('Ursor')]
#[FeminineAnthropeName('Ursquin')]
#[FeminineMonsterName('Ursess')]
#[Rarity(Silvadys::class)]
#[SizeDelta(Silvadys::class)]
class Ursos extends BaseTaxon
{
    use Genus;

    public static function phylum(): string
    {
        return 'Silvadys';
    }
}
