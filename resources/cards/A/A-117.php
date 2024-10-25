<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Convenience Store')]
#[Concept('Vendor')]
#[Concept('Integrity', 4)]
#[ImageCredit('IMAGE_CREDIT')]
#[FlavorText(lines: ['The quick stop for everything you forgot', 'at the Big-Box Store (A-014).'])]
class implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
    <text y="500" filter="url(#solid)">TODO</text>
HTML;
    }
};

//     <image x="0" y="0" class="hero" href="@local(A040.png)" />

//         <x-card.phaserule type="Draw" height="210" badge="Repeat">
//             <text>
//                 <x-card.normalrule>Discard 1d4 cards from your hand.</x-card.normalrule>
//                 <x-card.normalrule>Search your Library for one Item card. </x-card.normalrule>
//                 <x-card.normalrule>Reveal it, then put it in your hand.</x-card.normalrule>
//                 <x-card.normalrule>{{__('rules.SHUFFLE')}}</x-card.normalrule>
//                 <x-card.normalrule>{{__('rules.REDRAW')}}</x-card.normalrule>
//             </text>
//         </x-card.phaserule>
