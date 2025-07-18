<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Title('Pistol')]
    #[Concept('Item')]
    #[Concept('Weapon')]
    #[Concept('Cost', 5)]
    #[ImageCredit('Icon by John Colburn on Game-Icons.net')]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
<x-card.hero.svg><path d="M79.238 115.768l-28.51 67.863h406.15l-.273-67.862h-263.83v55.605h-15v-55.605h-16.68v55.605H146.1v-55.605h-17.434v55.605h-15v-55.605H79.238zm387.834 15.96v40.66h18.688v-40.66h-18.688zM56.768 198.63l20.566 32.015L28.894 406.5l101.68 7.174 21.54-97.996h115.74l14.664-80.252 174.55-3.873-.13-32.922H56.767zM263.44 235.85l-11.17 61.142h-96.05l12.98-59.05 12.53-.278-2.224 35.5 14.262 13.576 1.003-33.65 24.69-16.264 43.98-.976z" fill="#fff" fill-opacity="1" /></x-card.hero.svg>
     
<x-card.flavortext>Pew pew pew.</x-card.flavortext>

<x-card.phaserule type="Attack" >
<text >
<x-card.ruleline class="smallrule">Attach this card to a Mobster.</x-card.ruleline>
<x-card.ruleline>Roll 1d6.</x-card.ruleline>
<x-card.ruleline>If @dieroll(6), knocks out attacked Character.</x-card.ruleline>
<x-card.ruleline>If @dieroll(5), discard one Trait or Item.</x-card.ruleline>
</text>
</x-card.phaserule>
HTML;
        }
    };
