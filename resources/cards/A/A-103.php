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

// @push('background') 
// {{ view('Upkeep.background') }}
// <x-card.image-credit>
// #[\App\CardAttributes\IsGeneratedImage]
// </x-card.image-credit>
// @endpush

// <x-card :$cardNumber card-name="Drinking Water Fountain">

//   <image x="0" y="0" class="hero" href="@local(A307.png)" />

//     <x-card.phaserule type="Upkeep" height="240">
//       <text >
// <x-card.normalrule>You may heal 4 damage from </x-card.normalrule>
// <x-card.normalrule>and/or attach a Water Mana card from your  </x-card.normalrule>
// <x-card.normalrule>Library or Discard to each of your Monsters</x-card.normalrule>
// <x-card.normalrule>on the Battlefield. After using this card, </x-card.normalrule>
// <x-card.normalrule>put it at the bottom of your deck. If you </x-card.normalrule>
// <x-card.normalrule>searched through your Library, shuffle it.          </x-card.normalrule>
// </text>
// </x-card.phaserule>

// </x-card>
