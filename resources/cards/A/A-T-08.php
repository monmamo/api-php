<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Title('Natural Healing')]
    #[Concept('Trait')]
    #[Concept('Cost', 3)]
    #[ImageCredit('Icon by Lorc and sbed on Game-Icons.net')]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
<x-card.hero.svg><g fill="#ffffff" fill-opacity="1"><rect height="512" width="512" fill="7C432F" rx="32" ry="32" /><path d="M196 496c-16.62 0-30-13.38-30-30V346H46c-16.62 0-30-13.38-30-30V196c0-16.62 13.38-30 30-30h120V46c0-16.62 13.38-30 30-30h120c16.62 0 30 13.38 30 30v120h120c16.62 0 30 13.38 30 30v120c0 16.62-13.38 30-30 30H346v120c0 16.62-13.38 30-30 30zm0-135h120l-60-60zm0-75h120l-60-60zm0-75h120l-60-60z" fill="#417505" fill-opacity="1" /><g transform="translate(-10,10)"><path d="M443.8 18.18C374.1 34.78 283.7 95.63 288 174.5l-.6.3c-12.3-33.5-29.6-48.4-62.2-63.2-43-18.66-89.7 0-157.01-37.35C113 130.3 113 205.1 178.4 223.8c44.5 14.8 91.3 6.1 109.7-7.5 21.3 72.8 18.2 144.9-14.6 217.5-1.3-35-11.2-77.8-24.9-108.2-5.6 37.4-1.9 93.4-39.3 130.8 1.9-18.7-13.1-56-28-74.7 0 37.3 3.7 74.7-20.6 112.1h241.1c5.2-17.5 7.2-35 9-37.2-7.5 4.7-14.7 11.1-28.1 13.6 3.7 0 2.3-32.5.4-51.2-14.9 37.4-37.3 56.1-61.6 56.1 26.1-37.4 22.4-56.1 18.7-93.4-13 32.4-24.6 50.8-53.2 67.3 37.7-78.8 41.9-158.4 19.3-237.2 25.1 11.4 53.4 7.2 85.2-25.4 37-37.9 9.4-112.15 52.3-168.22zm-33 438.42c.2 0 .3-.1.4-.2-.1 0-.2.1-.4.2z" fill="#2ad422" fill-opacity="1" /></g></g></x-card.hero.svg>

<x-card.flavortext>When I get that feeling I want natural healing…</x-card.flavortext>

<x-card.phaserule type="Resolution" ><text>
<x-card.ruleline>If this Monster is not Knocked Out,</x-card.ruleline>
<x-card.ruleline>you may restore 2 @damage to it.</x-card.ruleline>
</text></x-card.phaserule>
HTML;
        }
    };
