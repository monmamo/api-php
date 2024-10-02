<?php

// https://www.notion.so/monmamo/Firebreath-570c6fc6a1b541928a7b4168293b2c6e?pvs=4#8b14c79fef304feaaacd808a2007baa7

use App\CardAttributes\Concepts;
use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\IsGeneratedImage;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Firebreath')]
#[Concepts('Trait')]
#[IsGeneratedImage]
#[FlavorText('Halitosis (A-110) is the least of your problems.')]
class implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<image x="0" y="0" class="hero" href="@local(hero/firebreath.jpeg)" />

    <x-slot:small>Requires Pyros.</x-slot:small>
<text>    
<x-card.normalrule>When this Monster attacks or defends</x-card.normalrule>
<x-card.normalrule>and has 1+ Fire Mana cards attached & is </x-card.normalrule>
<x-card.normalrule>not already consuming Fire Mana,</x-card.normalrule>
<x-card.normalrule>the defending/attacking Monster takes </x-card.normalrule>
<x-card.normalrule>1d6-1 damage. If the defending/attacking Monster </x-card.normalrule>
<x-card.normalrule>takes any damage, discard 1 Fire Mana card from this Monster.</x-card.normalrule>
    </text>

HTML;
    }
};
