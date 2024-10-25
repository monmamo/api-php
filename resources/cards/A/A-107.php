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

// <x-card :$cardNumber card-name="Product Recall">

//     'concepts' => ['Draw'],

//     <x-card.phaserule type="Draw" height="260">
//         <text>
//             <x-card.normalrule>Choose one of your opponents.</x-card.normalrule>
//             <x-card.normalrule>That opponent reveals his or her hand</x-card.normalrule>
//             <x-card.normalrule>& shuffles all Item cards found there into </x-card.normalrule>
//             <x-card.normalrule>his or her Library. Then, draw a number of </x-card.normalrule>
//             <x-card.normalrule>cards equal to the number of Item cards your</x-card.normalrule>
//             <x-card.normalrule>opponent shuffled into his or her Library.</x-card.normalrule>
//         </text></x-card.phaserule> </x-card>
