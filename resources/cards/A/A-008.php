<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImagePrompt;
use App\CardAttributes\IsGeneratedImage;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Title('Bagman')]
    #[Concept('Vendor')]
    #[Concept('Integrity', '3')]
    #[IsGeneratedImage]
    #[ImagePrompt('dark man in a mask wearing a trenchcoat carrying a large tote bag')]
   class implements CardComponents
   {
       use DefaultCardAttributes;

       /**
        * @implements \App\Contracts\HasName
        */
       public function background()
       {
           return <<<'HTML'
<image x="0" y="0" href="@local(A-008-full.png)" />
HTML;
       }

       public function content(): \Traversable
       {
           // custom flavor text
           yield <<<'HTML'
<text x="200" y="230" class="credit" text-anchor="middle" alignment-baseline="baseline"><tspan x="50%" dy="25" class="flavor" text-anchor="middle" alignment-baseline="hanging" fill="#ffffff">Just collecting the dues.</tspan></text>

<text y="400" filter="url(#solid)">
                <x-card.normalrule>You may play this card only if you have a</x-card.normalrule>
                <x-card.normalrule>Mobster card on the Battlefield.</x-card.normalrule>
            </text>

            <x-card.phaserule type="Draw" lines="5"><text>
                <x-card.normalrule>Choose one opponent. Roll 1d6. That</x-card.normalrule>
                <x-card.normalrule>opponent discards that many cards from his</x-card.normalrule>
                <x-card.normalrule>Library or all if he doesn't have that many.</x-card.normalrule>
                <x-card.normalrule>you may draw as many cards</x-card.normalrule>
                    <x-card.normalrule>as were discarded.</x-card.normalrule>
            </text></x-card.phaserule>
HTML;
       }
   };
