<?php

namespace Canon\Taxons;

use App\CardAttributes\ImagePrompt;
use App\GeneralAttributes\Gloss;
use Canon\Taxons\Attributes\FeminineAnthropeName;
use Canon\Taxons\Attributes\FeminineMonsterName;
use Canon\Taxons\Attributes\MasculineAnthropeName;
use Canon\Taxons\Attributes\MasculineMonsterName;
use Canon\Taxons\Attributes\NeuterName;
use Canon\Taxons\Attributes\Rarity;
use Canon\Taxons\Attributes\SizeDelta;
use Canon\Taxons\Types\BaseTaxon;
use Canon\Taxons\Types\Species;

// Species:: of genus [[Canos]] with form [[Erectos]]

// image generation prompt:: foxlike, foxform
// requires: [[Fur]], [[Long Tail]]
#[Gloss('A fox-like primate of the interior.')]
#[NeuterName('Alopecon')]
#[MasculineAnthropeName('Alopecander')]
#[MasculineMonsterName('Alopecor')]
#[FeminineAnthropeName('Alopecquin')]
#[FeminineMonsterName('Alopex')]
#[ImagePrompt('foxform humanoid primate monster of weird zoology')]
#[Rarity(Vulpos::class, Erectos::class, 500)]
#[SizeDelta(Vulpos::class, Erectos::class, 1)]
class Alopecos extends BaseTaxon
{
    use Species;

    public static function genus(): string
    {
        return Vulpos::class;
    }
}
