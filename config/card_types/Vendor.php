<?php
return  new 
#[\App\GeneralAttributes\Title('Vendor')]
#[\App\GeneralAttributes\Color(\App\Enums\Color::GameActionColor)]
class ("Vendor") extends \App\CardType
{
    public static function standardRule(): \Traversable
    {
        yield 'After playing, put this card on the bottom of your Library.';
    }
};
