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
    #[Concept('Cost', 5)]
    #[ImageCredit('Image by freepik')]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
<x-card.hero.local>hero/wheel-of-fortune.jpg</x-card.hero.local>

<x-card.flavortext>This isn't a game (show).</x-card.flavortext>

<x-card.phaserule type="Draw" ><text>
    <x-card.ruleline>Each player puts his hand</x-card.ruleline>
<x-card.ruleline>on the bottom of his Library,</x-card.ruleline>
<x-card.ruleline>then draws 7 cards.</x-card.ruleline>
<x-card.ruleline class="smallrule" :source="\App\Concept::make('Draw')->standardRule()" />
</text></x-card.phaserule>
HTML;
        }
    };
