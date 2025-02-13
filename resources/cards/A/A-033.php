<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\LocalHeroImage;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Title('Wheel of Fortune')]
    #[Concept('Draw')]
    #[LocalHeroImage('hero/wheel-of-fortune.jpg')] // https://www.freepik.com/free-psd/casino-roulette-icon-render_23877079.htm
    #[ImageCredit('Image by freepik')]
    #[FlavorText("This isn't a game (show).")]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
<x-card.cardrule lines="3">
        <x-card.normalrule>Each player puts his hand</x-card.normalrule>
<x-card.normalrule>on the bottom of his Library,</x-card.normalrule>
<x-card.normalrule>then draws 7 cards.</x-card.normalrule>
</x-card.cardrule>
HTML;
        }
    };
