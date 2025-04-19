<?php

use App\Card\DiceRollCard;
use App\CardAttributes\ImageCredit;

return new
#[ImageCredit('Image by Delapouite on Game-Icons.net under CC BY 3.0')]
class(path: __FILE__, value: 2) extends DiceRollCard
{
    public function heroSvg(): string
    {
        return <<<'HTML'
<path d="M74.5 36A38.5 38.5 0 0 0 36 74.5v363A38.5 38.5 0 0 0 74.5 476h363a38.5 38.5 0 0 0 38.5-38.5v-363A38.5 38.5 0 0 0 437.5 36h-363zm316.97 36.03A50 50 0 0 1 440 122a50 50 0 0 1-100 0 50 50 0 0 1 51.47-49.97zm-268 268A50 50 0 0 1 172 390a50 50 0 0 1-100 0 50 50 0 0 1 51.47-49.97z"></path>
HTML;
    }
};
