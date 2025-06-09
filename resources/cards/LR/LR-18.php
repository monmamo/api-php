<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\Prerequisites;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Cargo Shorts')]
#[Concept('Evidence', '?')]
#[Concept('Cost', 5)]
#[ImageCredit('Image by Freepik')]
#[Prerequisites([])]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
    <x-card.hero.local>hero/LR-18.jpg</x-card.hero.local>


<x-card.flavortext>
<x-card.flavortext.line>Who cares if they're out of style?</x-card.flavortext.line>
<x-card.flavortext.line>We're here to steal stuff, not walk a runway.</x-card.flavortext.line>
</x-card.flavortext>


<x-card.cardrule >
<x-card.ruleline>On acquire, place this card in your playing area.</x-card.ruleline>
<x-card.ruleline>You may put up to 10 cards</x-card.ruleline>
<x-card.ruleline>under it from your hand or discard pile.</x-card.ruleline>
<x-card.ruleline>Each card counts as +1 Evidence.</x-card.ruleline>
</x-card.cardrule>
HTML;
    }
};
