<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

// https://www.freepik.com/free-vector/recycle-colorful-geometric-gradient-logo-vector_27230675.htm

return new
#[Title('Mana Recycle System')]
#[Concept('Vendor')]
#[Concept('Integrity', 4)]
#[ImageCredit('Image by logturnal on Freepik')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
        <x-card.hero.local>A212.jpg</x-card.hero.local>
        
        <x-card.phaserule type="Draw" lines="6"><text>
<x-card.ruleline>You may do one of the following:</x-card.ruleline>
<x-card.ruleline>&#8226; Put a basic Mana card</x-card.ruleline>
<x-card.ruleline>from your Discard into your Hand.</x-card.ruleline>
<x-card.ruleline>&#8226; Shuffle 3 basic Mana cards</x-card.ruleline>
<x-card.ruleline>from your Discard pile into your Library.</x-card.ruleline>
<x-card.ruleline class="smallrule" :source="\App\Concept::make('Vendor')->standardRule()" />
</text></x-card.phaserule>

HTML;
    }
};
