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

// <x-card.image-credit>Shutterstock #2348597925</x-card.image-credit>
// <x-card :$cardNumber card-name="Creative Academy" >

// 'concepts' => ['Venue'],

// <x-card.phaserule type="Upkeep" height="100">
//     <text >
// <x-card.normalrule>You may attach up to three Mana</x-card.normalrule>
// <x-card.normalrule>cards per Monster (instead of just one).</x-card.normalrule>
// </text>
// </x-card.phaserule>

            
// </x-card>
