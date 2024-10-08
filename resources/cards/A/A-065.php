<?php

// https://www.notion.so/monmamo/Firebreath-570c6fc6a1b541928a7b4168293b2c6e?pvs=4#8b14c79fef304feaaacd808a2007baa7

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\IsGeneratedImage;
use App\CardAttributes\Prerequisites;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Firebreath')]
#[Concept('Trait')]
#[IsGeneratedImage]
#[FlavorText('Halitosis (A-110) is the least of your problems.')]
#[Prerequisites(lines: 'Requires Pyros.', y: 460)]
class implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<image x="0" y="0" class="hero" href="@local(hero/firebreath.jpeg)" />
<x-card.phaserule type="Resolution" lines="6">
<text>
<x-card.normalrule>When this Monster attacks or defends</x-card.normalrule>
<x-card.normalrule>and has 1+ Fire Mana cards attached & is </x-card.normalrule>
<x-card.normalrule>not already consuming Fire Mana,</x-card.normalrule>
<x-card.normalrule>the defending/attacking Monster takes </x-card.normalrule>
<x-card.normalrule>1d6-1 damage. If the defending/attacking Monster </x-card.normalrule>
<x-card.normalrule>takes any damage, discard 1 Fire Mana card from this Monster.</x-card.normalrule>
    </text>
    </x-card.phaserule>
HTML;
    }
};
