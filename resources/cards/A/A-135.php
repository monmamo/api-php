<?php
// https://www.freepik.com/free-vector/time-is-money-background_1014317.htm

return new
    #[\App\GeneralAttributes\Title('Investment')]
    #[\App\Concept('Draw')]
    #[\App\CardAttributes\ImageCredit('Image by photoroyalty on Freepik')]
    #[\App\CardAttributes\FlavorText('Past performance is not indicative of future results.')]
    class implements \App\Contracts\Card\CardComponents {
use \App\CardAttributes\DefaultCardAttributes;
public function content(): \Traversable    {
yield <<<'HTML'
    <image x="0" y="0" class="hero" href="@local(A135.jpg)" />

    <x-card.phaserule type="Draw" y="610" lines="2"><text>
            <x-card.normalrule>Put any number of cards </x-card.normalrule>
                <x-card.normalrule>facedown on the Battlefield.</x-card.normalrule>
        </text></x-card.phaserule>

        <x-card.phaserule type="Resolution" lines="2"><text>
            <x-card.normalrule>Draw 1d6-1 cards for each facedown</x-card.normalrule>
            <x-card.normalrule>card. Discard the facedown cards.</x-card.normalrule>
        </text></x-card.phaserule>

HTML;
}
};
