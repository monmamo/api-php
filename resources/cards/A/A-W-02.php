<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Title('Throwing Stars')]
    #[Concept('Attack')]
    #[Concept('Item')]
    #[Concept('Weapon')]
    #[Concept('Cost', 3)]
    #[ImageCredit('Icon by Faithtoken on Game-Icons.net')]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
<x-card.hero.svg><path d="M277.95 333.754c-18.707 5.27-39.12 3.777-57.213-5.024-8.2 15.105-12.253 34.398-14.837 55.104L24.977 477.958c41.176-120.353 94.123-176.934 153.265-200.01-5.278-18.693-3.76-39.107 5.024-57.207-15.113-8.19-34.397-12.236-55.12-14.843L34.038 24.973c120.345 41.192 176.92 94.13 199.987 153.273 18.7-5.27 39.115-3.753 57.214 5.008 8.215-15.09 12.253-34.374 14.844-55.112l180.94-94.116c-41.193 120.37-94.148 176.95-153.29 200.02 5.27 18.7 3.777 39.113-5.016 57.213 15.113 8.215 34.398 12.236 55.112 14.828l94.14 180.94c-120.392-41.208-176.95-94.132-200.02-153.274zm-16.66-36.538c22.752-2.916 38.837-23.756 35.922-46.51-2.924-22.768-23.74-38.83-46.517-35.922-22.745 2.916-38.83 23.733-35.907 46.493 2.908 22.76 23.733 38.846 46.5 35.94z" fill="#fff" fill-opacity="1" /></x-card.hero.svg>
     
<x-card.flavortext>Just a few off the top.</x-card.flavortext>

<x-card.phaserule type="Resolution" >
<text >
<x-card.ruleline>Attacked character takes Speed @damage.</x-card.ruleline>
</text>
</x-card.phaserule>
HTML;
        }
    };
