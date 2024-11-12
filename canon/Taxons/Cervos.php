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

#[Gloss('Deer-forms.')]
#[NeuterName('Cervon')]
#[MasculineAnthropeName('Cervander')]
#[MasculineMonsterName('Cervor')]
#[FeminineAnthropeName('Cerfquin')]
#[FeminineMonsterName('Cervess')]
#[Rarity(Ungulos::class)]
#[SizeDelta(Ungulos::class, 0.3)]
class Cervos extends BaseTaxon
{
    use Genus;

    public static function phylum(): string
    {
        return 'Ungulos';
    }
}
