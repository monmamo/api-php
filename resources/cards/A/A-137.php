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

// <x-card :$cardNumber :$dx :$dy card-name="Junk Patrol">

//         'concepts' => ['Vendor'],

//         <x-card.phaserule type="Draw" lines="2">
//                 <text>
//                         <x-card.normalrule>Put an Item card from your </x-card.normalrule>
//                                 <x-card.normalrule>Discard into your hand.</x-card.normalrule></text></x-card.phaserule>

// {{-- _inspiration": "https://bulbapedia.bulbagarden.net/wiki/Junk_Arm_(Triumphant_87) --}}
