<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\Prerequisites;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Herbal Scent')]
#[Concept('Trait')]
// #[ImageCredit('IMAGE_CREDIT')]
#[Prerequisites(lines: 'Requires Floros.', y: 460)]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.phaserule type="Resolution" >
<text >
<x-card.ruleline>Before resolving attacks,</x-card.ruleline>
<x-card.ruleline>restore 2 @damage to</x-card.ruleline>
<x-card.ruleline>each Monster on the Battlefield.</x-card.ruleline>
</text>
</x-card.phaserule>
HTML;
    }
};
