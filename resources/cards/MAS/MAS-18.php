<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Do the Wave')]
#[Concept('Attack')]
#[Concept('Level', 20)]
#[ImageCredit('')]
#[FlavorText([])]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.cardrule height="55" >
<x-card.normalrule>GROUP ATTACK. Does Xd4 where X is the number of Monsters you have in play.</x-card.normalrule>
</x-card.cardrule>
HTML;
    }
};
