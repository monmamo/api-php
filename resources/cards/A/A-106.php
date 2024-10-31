<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Reconnaissance Team')]
#[Concept('TODO')]
#[ImageCredit('IMAGE_CREDIT')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
    <text y="500" filter="url(#solid)">TODO</text>
HTML;
    }
};

//   <x-card.phaserule type="Draw"  height="130">
//     <text >
// <x-card.normalrule>Discard up to 2 Monster cards</x-card.normalrule>
// <x-card.normalrule>from your hand. Draw 3 cards for</x-card.normalrule>
// <x-card.normalrule>each card you discarded in this way.</x-card.normalrule>
// </text>
// </x-card.phaserule>
