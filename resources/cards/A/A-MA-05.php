<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\IsGeneratedImage;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('The Brute')]
#[Concept('Master')]
#[Concept('Male')]
#[Concept('DamageCapacity', 15)]
#[Concept('Size', 5)]
#[Concept('Speed', 2)]
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
<image x="0" y="0" href="@local(fullsize/A-MA-05.png)" />
HTML;
    }

    public function content(): \Traversable
    {
        yield '';
    }
};
