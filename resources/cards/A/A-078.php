<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Grotesque Mouth')]
#[Concept('Trait')]
#[Concept('Size', '+1')]
#[ImageCredit('Adobe Stock #2910609')]
#[\App\CardAttributes\LocalHeroImage('hero/AdobeStock_2910609.jpeg')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
        <x-card.phaserule type="Attack" height="140"><text>
<x-card.skilltitle>Bite</x-card.skilltitle>
<x-card.normalrule>Does 3×Speed @damage.</x-card.normalrule>
        </text></x-card.phaserule>
HTML;
    }
};
