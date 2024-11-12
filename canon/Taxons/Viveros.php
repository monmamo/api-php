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

#[Gloss('Monsters resembling civets, genets, and oyans.')]
#[NeuterName('Viveron')]
#[MasculineAnthropeName('Viverander')]
#[MasculineMonsterName('Viveror')]
#[FeminineAnthropeName('Viverquin')]
#[FeminineMonsterName('Viveress')]
#[Rarity(Silvadys::class)]
#[SizeDelta(Silvadys::class)]
class Viveros extends BaseTaxon
{
    use Genus;

    public static function phylum(): string
    {
        return 'Silvadys';
    }
}
