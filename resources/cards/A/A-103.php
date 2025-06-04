<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageInDevelopment;
use App\CardAttributes\ImageIsPrototype;
use App\CardAttributes\IsGeneratedImage;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Drinking Water Fountain')]
#[IsGeneratedImage]
#[ImageInDevelopment]
#[ImageIsPrototype]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
        <x-card.hero.local>A307.png</x-card.hero.local>
        
        <x-card.flavortext>All creatures need refreshment sometimes.</x-card.flavortext>

        <x-card.cardrule y="585"  >
<x-card.normalrule>Put this card in the Battlefield.</x-card.normalrule>
</x-card.cardrule>


     <x-card.phaserule type="Upkeep" height="205">
       <text >
 <x-card.normalrule x="55%">You may heal 1 @damage from and/or attach</x-card.normalrule>
 <x-card.normalrule x="55%">a Water (A-001) from your Library or</x-card.normalrule>
 <x-card.normalrule>Discard to each of your Monsters on the</x-card.normalrule>
 <x-card.normalrule>Battlefield. If you searched through your</x-card.normalrule>
 <x-card.normalrule>Library, shuffle it.</x-card.normalrule>
</text>
</x-card.phaserule>
HTML;
    }
};
