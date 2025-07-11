<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\Prerequisites;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Mascot')]
#[Concept('Mobster')]
#[Concept('Cumulative')]
#[Concept('Integrity', '2')]
#[ImageCredit('')]

#[Prerequisites(['Each player may have one Mascot card in play.', 'Can replace any Bystander Mascot (XX-00).'])]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.cardrule >
<x-card.ruleline>Resolution phase: Everyone else's Monster's attacks do 1d4 less damage.</x-card.ruleline>
</x-card.cardrule>
HTML;
    }
};
