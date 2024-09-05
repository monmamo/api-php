<?php
return  new 
#[\App\GeneralAttributes\Title('Catastrophe')]
#[\App\GeneralAttributes\Color(\App\Enums\Color::CalamityColor)]
class ('Catastrophe') extends \App\CardType
{
    
    use \App\Concerns\ForCardType\Formatting;

    public static function standardRule(): \Traversable
    {
        yield 'Must be first card played in player’s turn.';
        yield 'Only one Catastrophe card may be played during any game.';
        yield 'Place this card in the center of the Battlefield.';
    }
};
