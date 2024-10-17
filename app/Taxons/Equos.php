<?php

namespace App\Taxons;

use App\Contracts\Taxon;
use App\Taxons\Attributes\FeminineAnthropeName;
use App\Taxons\Attributes\FeminineMonsterName;
use App\Taxons\Attributes\MasculineAnthropeName;
use App\Taxons\Attributes\MasculineMonsterName;
use App\Taxons\Attributes\NeuterName;

#[NeuterName('Equon')]
#[MasculineAnthropeName('Equander')]
#[MasculineMonsterName('Equor')]
#[FeminineAnthropeName('Eququin')]
#[FeminineMonsterName('Equess')]
class Equos implements Taxon
{
    public static function rarity(): float
    {
        return 0; //TODO
    }

    public static function sizeDelta(): float
    {
        return 0;
    }
}

// [[genus]]
// Horse-form.

// horse, horsemonster, horsecharacter, horse_character, equine, equinemonster, equinecharacter, equine_character
// 20,1,Cabalos ,Zebros ,Equor,N/A,Equess,N/A,"horselike, horseform",Equon,
// TODO Resembles a horse.
// attribute group:: Breeds

// Requirement Tetrapod.
