<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Title('Neighborhood &#x201C;Protection&#x201D;')]
    #[Concept('Mobster')]
    #[Concept('Integrity', '4')]
    #[Concept('DamageCapacity', 15)]
    #[Concept('Size', 5)]
    #[Concept('Speed', 2)]
    #[Concept('Training', '?')]
    #[ImageCredit('Image by fxquadro on Freepik')]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
    <x-card.hero.local>A186.jpg</x-card.hero.local>

    <x-card.flavortext>
    <x-card.flavortext.line dy="0">Nice monster team you got there.</x-card.flavortext.line>
    <x-card.flavortext.line>Would be a shame if something happened to it.</x-card.flavortext.line>
    </x-card.flavortext>

    <x-card.phaserule type="Draw" >
        <text>
        <x-card.ruleline class="smallrule">{{\trans_choice('rules.player-limit', 1)}}</x-card.ruleline>
            <x-card.ruleline>Each other player loses 2 Training Points.</x-card.ruleline>
            <x-card.ruleline>You gain the Training Points</x-card.ruleline>
            <x-card.ruleline>lost by other players.</x-card.ruleline>
        </text>
    </x-card.phaserule>
HTML;
        }
    };
