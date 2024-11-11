<?php

namespace Canon\Taxons;

use Canon\Taxons\Attributes\FeminineAnthropeName;
use Canon\Taxons\Attributes\FeminineMonsterName;
use Canon\Taxons\Attributes\MasculineAnthropeName;
use Canon\Taxons\Attributes\MasculineMonsterName;
use Canon\Taxons\Attributes\NeuterName;

#[NeuterName('Hominon')]
#[MasculineAnthropeName('Hominander')]
#[MasculineMonsterName('Hominor')]
#[FeminineAnthropeName('Hominquin')]
#[FeminineMonsterName('Hominess')]
class Hominos extends BaseTaxon
{
    public static function rarity(): float
    {
        return 0; //TODO
    }
}

// phylum with [[Erectos]] form.

// Anthropomorphic forms.
// These monsters are shaped like anthropes. They walk erect on two legs, have two arms with usable paws or hands, and have a strong [[Skull]].  They tend to have a lean build.

// Attributes:
// Requires: [[Arm]], [[Skin]], [[Skull]]

// 20

// 0
// Posterior Physical Strength:: 10
// Anterior Physical Strength:: 10
// Counterattacking Strength:: 5
// Emotional Strength:: 25
// Intelligence:: 25
// Spiritual Strength:: 25
