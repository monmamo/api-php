<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\LocalHeroImage;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Round for the House')]
#[Concept('Draw')]
#[ImageCredit('Image by freepic.diller on Freepik')]
#[LocalHeroImage('A231.jpg')]
#[FlavorText(['Your favorite monster sports club had a great day', 'on the field. Let\'s celebrate!'])]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.cardrule lines="3">
<x-card.normalrule>Each player, including you,</x-card.normalrule>
<x-card.normalrule>may choose to draw a card.</x-card.normalrule>
<x-card.normalrule>{{ __('rules.REDRAW') }}</x-card.normalrule>
</x-card.phaserule>
HTML;
    }
};
