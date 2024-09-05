<?php
return  new 
#[\App\GeneralAttributes\Title('Place')]
#[\App\GeneralAttributes\Color(\App\Enums\Color::PlaceColor)]
class('Place')  extends \App\CardType
{



    public static function standardRule(): \Traversable
    {
        return new \EmptyIterator();
    }

};
