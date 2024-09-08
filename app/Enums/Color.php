<?php
namespace App\Enums;
enum Color: string
{
    case Black = '#000000';
    case Blue = '#0000FF';
    case Brown = '#A52A2A';
    case DrawBackgroundColor = '#653294';
    case Green = '#00FF00';
    case Orange = '#FFA500';
    case Pink = '#FFC0CB';
    case Purple = '#800080';
    case Red = '#FF0000';
    case TraitColor = '#400060';
    case White = '#FFFFFF';
    case Yellow = '#FFFF00';
    case CalamityColor = 'orange';
    case GameActionColor = '#427900';
    case ItemColor = '#222222';
    case EnvironmentColor = '#003300';
    case PlaceColor = '#E25420';
    case Pyros = '#FFA457';
    case Aquos = '#00A2FF';
    case Energos = '#FFD700';
    case Attack = '#6D0000';
    case AttackGradientBottom = '#390000';
    case AttackGradientTop = '#A10000';
    case CharacterColor = '#282828';
    case CharacterGradientBottom = '#010101';
    case CharacterGradientTop = '#4f4f4f';

    public static function rbgCode($value):string {
        return match(true) {
            is_string($value) => $value,
            $value instanceof self => $value->value,        
        };
    }
}
