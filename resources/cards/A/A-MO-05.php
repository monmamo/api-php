<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\Prerequisites;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

if (!\defined('PLAYER_LIMIT_PREREQUISITE')) {
    \define('PLAYER_LIMIT_PREREQUISITE', \trans_choice('rules.player-limit', 1));
}

return new
    #[Title('Neighborhood &#x201C;Protection&#x201D;')]
    #[Concept('Mobster')]
    #[Concept('Integrity', '4')]
    #[Concept('DamageCapacity', 15)]
    #[Concept('Size', 5)]
    #[Concept('Speed', 2)]
    #[ImageCredit('Image by fxquadro on Freepik')]
    #[FlavorText(['Nice monster team you got there.', 'Would be a shame if something happened to it.'])]
    #[Prerequisites(y: 525, lines: [PLAYER_LIMIT_PREREQUISITE])]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
    <x-card.hero.local>A186.jpg</x-card.hero.local>

    <x-card.phaserule type="Draw" lines="3">
        <text>
            <x-card.normalrule>During your opponents' Draw phase,</x-card.normalrule>
            <x-card.normalrule>they must let you draw a card of your own,</x-card.normalrule>
            <x-card.normalrule>or discard 2 of their own cards.</x-card.normalrule>
        </text>
    </x-card.phaserule>
HTML;
        }
    };
