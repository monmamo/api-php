<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\Prerequisites;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Concept('Draw')]
#[FlavorText("It's a female monster.")]
#[ImageCredit('ShutterStock #2389392699 by AnhSilhouetteArt')]
#[Title('Karma')]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
<x-card.hero.local>A139.jpg</x-card.hero.local>

<x-card.cardrule lines="5.5">
    <x-card.smallrule>Cannot be played during the Setup phase.</x-card.smallrule>
<x-card.normalrule>Each player adds up the remaining</x-card.normalrule>
<x-card.normalrule>health on his Monsters.</x-card.normalrule>
<x-card.normalrule>The player with the highest total</x-card.normalrule>
<x-card.normalrule>shuffles his hand into his Library.</x-card.normalrule>
<x-card.smallrule :source="\App\Concept::make('Draw')->standardRule()" />
</x-card.cardrule>
HTML;
        }
    };
