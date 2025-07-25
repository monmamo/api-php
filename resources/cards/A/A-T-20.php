<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Stickiness')]
#[Concept('Trait')]
#[Concept('Cost', 3)]
#[ImageCredit('Icon by Delapouite from Game-Icons.net')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
    <x-card.hero.svg viewBox="0 0 512 512" ><path d="M18 18v133.4c37.93-48.8 88.7-72.27 129.6-69.77-6.8-20.08-9.1-41.72-9.9-63.63H18zm121.3 82.3c-37 1.9-87.64 28.6-121.24 84.1 25.2 56.8 58.7 115.7 94.74 155.3 30.9-10.9 72.8-30.8 113.1-54.4-19.7-45.8-15.8-92.2 1.6-128.9-13 .2-24.3-1.3-35.4-5.6-13.9 13.2-27.4 29.1-31.2 47.3l-18.3-3.5c5.7-21.3 16.5-39.9 32.2-53.4-6-4.3-11.6-9.4-16.7-15.1-19.9 9.1-40.2 31.4-43.3 50.2l-18.44-3.1c4.44-26.4 25.84-50 49.94-62.1-2.4-3.5-4.7-7.1-7-10.8zm185.3 2.9c-12.1-.1-23.9 3.7-36.3 11-44.5 26.6-76.6 99.1-42.7 169.6l7.2 7.2-10.2 6.2c-46.5 27.9-95.1 51-130.8 62.5l12.4 17.9c29.3-10.8 61.6-25.2 94.4-41.9 63 30.1 49.1 114.6-6.5 159.3h29.3c9.4-17 15.1-43.4 36.4-50 8.2-2.5 5 30 9.3 50h45.7c-2.5-13.4-2.2-34.6 3.5-35.1 10.6-1 18.9 21.3 27 35.1h50.2c-103.1-112.3-95.8-156.5-75.7-228.1 28.1-18.3 54.5-37 77.2-55.1-13.4-54.6-34.9-85.3-57.1-99-11.7-6.4-22.6-9.5-33.3-9.6zm-4.6 175c-8.7 21.9-17.5 49.6-24.2 48.5-14.6-2.5-19.6-10.9-23.2-20.1 16-9.2 31.9-18.7 47.4-28.4zm-60.1 35.5c6.1 19.6 14.5 46.1 9.1 50-7.4 5.4-19.5-22.6-30.4-38.4 7.1-3.8 14.2-7.6 21.3-11.6zm49.2 21c4.7-.5 19.9 68.6 37.3 101.6 10.4 19.7-25 14.3-28.9 3.4-12.5-35-14.3-104.4-8.4-105zM288 352c9.1 0 9.1 22.9 5.9 35.9-3.5 14.1-7.7 37.2-11.2 34.3-11.8-9.8-3.8-70.2 5.3-70.2zm9.8 78.4c3.8.3 8.9 12.5 9.9 19.6 1.2 8.2-1.5 24.1-5 24.4-5 .5-7-17.5-7.6-26.7-.4-5.8-3.8-16.5 2.3-17.3h.4z" fill="#fff" fill-opacity="1" /></x-card.hero.svg>

    <text y="610" filter="url(#solid)">
<x-card.ruleline>Attempt to remove an Item from this Monster</x-card.ruleline>
<x-card.ruleline>succeeds only if 1d6 exceeds Boost.</x-card.ruleline>
</text>
HTML;
    }
};
