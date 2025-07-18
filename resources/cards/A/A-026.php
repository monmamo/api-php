<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

// source or inspiration:: https://bulbapedia.bulbagarden.net/wiki/Yell_Horn_(Darkness_Ablaze_173)
return new
#[Title('Cacophonous Horn')]
#[Concept('Item')]
#[Concept('Cost', 3)]
#[ImageCredit('Image by Delapouite on Game-Icons.net')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.hero.svg><g fill="#ffffff" fill-opacity="1"><path d="M459.9 47.29c-23.5 41.5-48.6 78.61-77 110.91-1.5 10.3-4 20.5-6.8 30.3 14.3-4.4 31-11.8 44.8-22.4l12.7-9.6 1.7 15.8c2.2 18.6 1.5 31-.8 44.9 8.6-3.5 17-7.4 24.8-11.6 8-54.2 8.3-108.61.6-158.31zM358.7 183.8c-67.1 65.8-152.2 107.4-272.24 120.4-1.9.3-2.19.6-2.09.6v.3c-.05 2 1.83 8.4 6.89 16.3 10.14 15.7 31.14 37.5 58.84 58.1 54.7 40.7 135.3 77.3 213 66.8 46.5-61 77.7-138.9 92.5-218.5-9.7 4.6-19.9 8.6-30.1 12.1l-15 5.1 3.3-15.5c3.5-16.4 5.3-26.1 4.8-40.2-18.7 11.2-38.6 17.9-54.1 20.6l-14.5 2.5 4.4-14.1c1.5-4.7 3-9.6 4.3-14.5zM46.14 260.6c-6.24 0-9.09 1.4-10.83 3.2-1.74 1.7-3.06 4.6-3.31 9.8-.51 10.3 4.35 27.7 13.01 46.3 17.33 37.2 49.3 80.4 71.19 98.2 37.3 30.4 118.7 56.5 186.9 66.7 34.1 5.1 65.2 6.3 85.1 3.2 10-1.5 17-4.4 19.8-6.8 2.8-2.3 3-2.4 1.5-6.7-2.3-6.4-10.6-16.9-23.3-29.1-3.6 5.1-7.2 10-11 14.9l-2.2 2.9-3.5.5c-86 13.2-172-26.4-230.1-69.7-29.1-21.7-51.2-44.1-63.26-62.9-6.03-9.3-10-17.6-9.75-26.5.12-4.4 1.8-9.3 5.3-12.7 3.5-3.4 8.12-5 12.84-5.5 10.81-1.2 21.27-2.6 31.47-4.2-32.19-13.6-59-21.6-69.81-21.6h-.05z" fill="#ffffff" fill-opacity="1" transform="translate(0, 0) scale(1, 1) rotate(-180, 256, 256) skewX(0) skewY(0)" /></g></x-card.hero.svg>

<x-card.phaserule type="Upkeep" ><text>
    <x-card.ruleline>All Monsters on the Battlefield</x-card.ruleline>
            <x-card.ruleline>now have the Confusion effect.</x-card.ruleline>
            </text></x-card.phaserule>
HTML;
    }
};
