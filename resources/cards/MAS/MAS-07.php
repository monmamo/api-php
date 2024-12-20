<?php

use App\CardAttributes\DefaultCardAttributes;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

// inspiration: Energy Flow PTCG card https://bulbapedia.bulbagarden.net/wiki/Energy_Flow_(Gym_Heroes_122)
return new
#[Title('Mana Flow')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
     <x-card.phaserule type="Upkeep" height="240">
       <text >
<x-card.normalrule>For each of your Monsters,</x-card.normalrule>
<x-card.normalrule>you may return any number of Mana</x-card.normalrule>
<x-card.normalrule>cards attached to it to your hand.</x-card.normalrule>
</text>
 </x-card.phaserule>
HTML;
    }
};
