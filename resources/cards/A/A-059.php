<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\IsGeneratedImage;
use App\CardAttributes\LocalHeroImage;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Dandruff')]
#[Concept('Bane')]
#[IsGeneratedImage]
#[LocalHeroImage('hero/dandruff.jpeg')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.phaserule type="Resolution" lines="3">
<text>
<x-card.normalrule>When this Monster takes a</x-card.normalrule>
<x-card.normalrule>physical attack, the attacking</x-card.normalrule>
<x-card.normalrule>Monster takes 1d6 damage.</x-card.normalrule>
</text>
</x-card.phaserule>

HTML;
    }
};
