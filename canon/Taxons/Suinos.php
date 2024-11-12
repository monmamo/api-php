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

#[Gloss('Swine-forms.')]
#[NeuterName('Suinon')]
#[MasculineAnthropeName('Suinander')]
#[MasculineMonsterName('Suinor')]
#[FeminineAnthropeName('Suinquin')]
#[FeminineMonsterName('Suiness')]
#[Rarity(Ungulos::class, Pronos::class, 3)]
#[SizeDelta(Ungulos::class, Pronos::class)]
class Suinos extends BaseTaxon
{
    use Genus;

    public static function phylum(): string
    {
        return 'Ungulos';
    }
}
