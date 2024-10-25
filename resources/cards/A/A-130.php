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

// 'flavor-text' => [
//     'Where the real money from the concept is made.'
//     '- Mel Brooks (paraphrased)],
//     ],
//     @endpush

//     <x-card :$cardNumber :$dx :$dy card-name="Merchandizing">

//             <x-card.concept.staticon type="Vendor"/>
//             <x-card.phaserule type="Draw" lines="3"><text>
//                 <x-card.normalrule>Discard a card from your hand</x-card.normalrule>
//                 <x-card.normalrule>to take a card of your choice from your Library.</x-card.normalrule>
//             </text></x-card.phaserule>

//     </x-card>
