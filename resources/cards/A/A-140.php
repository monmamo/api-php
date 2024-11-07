<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

// inspiration:: Giovanni's Last Resort PTCG card https://bulbapedia.bulbagarden.net/wiki/Giovanni%27s_Last_Resort_(Gym_Challenge_105)
return new
    #[Title('Last Resort')]
    #[FlavorText('Now is not the time to panic.')]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
    <x-card.phaserule type="Upkeep" lines="4"><text>
    <x-card.normalrule>Discard your hand.</x-card.normalrule>
<x-card.normalrule>Then remove all Damage </x-card.normalrule>
    <x-card.normalrule>from one of your Monsters.</x-card.normalrule>
    </text></x-card.phaserule>
HTML;
        }
    };
