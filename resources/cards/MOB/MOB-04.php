<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Consigliere')]
#[Concept('Mobster')]
#[ImageCredit('')]
#[FlavorText(['Member of a Crime Family. Advises the Don and resolves disputes within the family.'])]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.cardrule height="55" >
<x-card.normalrule>Resolution phase: You may reroll any dice roll and take the result of either the original roll or the reroll.</x-card.normalrule>
</x-card.cardrule>
HTML;
    }
};
