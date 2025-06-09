<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\Prerequisites;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Conductivity')]
#[Concept('Trait')]
#[ImageCredit('Icon by Lorc on Game-Icons.net')]

#[Prerequisites(lines: 'Requires Energos.', y: 460)]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
            <x-card.hero.svg>{{ \view('Energos.icon') }}</x-card.hero.svg>

            <text>
    TODO
</text>
HTML;
    }
};
