<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Round for the House')]
#[Concept('Draw')]
#[Concept('Cost', 3)]
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
        
<x-card.cardrule >
<x-card.ruleline>Each player, including you,</x-card.ruleline>
<x-card.ruleline>may choose to draw a card.</x-card.ruleline>
<x-card.smallrule :source="\App\Concept::make('Draw')->standardRule()" />
<x-card.ruleline>{{ __('rules.REDRAW') }}</x-card.ruleline>
</x-card.phaserule>
HTML;
    }
};
