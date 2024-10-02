<?php

use App\CardAttributes\Concepts;
use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

// https://game-icons.net/1x1/lorc/gift-trap.html

return new
#[Title('Basic Lure')]
    #[Concepts('Draw', 'Item', 'Lure')]
    #[ImageCredit('Image by Lorc on Game-Icons.net under CC BY 3.0')]

    class implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
    <x-card.phaserule type="Draw" lines="4"><text>
    <x-card.normalrule>Roll 1d6. If @dieroll(6,5,4),</x-card.normalrule>
    <x-card.normalrule>you may search your Library for a</x-card.normalrule>
    <x-card.normalrule>Monster card. Reveal that/those card(s). </x-card.normalrule>
    <x-card.normalrule>Put that/those card(s) in your hand.</x-card.normalrule>
</text></x-card.phaserule>
HTML;
        }
    };
