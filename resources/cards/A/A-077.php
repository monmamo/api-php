<?php

use App\CardAttributes\Concepts;
use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageCredit;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Round for the House')]
#[Concepts('Draw')]
#[ImageCredit('Image by freepic.diller on Freepik')]
#[FlavorText('Your favorite monster sports club had a great day', 'on the field. Let\'s celebrate!')]
class implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
    <image x="0" y="0" class="hero" href="@local(A231.jpg)" />

<text y="100" filter="url(#solid)">
<x-card.normalrule>Each player, including you,</x-card.normalrule>
<x-card.normalrule>may choose to draw a card.</x-card.normalrule>
<x-card.normalrule>{{ __('rules.REDRAW') }}</x-card.normalrule>
</text>
HTML;
    }
};
