<?php

return new
#[\App\GeneralAttributes\Title('Financial Planner')]

    #[\App\Concept('Vendor')]



    #[\App\CardAttributes\ImageCredit('Image by photoroyalty on Freepik')]
    'image-source' => 'https://www.freepik.com/free-vector/time-is-money-background_1014317.htm',


    'background' => \view('Vendor.background'),
    class implements \App\Contracts\Card\CardComponents {
use \App\CardAttributes\DefaultCardAttributes;
public function content(): \Traversable    {
yield <<<'HTML'
#[\App\CardAttributes\LocalHeroImage('A135.jpg')]
<x-card.phaserule type="Draw" lines="5" badge="Repeat">
    <text >
    <x-card.normalrule>Turn your Discard pile face-down,</x-card.normalrule>
<x-card.normalrule>shuffle it, and draw 1d4 cards from it</x-card.normalrule>
<x-card.normalrule>without looking at them.</x-card.normalrule>
<x-card.normalrule>Shuffle those cards into your Library.</x-card.normalrule>
<x-card.normalrule>{{ __('rules.REDRAW') }}</x-card.normalrule>
    </text>
</x-card.phaserule>
HTML;
}
};
