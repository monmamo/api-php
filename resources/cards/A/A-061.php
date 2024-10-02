<?php

use App\CardAttributes\Concepts;
use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageCredit;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Dire Form')]
#[Concepts('Trait')]
#[ImageCredit('Image by freepik')] // https://www.freepik.com/free-vector/hand-drawn-werewolf-silhouette_59740170.htm
class implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<image x="100" y="0"  href="@local(hero/dire-form.png)" />
<text><x-card.normalrule>Size +5. Speed +3.</x-card.normalrule></text>
HTML;
    }
};
