<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Idiot Agents')]
#[Concept('Vendor')]
#[Concept('Integrity', 1)]
#[ImageCredit('Celebrity likenesses impersonated.')]
#[FlavorText('The less we hear from them, the better they are serving us.')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.hero.local>A128.png</x-card.hero.local>

<x-card.phaserule type="Draw" lines="3"><text>
<x-card.normalrule>Choose an opponent.</x-card.normalrule>
<x-card.normalrule>That opponent removes all Monster cards</x-card.normalrule>
<x-card.normalrule>from his Library and puts them in Discard.</x-card.normalrule>
<x-card.smallrule :source="\App\Concept::make('Vendor')->standardRule()" />
</text></x-card.phaserule>
HTML;
    }
};
