<?php


return  new 
#[\App\GeneralAttributes\Title('Attack')]
#[\App\GeneralAttributes\Color(\App\Enums\Color::Red)]
class('Attack') extends \App\CardType
{




    public static function standardRule(): \Traversable
    {
        return new \EmptyIterator();
    }
};
