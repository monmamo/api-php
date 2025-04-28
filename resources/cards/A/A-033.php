<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

// https://www.freepik.com/free-psd/casino-roulette-icon-render_23877079.htm

return new
    #[Title('Wheel of Fortune')]
    #[Concept('Draw')]
    #[ImageCredit('Image by freepik')]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
<x-card.hero.local>hero/wheel-of-fortune.jpg</x-card.hero.local>

<x-card.flavortext>This isn't a game (show).</x-card.flavortext>

<x-card.cardrule lines="4">
        <x-card.normalrule>Each player puts his hand</x-card.normalrule>
<x-card.normalrule>on the bottom of his Library,</x-card.normalrule>
<x-card.normalrule>then draws 7 cards.</x-card.normalrule>
<x-card.smallrule :source="\App\Concept::make('Draw')->standardRule()" />
</x-card.cardrule>
HTML;
        }
    };
