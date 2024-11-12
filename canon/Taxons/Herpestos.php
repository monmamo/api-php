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

#[Gloss('Hyena- and mongoose-forms.')]
#[NeuterName('Herpeston')]
#[MasculineAnthropeName('Herpestander')]
#[MasculineMonsterName('Herpestor')]
#[FeminineAnthropeName('Herpestquin')]
#[FeminineMonsterName('Herpestess')]
#[Rarity(Silvadys::class)]
#[SizeDelta(Silvadys::class, 0.1)]
class Herpestos extends BaseTaxon
{
    use Genus;

    public static function phylum(): string
    {
        return 'Silvadys';
    }
}
