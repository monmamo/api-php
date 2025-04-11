<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\Prerequisites;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Box Cutter')]
#[Concept('Item')]
#[Concept('Weapon')]
#[ImageCredit('Icon by Delapouite on Game-Icons.net')]
#[Prerequisites([])]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.hero.svg><path d="M272.512 128.777l-8.754 8.754 13.804 13.804 8.618-8.618c3.522 3.644 7.022 7.3 10.498 10.974l-8.38 8.38 13.803 13.803 7.91-7.91c56.049 60.807 106.512 125.403 156.901 192.142l-10.87 4.986L292.31 201.358l10.516-4.822-76.074-76.073-10.518 4.82-49.1-49.1-.205-.206-.217-.193c-16.629-14.758-38.932-13.07-54.888-7.049-7.978 3.011-14.679 6.986-19.583 12.089-2.452 2.552-4.657 5.412-5.647 9.655-.99 4.242.609 10.339 4.15 13.595l-.296-.285 54.272 54.272-10.517 4.82 76.073 76.074 10.518-4.82L384.548 397.89 354.75 411.56C241.345 257.947 138.5 201.206 35.151 143.476c-6.146-3.433-9.27-9.698-9.148-19.793.123-10.095 4.3-23.154 12.792-35.54 16.982-24.771 50.207-46.946 99.536-43.62 28.527 1.922 55.925 15.506 83.238 37.04l-6.89 6.89 13.803 13.803 8.075-8.075c4.092 3.682 7.677 6.946 11.167 10.305l-8.506 8.506 13.804 13.803 8.729-8.729c3.914 3.842 7.27 7.198 10.762 10.71zm-3.343 61.711l-54.688 25.066-46.624-46.625 54.688-25.065zM486 422.656l-3.926 45.154-63.878-63.88 33.644-15.434zm-48.882-48.881l-33.646 15.433-163.749-163.75 33.654-15.425zM197.303 133.959l-33.654 15.426-56.026-56.026c2.278-1.95 6.136-4.49 11.093-6.36 11.464-4.326 25.574-4.92 34.948 3.32zm-122.58-28.813c-7.571-7.57-19.846-7.57-27.417.001-7.57 7.571-7.57 19.846 0 27.417 7.57 7.572 19.846 7.572 27.418 0 7.571-7.571 7.571-19.847 0-27.418z" fill="#fff" fill-opacity="1"></path></x-card.hero.svg>


<text y="495" filter="url(#solid)">
<x-card.smallrule>Attach this card to a Mobster.</x-card.smallrule>
        </text>
       
<x-card.phaserule type="Resolution" lines="2">
<text >
<x-card.normalrule>X = Speed/4 (rounded up).</x-card.normalrule>
<x-card.normalrule>Does Xd6-X @damage.</x-card.normalrule>
</text>
</x-card.phaserule>
HTML;
    }
};
