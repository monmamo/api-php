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

// Eleanor Raindancer ,

// Requires: [[Angel Wings]]

#[Gloss('Pygmy angel-form hominid.')]
#[NeuterName('Cherubon')]
#[MasculineAnthropeName('Cherubander')]
#[MasculineMonsterName('Cherubor')]
#[FeminineAnthropeName('Cherubquin')]
#[FeminineMonsterName('Cherubess')]
#[Rarity(Hominos::class, Angelos::class, 2)]
#[SizeDelta(Hominos::class, Angelos::class, Pygmys::class)]
class Cherubos extends BaseTaxon
{
    use Genus;

    public static function phylum(): string
    {
        return 'Hominos';
    }
}
