<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\IsGeneratedImage;
use App\CardAttributes\LocalHeroImage;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Drinking Water Fountain')]
#[Concept('Upkeep')]
#[IsGeneratedImage]
#[LocalHeroImage('A307.png')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
     <x-card.phaserule type="Upkeep" height="240">
       <text >
 <x-card.normalrule>You may heal 4 @damage from and/or </x-card.normalrule>
 <x-card.normalrule>attach a Water (A-001) from your</x-card.normalrule>
 <x-card.normalrule>Library or Discard to each of your Monsters</x-card.normalrule>
 <x-card.normalrule>on the Battlefield. After using this card, </x-card.normalrule>
 <x-card.normalrule>put it at the bottom of your deck. If you </x-card.normalrule>
 <x-card.normalrule>searched through your Library, shuffle it.          </x-card.normalrule>
 </text>
 </x-card.phaserule>
HTML;
    }
};

   
