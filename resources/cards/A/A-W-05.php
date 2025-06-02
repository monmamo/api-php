<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Title('Steel Claws')]
    #[Concept('Item')]
    #[Concept('Weapon')]
    #[ImageCredit('Icon by Skoll on Game-Icons.net')]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
<x-card.hero.svg><path d="M20.11 16.705h120.31l300.66 207.21 56.39 134-138.88-96-7.06-16.79zM309 423.295l-56.39-134-238.08-164.09v94.45zm-48.47-146.43l10.79 25.64 128.76 89-56.39-134-329.16-226.8v76.64z" fill="#fff" fill-opacity="1" /></x-card.hero.svg>
     
<x-card.cardrule y="580" :lines="2">
<x-card.smallrule>Attach this card to a Character.</x-card.smallrule>
<x-card.smallrule>User must be able to wear Steel Claws.</x-card.smallrule>
        </x-card.cardrule>

        <x-card.phaserule type="Resolution" lines="1">
        <text >
<x-card.normalrule>Speed×2 @damage</x-card.normalrule>
</text>
</x-card.phaserule>
HTML;
        }
    };
