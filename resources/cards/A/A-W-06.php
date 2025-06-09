<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Title('Longsword')]
    #[Concept('Item')]
    #[Concept('Weapon')]
    #[Concept('Cost', 3)]

    #[ImageCredit('Icon by Delapouite on Game-Icons.net')]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
<x-card.hero.svg>
<g transform="translate(0, 0) scale(1, 1) rotate(-90, 256, 256) skewX(0) skewY(0)">
<path d="M24.68 24.68C21.145 28.217 18.83 34.459 18.83 40.944C18.83 45.334 19.953 49.544 21.735 52.947L45.145 45.144L52.947 21.735C49.544 19.953 45.335 18.831 40.944 18.831C34.459 18.831 28.217 21.145 24.681 24.681Z" fill="#ffffff" fill-opacity="1" />
<path d="M41.813 65.225L84.49 105.82C87.43 101.337 90.45 97.503 93.976 93.977C97.502 90.452 101.336 87.431 105.819 84.491L65.226 41.814L59.372 59.372Z" fill="#ffffff" fill-opacity="1" />
<path d="M106.705 106.705C103.638 109.772 100.887 113.468 97.833 118.511L175.279 192.178C177.924 188.871 180.493 185.962 183.227 183.228C185.962 180.493 188.871 177.924 192.178 175.279L118.511 97.833C113.468 100.887 109.772 103.638 106.705 106.705Z" fill="#ffffff" fill-opacity="1" />
<path d="M195.646 195.645C186.532 204.76 178.566 218.092 159.976 246.243L171.068 257.335C205.228 205.715 205.715 205.229 257.335 171.068L246.243 159.976C218.093 178.566 204.76 186.532 195.646 195.646Z" fill="#ffffff" fill-opacity="1" />
<path d="M219.688 219.688C215.69 223.685 212.111 228.228 207.83 234.349L450.695 471.933L493.169 493.169L471.933 450.695L234.349 207.83C228.229 212.111 223.685 215.69 219.688 219.688Z" fill="silver" fill-opacity="1" /></g>
</x-card.hero.svg>
     
<x-card.flavortext>Definitely mightier than The Pen (A-W-15).</x-card.flavortext>


        <x-card.phaserule type="Resolution" >
<text >
<x-card.ruleline class="smallrule">Attach this card to a Master or Mobster.</x-card.ruleline>
<x-card.ruleline>Attacked character takes 2+1d6 @damage</x-card.ruleline>
</text>
</x-card.phaserule>
HTML;
        }
    };
