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
#[Concept('Cost', 3)]
#[ImageCredit('Adobe Stock #2910609')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.hero.local>hero/AdobeStock_2910609.jpeg</x-card.hero.local>

<x-card.phaserule type="Attack" ><text>
<x-card.ruleline class="skilltitle">Bite</x-card.ruleline>
<x-card.ruleline>Does 3×Speed @damage.</x-card.ruleline>
        </text></x-card.phaserule>
HTML;
    }
};
