<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Trial and Error')]

#[Concept('Resolution')]

    #[ImageCredit('Icon by Kamin Ginkaew from the Noun Project')]

    #[FlavorText('Mostly error.')]

    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
<x-svg x="55" width="440" height="550" data-name="Layer 1" viewBox="0 0 64 80" >
 <g fill="#ffffff">
 <circle cx="8" cy="22.5" r="3.5"/><path d="M5.6,49h4.8l1.2-11L14,36.8V29.43A3.43,3.43,0,0,0,10.57,26H5.43A3.43,3.43,0,0,0,2,29.43V36.8L4.4,38Z"/><path d="M62,9H40V21H62ZM50.79,18a1,1,0,0,1-1.41,0l-2.12-2.13,1.41-1.41,1.42,1.41,4.24-4.24,1.41,1.42Z"/><path d="M24,51H2V63H24Zm-7.46,8.12-1.42,1.42L13,58.41l-2.12,2.13L9.46,59.12,11.59,57,9.46,54.88l1.42-1.42L13,55.59l2.12-2.13,1.42,1.42L14.41,57Z"/><path d="M17,49H39V37H17Zm7.46-8.12,1.42-1.42L28,41.59l2.12-2.13,1.42,1.42L29.41,43l2.13,2.12-1.42,1.42L28,44.41l-2.12,2.13-1.42-1.42L26.59,43Z"/><path d="M51,23H29V35H51Zm-7.46,8.12-1.42,1.42L40,30.41l-2.12,2.13-1.42-1.42L38.59,29l-2.13-2.12,1.42-1.42L40,27.59l2.12-2.13,1.42,1.42L41.41,29Z"/><rect x="50" y="1" width="2" height="4"/><rect x="54" y="3" width="4" height="2" transform="translate(19.2 46.4) rotate(-53.13)"/><rect x="45" y="2" width="2" height="4" transform="matrix(0.8, -0.6, 0.6, 0.8, 6.8, 28.41)"/>
</g>
</x-svg>

<text y="500" filter="url(#solid)">
        <x-card.smallrule>Put this card on the Battlefield during your Upkeep phase.</x-card.smallrule>
</text>

<x-card.phaserule type="Resolution" :lines="3">
    <text >
<x-card.normalrule>You may redo any attack or defense</x-card.normalrule>
<x-card.normalrule>once. If so, you must keep the result.</x-card.normalrule>
<x-card.normalrule>If the result improves, discard this card.</x-card.normalrule>
</text>
</x-card.phaserule>
HTML;
        }
    };
