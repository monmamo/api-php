<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Round for the House')]
#[Concept('Draw')]
#[ImageCredit('Image by freepic.diller on Freepik')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.hero.local>A231.jpg</x-card.hero.local>

<x-card.flavortext y="535">
<x-card.flavortext.line>Your favorite monster sports club had a great day</x-card.flavortext.line>
<x-card.flavortext.line>on the field. Time to celebrate!</x-card.flavortext.line>
    </x-card.flavortext>
        
<x-card.cardrule lines="4">
<x-card.normalrule>Each player, including you,</x-card.normalrule>
<x-card.normalrule>may choose to draw a card.</x-card.normalrule>
<x-card.smallrule :source="\App\Concept::make('Draw')->standardRule()" />
<x-card.normalrule>{{ __('rules.REDRAW') }}</x-card.normalrule>
</x-card.phaserule>
HTML;
    }
};
