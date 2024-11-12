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
use Canon\Taxons\Types\Species;

// Prefers: [[Pronos]] [[Pilos]]
// Prefers: [[Tail]]

#[Gloss('A large winged beast with a canine-like body. Griffin-forms.')]
#[NeuterName('Grupon')]
#[MasculineAnthropeName('Grupander')]
#[MasculineMonsterName('Grupor')]
#[FeminineAnthropeName('Grupquin')]
#[FeminineMonsterName('Grupess')]
#[Rarity(Canos::class, 1e4)]
class Grupos extends BaseTaxon
{
    use Species;

    public static function genus(): string
    {
        return 'Canos';
    }
}
