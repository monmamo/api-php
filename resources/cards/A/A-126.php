<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Neighborhood &#x201C;Protection&#x201D;')]

    #[Concept('Mobster')]
     #[Concept('Integrity', '4')]

    #[ImageCredit('Image by fxquadro on Freepik')]

    #[FlavorText('Nice monster team you got there.', 'Would be a shame if something happened to it.')]

    class implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
    <image x="0" y="0" class="hero" href="@local(A186.jpg)" />
    <text y="525" filter="url(#solid)">
        <x-card.smallrule>{{ trans_choice('rules.battlefield-limit',1) }}</x-card.smallrule>
    </text>

    <x-card.phaserule type="Draw" lines="3">
        <text>
            <x-card.normalrule>During your opponents' Draw phase,</x-card.normalrule>
            <x-card.normalrule>they must let you draw a card of your own,</x-card.normalrule>
            <x-card.normalrule>or discard two of their own cards.</x-card.normalrule>
        </text>
    </x-card.phaserule>
HTML;
        }
    };
