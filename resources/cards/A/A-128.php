<?php

use App\CardAttributes\DefaultCardAttributes;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Idiot Agents')]
#[Concept('Vendor')]
#[Concept('Cost', 5)]
#[Concept('Integrity', 1)]

class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.hero.local>A128.png</x-card.hero.local>

<x-card.flavortext y="510">
<x-card.flavortext.line>The less we hear from them,</x-card.flavortext.line> 
<x-card.flavortext.line>the better they are serving us.</x-card.flavortext.line>
<x-card.flavortext.line>(Celebrity likenesses impersonated.)</x-card.flavortext.line>
</x-card.flavortext>

<x-card.phaserule type="Draw" lines="4"><text>
<x-card.normalrule>Choose an opponent.</x-card.normalrule>
<x-card.normalrule>That opponent removes all Monster cards</x-card.normalrule>
<x-card.normalrule>from his Library and puts them in Discard.</x-card.normalrule>
<x-card.smallrule :source="\App\Concept::make('Vendor')->standardRule()" />
</text></x-card.phaserule>
HTML;
    }
};
