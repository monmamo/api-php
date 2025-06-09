<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Recall the Wounded')]
#[Concept('Upkeep')]
// #[ImageCredit('IMAGE_CREDIT')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
 <x-card.phaserule type="Upkeep"  ><text >
        <x-card.ruleline>Shuffle your Knocked Out Monsters</x-card.ruleline>
        <x-card.ruleline>into your Library.</x-card.ruleline>
        <x-card.ruleline class="smallrule">The Monsters still count as Knocked Out for</x-card.ruleline>
            <x-card.ruleline class="smallrule">the purpose of resolving the match.</x-card.ruleline>
    </text></x-card.phaserule>
HTML;
    }
};
