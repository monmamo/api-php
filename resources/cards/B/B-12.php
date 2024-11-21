<?php
use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\LocalHeroImage;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Title('Impostor Syndrome')]
    #[Concept('Bane')]
    #[Concept('Mental')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<text y="500" filter="url(#solid)">
        <x-card.smallrule>{{trans_choice('rules.monster-limit',1)}}</x-card.smallrule>
        </text >

    <x-card.phaserule type="Resolution" height="135">
        <text >
            <x-card.normalrule>Attack -1d6.</x-card.normalrule>
                <x-card.normalrule>Defense -1d6.</x-card.normalrule>
    </text>
</x-card.phaserule>
HTML;}};
