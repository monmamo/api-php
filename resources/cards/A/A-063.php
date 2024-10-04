<?php
// https://www.freepik.com/free-vector/time-is-money-background_1014317.htm

return new
    #[\App\CardAttributes\FlavorText('The reward for investing with patience.')]
    #[\App\CardAttributes\ImageCredit('Image by photoroyalty on Freepik')]
    #[\App\Concept('Vendor')]
    #[\App\GeneralAttributes\Title('Dividends')]
    class implements \App\Contracts\Card\CardComponents {
use \App\CardAttributes\DefaultCardAttributes;
public function content(): \Traversable    {
yield <<<'HTML'
<image x="0" y="0" class="hero" href="@local(A135.jpg)" />
<x-card.phaserule type="Draw" lines="4"><text>
<x-card.normalrule>Turn your Discard pile face-down,</x-card.normalrule>
<x-card.normalrule>shuffle it, and draw 1d6 cards from it</x-card.normalrule>
<x-card.normalrule>without looking at them.</x-card.normalrule>
<x-card.normalrule>Shuffle those cards into your Library.</x-card.normalrule>
</text></x-card.phaserule>
HTML;
}
};
