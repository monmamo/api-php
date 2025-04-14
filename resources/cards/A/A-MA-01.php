<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageIsPrototype;
use App\CardAttributes\IsGeneratedImage;
use App\CardAttributes\Prerequisites;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('The Nerd (Male)')]
#[Concept('Master')]
#[Concept('Male')]
#[Concept('DamageCapacity', '12')]
#[Concept('Size', '4')]
#[Concept('Speed', '4')]
#[IsGeneratedImage('nerdy male anthropomorphic monster trainer')]
#[ImageIsPrototype]
#[Prerequisites(y: 460, lines: ['Limit 1 per player on Battlefield.'])]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    /**
     * @implements \App\Contracts\Card\CardComponents::background
     */
    public function background(): \Traversable
    {
        yield <<<'HTML'
<image x="0" y="0" href="@local(fullsize/A-MA-01.jpeg)" />
HTML;
    }

    public function content(): \Traversable
    {
        yield '';
    }
};
