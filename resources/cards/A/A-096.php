<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Fortitude')]
#[Concept('Trait')]
//#[ImageCredit('IMAGE_CREDIT')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.phaserule type="Resolution" height="70">
<text >
<x-card.normalrule>When using a Defense, prevent additional Boost damage.</x-card.normalrule>
</text>
</x-card.phaserule>
HTML;
    }
};
