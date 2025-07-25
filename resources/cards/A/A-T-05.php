<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

// https://game-icons.net/1x1/delapouite/split-arrows.html

return new
    #[Title('Evasiveness')]
    #[Concept('Trait')]
    #[Concept('Cost', 3)]
    #[ImageCredit('Image by Delapouite on Game-Icons.net')]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
<x-card.hero.svg><g fill="#ffffff" fill-opacity="1"><path d="M135.3 38.88L25.22 73.93l74.73 87.97 12.75-44.5c44.9 15 73.8 35.5 91.6 58.3 20.6 26.2 27.5 56.2 25.7 88.9-3.6 65.4-45.7 139.7-83.8 185.5l27.6 23c31.7-37.9 65.6-91.6 82.2-149.5 16.6 57.9 50.5 111.6 82.2 149.5l27.6-23C327.7 404.3 285.6 330 282 264.6c-1.8-32.7 5.1-62.7 25.7-88.9 17.8-22.8 46.7-43.3 91.5-58.3l12.8 44.5 74.8-87.97-110.1-35.05 12.6 43.94c-50.8 16.8-86.7 40.98-110 70.68-10.3 13.2-17.9 27.2-23.3 41.9-5.4-14.7-13-28.7-23.3-41.9-23.3-29.7-59.2-53.88-110-70.68z" /></g></x-card.hero.svg>

<x-card.phaserule type="Resolution" >
<text >
<x-card.ruleline>Dodge prevents +Boost @damage.</x-card.ruleline>
</text>
</x-card.phaserule>

HTML;
        }
    };
