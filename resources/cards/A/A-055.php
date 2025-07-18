<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageIsPrototype;
use App\CardAttributes\IsGeneratedImage;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Title('Defensive Coordinator')]
    #[Concept('Coach')]
    #[Concept('Integrity', '1d6')]
    #[IsGeneratedImage('head coach standing on the sidelines with a clipboard, green jacket')]
    #[ImageIsPrototype]
    #[Concept('Training', 3)]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
            <x-card.hero.local>A-055.png</x-card.hero.local>

            <x-card.cardrule lines="6">
<x-card.ruleline class="smallrule">{{\trans_choice('rules.player-limit', 1)}}</x-card.ruleline>
<x-card.ruleline class="smallrule">You must already have a Master on the Battlefield</x-card.ruleline>
<x-card.ruleline class="smallrule">to put this card on the Battlefield.</x-card.ruleline>
<x-card.ruleline>You may put the Defense cards you use</x-card.ruleline>
<x-card.ruleline>back in your hand.</x-card.ruleline>
</x-card.cardrule>
HTML;
        }
    };
