<?php
return  new
#[\App\GeneralAttributes\Title('Upkeep')]
#[\App\GeneralAttributes\Color(\App\Enums\Color::GameActionColor)]
 class('Upkeep')  extends \App\CardType
{


    public static function standardRule(): \Traversable
    {
        return new \EmptyIterator();
    }
};
