<?php

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

// <x-card :$cardNumber :$dx :$dy card-name="Insurance Policy" >
// 'concepts' => ['Vendor'],

//     <text y="500" filter="url(#solid)">
// <x-card.smallrule>You can't play this card if you have any </x-card.smallrule>
// <x-card.smallrule>cards in your hand other than this card. </x-card.smallrule>
// </text>

// <x-card.phaserule type="Draw" lines="2"><text>
// <x-card.normalrule>Show your hand to your opponent,</x-card.normalrule>
//     <x-card.normalrule>then draw 5 cards.</x-card.normalrule>
// </text></x-card.phaserule>
