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

// 'image-credit' => "Image by logturnal on Freepik",

// {{-- https://www.freepik.com/free-vector/recycle-colorful-geometric-gradient-logo-vector_27230675.htm --}}

// <x-card :$cardNumber :$dx :$dy card-name="Mana Recycle System">
//     <image x="0" y="0" class="hero" href="@local(A212.jpg)" />
    
//         'concepts' => ['Vendor'],
//         'concepts' => ['Integrity'],

//         <x-card.phaserule type="Draw" lines="5"><text>
// <x-card.normalrule>You may do one of the following:</x-card.normalrule>
// <x-card.normalrule>&bullet; Put a basic Mana card </x-card.normalrule>
// <x-card.normalrule>from your Discard into your Hand.</x-card.normalrule>
// <x-card.normalrule>&bullet; Shuffle 3 basic Mana cards </x-card.normalrule>
// <x-card.normalrule>from your Discard pile into your Library.</x-card.normalrule>
// </text></x-card.phaserule>
    
// </x-card>
