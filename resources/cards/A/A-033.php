<?php

use App\CardAttributes\Concepts;
use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\LocalHeroImage;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Wheel of Fortune')]

    #[Concepts('Draw')]

    #[LocalHeroImage('hero/wheel-of-fortune.jpg')] // https://www.freepik.com/free-psd/casino-roulette-icon-render_23877079.htm
    #[ImageCredit('Image by freepik')]

    #[FlavorText("This isn't a game (show).")]

    class implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
<x-card.phaserule type="Draw" lines="2">
        <text >
        <x-card.normalrule>Each player puts his hand on the</x-card.normalrule>
<x-card.normalrule>bottom of his Library, then draws 7 cards.</x-card.normalrule>
    </text>
</x-card.phaserule>
HTML;
        }
    };
