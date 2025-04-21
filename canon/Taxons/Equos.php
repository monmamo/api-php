<?php

namespace Canon\Taxons;

use App\GeneralAttributes\Gloss;
use Canon\Taxons\Attributes\FeminineMonsterName;
use Canon\Taxons\Attributes\MasculineMonsterName;
use Canon\Taxons\Attributes\NeuterName;
use Canon\Taxons\Attributes\Rarity;
use Canon\Taxons\Attributes\SizeDelta;
use Canon\Taxons\Types\BaseTaxon;
use Canon\Taxons\Types\Genus;

// horse, horsemonster, horsecharacter, horse_character, equine, equinemonster, equinecharacter, equine_character
// Quaggos

#[Gloss('Horse-form.')]
#[NeuterName('Equon')]
#[MasculineMonsterName('Equor')]
#[FeminineMonsterName('Equess')]
#[Rarity(Ungulos::class, Pronos::class, Cabalos::class)]
#[SizeDelta(Ungulos::class, Pronos::class, Cabalos::class, 0.3)]
class Equos extends BaseTaxon
{
    use Genus;

    public static function phylum(): string
    {
        return 'Ungulos';
    }
}
