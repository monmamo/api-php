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
// #[ImageCredit('IMAGE_CREDIT')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.phaserule type="Resolution" >
    <text >
<x-card.ruleline>When attacked, reduce</x-card.ruleline>
<x-card.ruleline>damage done by Boost @damage.</x-card.ruleline>
</text>
</x-card.phaserule>
HTML;
    }
};
