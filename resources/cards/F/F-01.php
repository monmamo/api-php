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
//#[ImageCredit('IMAGE_CREDIT')]
#[Prerequisites(lines: 'Requires Floros.', y: 460)]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.phaserule type="Resolution" height="130">
<text >
<x-card.normalrule>Before resolving attacks,</x-card.normalrule>
<x-card.normalrule>restore 2 @damage to</x-card.normalrule>
<x-card.normalrule>each Monster on the Battlefield.</x-card.normalrule>
</text>
</x-card.phaserule>
HTML;
    }
};
