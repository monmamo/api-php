<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Folded Sheet of Paper')]
#[Concept('Evidence', 1)]
#[Concept('Cost', 1)]
#[ImageCredit('Image by Lorc on Game-Icons.net')]

class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'

<x-card.flavortext>
<x-card.flavortext.line>May incriminate someone in a high crime.</x-card.flavortext.line>
<x-card.flavortext.line>May be a honey-do list from someone's wife.</x-card.flavortext.line>
</x-card.flavortext>

    <x-card.hero.svg>
    <path d="M210.28 18.344c-21.362 43.312-84.904 72.3-146.968 101.78L181.22 156.94 54.312 142.5c28.592 58.053 71.69 113.348 120.968 157.75l99.314 29.906L179 323.312c-35.158 32.766-95.2 70.74-161.5 91.782 88.447 40.53 161.28 46.956 280.344 77.25C378.36 453.12 415.57 425.644 470.094 382l-149.25-42.438 147.47 18.938c-49.763-45.25-89.572-102.69-115.47-161.438L227.53 165.125l141.064 13.594c55.096-20.42 85.08-49.28 124.53-102.282-97.707-20.988-177.93-45.69-282.843-58.094z" fill="#ffffff" fill-opacity="1" /></x-card.hero.svg>
HTML;
    }
};
