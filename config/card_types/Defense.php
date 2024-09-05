<?php
return  new 
#[\App\GeneralAttributes\Title('Defense')]
#[\App\GeneralAttributes\Color(\App\Enums\Color::CharacterColor)]
class ('Defense') extends \App\CardType
{
    use \App\Concerns\ForCardType\Formatting;

    public static function standardRule(): \Traversable
    {
        yield 'Can be played only as a response to an Attack.';
    }

};
