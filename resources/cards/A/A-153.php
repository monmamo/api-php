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
#[Title('Fireball')]
#[Concept('Attack')]
#[IsGeneratedImage]
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
<x-card.normalrule>Discard any number of Fire cards attached to this Monster, Does 1d6 for each Fire card discarded.</x-card.normalrule>
    </text>
    </x-card.phaserule>
HTML;
    }
};
