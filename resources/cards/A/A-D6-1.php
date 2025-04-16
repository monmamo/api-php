<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[ImageCredit('Image by Delapouite on Game-Icons.net under CC BY 3.0')]
class(path: __FILE__,value:1) extends \App\Card\DiceRollCard
{
    public function heroSvg():string
    {
return <<<'HTML'
<path d="M74.5 36A38.5 38.5 0 0 0 36 74.5v363A38.5 38.5 0 0 0 74.5 476h363a38.5 38.5 0 0 0 38.5-38.5v-363A38.5 38.5 0 0 0 437.5 36h-363zM256 206a50 50 0 0 1 0 100 50 50 0 0 1 0-100z"></path>
HTML;
    }
};
