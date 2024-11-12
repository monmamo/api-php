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

#[Gloss('Seal-forms.')]

#[NeuterName('Otaryn')]
#[MasculineAnthropeName('Otaryander')]
#[MasculineMonsterName('Otaryr')]
#[FeminineAnthropeName('Otaryquin')]
#[FeminineMonsterName('Otaryss')]
#[Rarity(Aquadys::class, Pronos::class, 1000)]
#[SizeDelta(Aquadys::class, Pronos::class)]
class Otarys extends BaseTaxon
{
    use Genus;

    public static function phylum(): string
    {
        return 'Aquadys';
    }
}
