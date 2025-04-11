<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\Prerequisites;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

// A **glaive** is a type of European polearm that features a single-edged blade attached to the end of a long wooden pole, typically measuring around 2 meters (6 to 7 feet) in length. The blade itself is approximately 45 centimeters (18 inches) long and is affixed in a socket-shaft configuration similar to an axe head, rather than having a tang like a sword or naginata.

// The design of the glaive allows for both cutting and thrusting actions, making it a versatile weapon on the battlefield. Its length provided foot soldiers with the advantage of reach, enabling them to engage enemies from a safer distance. Some variations of the glaive included a small hook on the reverse side of the blade, known as a glaive-guisarme, which was particularly effective in unseating mounted opponents.

// Historically, the glaive was used throughout Europe and is similar to other polearms such as the Japanese naginata, the Chinese guandao, the Korean woldo, and the Russian sovnya. It was primarily employed by infantry and was effective against both foot soldiers and cavalry. The weapon's design evolved over time, with some later versions becoming more ornate and ceremonial in nature.

// In modern times, the term "glaive" has been used in various fantasy and science fiction contexts to describe different types of bladed weapons, including throwing weapons that bear little resemblance to the historical polearm.

return new
#[Title('Blade on Polearm')]
#[Concept('Item')]
#[Concept('Weapon')]
#[ImageCredit('Image by Delapouite on Game-Icons.net')]
#[Prerequisites([])]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.hero.svg><path d="M488.7 24.74c-25.6 25.54-51.7 50.93-78 76.26-57-13.38-129.6 16.5-170.7 43 49.3-8 98.8-16.3 120.4 4.7-85.4 80.4-173.5 159.8-261.92 239l38.92 44.9c23.9-8.7 56.6-29.2 92-57.6 38-30.6 79.2-70.3 117.4-113.7 67.7-76.8 125.6-166.14 141.9-236.56zM94.96 409.3l-13.61 12.5 19.95 22.6 14-12.9-20.34-22.2zM68.06 434L18 480.1V494h29.39l40.65-37.4L68.06 434z" fill="#fff" fill-opacity="1"></path></x-card.hero.svg>


<text y="495" filter="url(#solid)">
<x-card.smallrule>Attach this card to a Mobster.</x-card.smallrule>
        </text>
       
<x-card.phaserule type="Resolution" lines="1">
<text >
<x-card.normalrule>4+1d6 @damage</x-card.normalrule>
</text>
</x-card.phaserule>

HTML;
    }
};
