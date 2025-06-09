<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Chest Strike')]
#[Concept('Attack')]
#[Concept('Level', 20)]
#[Concept('Cost', 4)]
#[ImageCredit('Icon by Delapouite on Game-Icons.net')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.flavortext>Punch to the torso.</x-card.flavortext>

<x-card.hero.svg>
<g fill="#ffffff" fill-opacity="1"><x-icons.meeple  /></g>
<g fill="#ff0000" fill-opacity="1" transform="translate(128,128) scale(0.5)"><x-icons.crosshair  /></g>
</x-card.hero.svg>

<x-card.phaserule type="Resolution" ><text>
<x-card.ruleline>Size @damage to target.</x-card.ruleline>
<x-card.ruleline >Attacked Character</x-card.ruleline>
<x-card.ruleline >Speed = 0 for 1d4 turns.</x-card.ruleline>
</text></x-card.phaserule>
HTML;
    }
};
