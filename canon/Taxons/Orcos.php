<?php

namespace Canon\Taxons;

use Canon\Taxons\Attributes\FeminineAnthropeName;
use Canon\Taxons\Attributes\FeminineMonsterName;
use Canon\Taxons\Attributes\MasculineAnthropeName;
use Canon\Taxons\Attributes\MasculineMonsterName;
use Canon\Taxons\Attributes\NeuterName;
use Canon\Taxons\Attributes\Rarity;
use Canon\Taxons\Attributes\SizeDelta;
use Canon\Taxons\Types\BaseTaxon;
use Canon\Taxons\Types\Genus;

// Short, brutish bipeds.
// https://huggingface.co/datasets/monmamo/orcos

#[NeuterName('Orcon')]
#[MasculineAnthropeName('Orcander')]
#[MasculineMonsterName('Orcor')]
#[FeminineAnthropeName('Orcquin')]
#[FeminineMonsterName('Orckess')]
#[Rarity(Erectos::class, Troglodys::class)]
#[SizeDelta(Erectos::class, Troglodys::class, -0.3)]
class Orcos extends BaseTaxon
{
    use Genus;

    public static function phylum(): string
    {
        return 'Troglodys';
    }
}
