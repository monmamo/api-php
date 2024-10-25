<?php

use App\CardAttributes\ConceptIconHeroImage;
use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('TODO')]
#[Concept('TODO')]
#[ImageCredit('IMAGE_CREDIT')]
#[FlavorText('FLAVOR_TEXT')]
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

// 'flavor-text' => [    'The quick stop for everything you forgot'         'at the Big-Box Store (A-014).'],

// <x-card :$cardNumber card-name="Convenience Store">
//     <image x="0" y="0" class="hero" href="@local(A040.png)" />
    
//         'concepts' => ['Vendor'],
//         'concepts' => ['Integrity'],

//         <x-card.phaserule type="Draw" height="210" badge="Repeat">
//             <text>
//                 <x-card.normalrule>Discard 1d4 cards from your hand.</x-card.normalrule>
//                 <x-card.normalrule>Search your Library for one Item card. </x-card.normalrule>
//                 <x-card.normalrule>Reveal it, then put it in your hand.</x-card.normalrule>
//                 <x-card.normalrule>{{__('rules.SHUFFLE')}}</x-card.normalrule>
//                 <x-card.normalrule>{{__('rules.REDRAW')}}</x-card.normalrule>
//             </text>
//         </x-card.phaserule>
// </x-card>
