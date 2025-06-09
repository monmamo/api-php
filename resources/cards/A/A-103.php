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
#[ImageInDevelopment] // Merry
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
<x-card.ruleline>Put this card in the Battlefield.</x-card.ruleline>
</x-card.cardrule>


     <x-card.phaserule type="Upkeep" >
       <text >
 <x-card.ruleline x="55%">You may heal 1 @damage from and/or attach</x-card.ruleline>
 <x-card.ruleline x="55%">a Water (A-001) from your Library or</x-card.ruleline>
 <x-card.ruleline>Discard to each of your Monsters on the</x-card.ruleline>
 <x-card.ruleline>Battlefield. If you searched through your</x-card.ruleline>
 <x-card.ruleline>Library, shuffle it.</x-card.ruleline>
</text>
</x-card.phaserule>
HTML;
    }
};
