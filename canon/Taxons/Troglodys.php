<?php

namespace Canon\Taxons;

use App\GeneralAttributes\Gloss;
use Canon\Taxons\Attributes\FeminineAnthropeName;
use Canon\Taxons\Attributes\FeminineMonsterName;
use Canon\Taxons\Attributes\MasculineAnthropeName;
use Canon\Taxons\Attributes\MasculineMonsterName;
use Canon\Taxons\Attributes\NeuterName;
use Canon\Taxons\Attributes\Rarity;
use Canon\Taxons\Types\BaseTaxon;
use Canon\Taxons\Types\Phylum;

#[Gloss('Anthropes and monsters that are generally know for or associated with living in caves.')]
#[NeuterName('Troglodyn')]
#[MasculineAnthropeName('Troglodyander')]
#[MasculineMonsterName('Troglodyr')]
#[FeminineAnthropeName('Troglodyquin')]
#[FeminineMonsterName('Troglodyss')]
#[Rarity('phyla')]
class Troglodys extends BaseTaxon
{
    use Phylum;
}
