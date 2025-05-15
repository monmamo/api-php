<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\Prerequisites;
use App\CardAttributes\RaidCardAttributes;
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
    use RaidCardAttributes { RaidCardAttributes::system insteadof DefaultCardAttributes; }

    public function content(): \Traversable
    {
        yield <<<'HTML'
    <x-card.hero.local>hero/LR-18.jpg</x-card.hero.local>


<x-card.flavortext>
<x-card.flavortext.line>Who cares if they're out of style?</x-card.flavortext.line>
<x-card.flavortext.line>We're here to steal stuff, not walk a runway.</x-card.flavortext.line>
</x-card.flavortext>


<x-card.cardrule lines="4">
<x-card.normalrule>On acquire, place this card in your playing area.</x-card.normalrule>
<x-card.normalrule>You may put up to 10 cards</x-card.normalrule>
<x-card.normalrule>under it from your hand or discard pile.</x-card.normalrule>
<x-card.normalrule>Each card counts as +1 Evidence.</x-card.normalrule>
</x-card.cardrule>
HTML;
    }
};
