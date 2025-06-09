<?php

use App\CardAttributes\CardTools;
use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

// https://www.freepik.com/free-photo/hand-pouring-food-birds_1713221.htm

return new
    #[Title('Alms for the Poor')]
    #[Concept('Draw')]
    #[Concept('Cost', 3)]
    #[ImageCredit('Image by freepik')]
class(__FILE__) implements CardComponents
{
    use CardTools;
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield $this->localHeroImage('A004.jpg');

        yield <<<'HTML'
<x-card.flavortext>Pay it forward even when it isn't cool.</x-card.flavortext>

<x-card.phaserule type="Draw" ><text>
<x-card.ruleline>The player with the fewest cards</x-card.ruleline>
<x-card.ruleline>in their hand can draw 1 card.</x-card.ruleline>
<x-card.ruleline>Once they have done so,</x-card.ruleline>
<x-card.ruleline>you may draw up to 3 cards.</x-card.ruleline>
<x-card.smallrule :source="\App\Concept::make('Draw')->standardRule()" />
</text></x-card.phaserule>
HTML;
    }
};
