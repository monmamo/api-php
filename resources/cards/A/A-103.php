<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageIsPrototype;
use App\CardAttributes\IsGeneratedImage;
use App\CardAttributes\Prerequisites;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Drinking Water Fountain')]
#[IsGeneratedImage]
#[ImageIsPrototype]
#[Prerequisites(['Put this card in the Battlefield.'])]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
        <x-card.hero.local>A307.png</x-card.hero.local>
        
     <x-card.phaserule type="Upkeep" height="240">
       <text >
 <x-card.normalrule>You may heal 1 @damage from and/or</x-card.normalrule>
 <x-card.normalrule>attach a Water (A-001) from your</x-card.normalrule>
 <x-card.normalrule>Library or Discard to each of your Monsters</x-card.normalrule>
 <x-card.normalrule>on the Battlefield. If you</x-card.normalrule>
 <x-card.normalrule>searched through your Library, shuffle it.</x-card.normalrule>
</text>
</x-card.phaserule>
HTML;
    }
};
