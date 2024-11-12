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

// genus:: of  [[Silvadys]] with [[Pronos]] form
// https://huggingface.co/datasets/monmamo/felos

// image generation prompt:: [[needs representative image]]
// effect:: Tetrapod.

// cat, catmonster, catcharacter, cat_character, feline, felinemonster, felinecharacter, feline_character
// catanthro, cat_anthro

// The [fell](http://monmamo.wikidot.com/species:fell)s evolved first, then gave rise to the [lee](http://monmamo.wikidot.com/species:lee). In the jungles of [[Asis]], the lee gave rise to the [chimer](http://monmamo.wikidot.com/species:chimer).
#[Gloss('Cat-forms.')]
#[NeuterName('Fellon')]
#[MasculineAnthropeName('Felander')]
#[MasculineMonsterName('Feller')]
#[FeminineAnthropeName('Felquin')]
#[FeminineMonsterName('Felless')]
#[Rarity(Silvadys::class)]
#[SizeDelta(Silvadys::class)]
class Felos extends BaseTaxon
{
    use Genus;

    public static function phylum(): string
    {
        return 'Silvadys';
    }
}
