<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\ImageInDevelopment;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

// https://game-icons.net/1x1/caro-asercion/fox.html

return new
#[Title('Cunning')]
#[Concept('Trait')]
#[Concept('Cost', 2)]
#[\App\CardAttributes\ImageCredit('Image by Merry Shuporna Biswas')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
    <x-card.hero.local>hero/Cunning.jpg</x-card.hero.local>

    <x-card.phaserule type="Upkeep" >
        <text >
    <x-card.ruleline>Choose a Library. Look</x-card.ruleline>
<x-card.ruleline>at the top 4 cards of that Library</x-card.ruleline>
<x-card.ruleline>without rearranging them.</x-card.ruleline>
<x-card.ruleline>Then you may shuffle that Library.</x-card.ruleline>
</text>
</x-card.phaserule>
HTML;
    }
};
