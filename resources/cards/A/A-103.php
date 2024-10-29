<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\IsGeneratedImage;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Drinking Water Fountain')]
#[Concept('TODO')]
#[IsGeneratedImage]
#[FlavorText('FLAVOR_TEXT')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
    <text y="500" filter="url(#solid)">TODO</text>
HTML;
    }
};

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
