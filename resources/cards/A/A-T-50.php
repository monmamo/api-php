<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Leapfrogging')]
#[Concept('Trait')]
#[ImageCredit('Image by Delapouite on Game-Icons.net')] // https://game-icons.net/1x1/delapouite/leapfrog.html
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.hero.svg><g fill="#ffffff" fill-opacity="1"><path d="M312.1 21.13c-11.6 0-24.5 9.6-30 26.05-6.5 19.5 1.1 37.61 13.9 41.91 12.8 4.2 29.8-5.6 36.4-25.1 6.5-19.5-1.2-37.59-14-41.87-2-.67-4.1-.99-6.3-.99zM198.4 66.74c-29.5 22.35-47.8 40.16-66.1 63.26-8 11.5 12.3 32.2 26.5 19.2l44.6-43.7 37.7 7.1c-22.6 46.3-37.4 83.3-81.3 113.6-22.9.5-43.2-6.6-63.82-12.6-16.71-4.7-26.86 28.1-10.84 33.5 28.26 11.4 58.66 19.9 92.36 23.8 62.5-49.6 105-83.6 211.6.8 15.4 10 31.2-19.8 26-24.9l-78.2-61.9c-10.1-6.7-33.1-5.6-50.2-7.9 12.4-15.4 18.8-28.7 25.2-42.2 19.4 8.8 47.9 20 58.3 18.3 24.6-18.4 45.6-35.4 64.6-54.41 9.2-11.46-14.7-33.2-23.7-25.08L362 115.5c-10.6-6.3-21.8-11.6-33.6-16.41-11.1 8.21-24.8 11.51-38.1 7.01-12.5-4.2-21.2-14.11-25.5-26.31-21.5-4.99-43.8-9.07-66.4-13.05zm119 212.86c-2.4 0-4.9.1-7.4.5-20.4 2.9-33.1 17.9-31.2 31.2 1.9 13.4 18.3 24.2 38.7 21.3 20.4-2.9 33.1-17.8 31.2-31.2-1.7-11.7-14.4-21.5-31.3-21.8zm-185.5 115c-1.2 29.4 17.7 28.6 62.6 26.4l-44.4 42.1c-9 9.3 13.6 28.4 24.7 23.7l89.9-73c7.4 45.3 8.4 46.4 11.9 58.8 3.8 13.3 28.7 8.8 26.6-1.6-4.6-23.7-9.4-81.7-19.4-123.1-14.4-5.9-20.6-18.7-22.8-34-1-7.1-.1-13.9 2.5-20.2-47.3 4.1-123.2 59.1-131.6 100.9zM257.4 361l4.1 27.6-45-3.7z"  /></g></x-card.hero.svg>

<x-card.cardrule >
<x-card.ruleline>Dodge prevents all Ground damage.</x-card.ruleline>
</x-card.cardrule>
HTML;
    }
};
