<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\IsGeneratedImage;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('The Jock (Female)')]
#[Concept('Master')]
#[Concept('Female')]
#[Concept('DamageCapacity', 13)]
#[Concept('Size', 4)]
#[Concept('Speed', 4)]
#[IsGeneratedImage([])]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;
    use DefaultCardAttributes;

    /**
     * @implements \App\Contracts\Card\CardComponents::background
     */
    public function background(): \Traversable
    {
        yield <<<'HTML'
<image x="0" y="0" href="@local(fullsize/A-MA-04.jpeg)" />
HTML;
    }

    public function content(): \Traversable
    {
        yield '';
    }
};
