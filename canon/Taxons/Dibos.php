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
use Canon\Taxons\Types\Genus;

#[Gloss('Sheep-forms.')]
#[NeuterName('Dibon')]
#[MasculineAnthropeName('Dibander')]
#[MasculineMonsterName('Dibor')]
#[FeminineAnthropeName('Dipquin')]
#[FeminineMonsterName('Dibess')]
#[Rarity(Ungulos::class)]
#[SizeDelta(Ungulos::class, 0.7)]
class Dibos extends Ungulos
{
    use Genus;

    public static function phylum(): string
    {
        return 'Ungulos';
    }
}
