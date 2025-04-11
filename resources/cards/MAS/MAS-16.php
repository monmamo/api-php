<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Nonresistance')]
#[Concept('Defense')]
#[Concept('Level', 15)]
#[ImageCredit('')]
#[FlavorText([])]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.cardrule height="165" >
<x-card.normalrule>Prevent 1d% damage.</x-card.normalrule>
<x-card.normalrule>The attacking Monster takes the</x-card.normalrule>
<x-card.normalrule>amount of Damage prevented.</x-card.normalrule>
</x-card.cardrule>
HTML;
    }
};
