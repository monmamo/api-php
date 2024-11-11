<?php

namespace Canon\Taxons;

use App\GeneralAttributes\Gloss;
use Canon\Taxons\Attributes\FeminineAnthropeName;
use Canon\Taxons\Attributes\FeminineMonsterName;
use Canon\Taxons\Attributes\MasculineAnthropeName;
use Canon\Taxons\Attributes\MasculineMonsterName;
use Canon\Taxons\Attributes\NeuterName;

// horse, horsemonster, horsecharacter, horse_character, equine, equinemonster, equinecharacter, equine_character
// 20,1,Cabalos ,Zebros ,Equor,N/A,Equess,N/A,"horselike, horseform",Equon,

#[Gloss('Horse-form.')]
#[NeuterName('Equon')]
#[MasculineAnthropeName('Equander')]
#[MasculineMonsterName('Equor')]
#[FeminineAnthropeName('Eququin')]
#[FeminineMonsterName('Equess')]
class Equos extends BaseTaxon
{
    public static function rarity(): float
    {
        return Pronos::rarity() * 100;
    }

    public static function sizeDelta(): float
    {
        return Pronos::sizeDelta() + 1;
    }
}
