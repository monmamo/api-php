<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Concept('Draw')]
#[ImageCredit('ShutterStock #2389392699 by AnhSilhouetteArt')]
#[Title('Karma')]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
<x-card.hero.local>A139.jpg</x-card.hero.local>

<x-card.flavortext>It's a female monster.</x-card.flavortext>

<x-card.cardrule lines="5.5">
    <x-card.ruleline class="smallrule">Cannot be played during the Setup phase.</x-card.ruleline>
<x-card.ruleline>Each player adds up the remaining</x-card.ruleline>
<x-card.ruleline>health on his Monsters.</x-card.ruleline>
<x-card.ruleline>The player with the highest total</x-card.ruleline>
<x-card.ruleline>shuffles his hand into his Library.</x-card.ruleline>
<x-card.ruleline class="smallrule" :source="\App\Concept::make('Draw')->standardRule()" />
</x-card.cardrule>
HTML;
        }
    };
