<?php

use App\CardAttributes\DefaultCardAttributes;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Salt')]
#[Concept('Material')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<text x="50%" y="30%" dominant-baseline="middle" text-anchor="middle" font-size="300" fill="#fff" fill-opacity="1">NaCl</text>
HTML;
    }
};
