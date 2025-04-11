<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Focus')]
#[Concept('Trait')]
#[Concept('Cost', 2)]
//#[ImageCredit('IMAGE_CREDIT')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.phaserule type="Resolution" lines="2">
    <text >
<x-card.normalrule>When attacked, reduce</x-card.normalrule>
<x-card.normalrule>damage done by Boost @damage.</x-card.normalrule>
</text>
</x-card.phaserule>
HTML;
    }
};
