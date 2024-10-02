<?php

use App\CardAttributes\Concepts;
use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageCredit;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Flamboyant Mogul')]
#[Concepts('Draw')]
#[ImageCredit('IMAGE_CREDIT')]
#[FlavorText('FLAVOR_TEXT')]
class implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
       yield <<<'HTML'
HTML;
    }
};


@push('background')
<image x="0" y="0" href="@local(A-091-full.png)"/>
<x-card.image-credit>
    #[\App\CardAttributes\IsGeneratedImage]
    </x-card.image-credit>
    
'flavor-text' => [
'He builds the hugest venues. Yuge ones.'
],
@endpush

<x-card  :$cardNumber card-name="" >

    
        'concepts' => ['Vendor'],
        <x-card.concept.row>
        <x-card.concept.card type="Male" x="0" width="50" />
        <x-card.concept.card type="Integrity" x="50" width="120" >1d4</x-card.concept>
        </x-card.concept.row>

        <text y="130" filter="url(#solid)">
<x-card.normalrule>Discard five cards from your Hand</x-card.normalrule>
<x-card.normalrule>to play a Venue card from your Hand.</x-card.normalrule>
</text>

</x-card>
