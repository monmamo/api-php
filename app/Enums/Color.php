<?php

namespace App\Enums;

// a nice gold for future use:  '#705420';

enum Color: string
{
    case Aquos = '#00A2FF';
    case Attack = '#6D0000';
    case AttackGradientBottom = '#390000';
    case AttackGradientTop = '#A10000';
    case Black = '#000000';
    case Blue = '#0000FF';
    case Brown = '#A52A2A';
    case CalamityColor = 'orange';
    case CharacterColor = '#282828';
    case CharacterGradientBottom = '#010101';
    case CharacterGradientTop = '#4f4f4f';
    case DrawBackgroundColor = '#653294';
    case Energos = '#FFD700';
    case EnvironmentColor = '#003300';
    case GameActionColor = '#427900';
    case GameActionGradientBottom = '#305a00';
    case GameActionGradientTop = '#549800';
    case Green = '#00FF00';
    case ItemColor = '#222222';
    case ItemGradientBottom = '#020202';
    case ItemGradientTop = '#424242';
    case Orange = '#FFA500';
    case Pink = '#FFC0CB';
    case PlaceColor = '#705420';
    case Purple = '#800080';
    case Pyros = '#FFA457';
    case Red = '#FF0000';
    case TraitColor = '#400060';
    case White = '#FFFFFF';
    case Yellow = '#FFFF00';

    /**
     * @group unary
     */
    public static function explodeRBG(string $value): array
    {
        return \sscanf($value, '#%02x%02x%02x');
    }

    /**
     * @group unary
     */
    public static function gradiantPairByName(string $name): array
    {
        return [Color::{$name . 'GradientBottom'}, Color::{$name . 'GradientTop'}];
    }

    /**
     * @group trinary
     */
    public function gradiate(int $dr, int $dg, int $db): array
    {
        [$r, $g, $b] = \sscanf($this->value, '#%02x%02x%02x');
        \assert($r >= $dr);
        \assert($g >= $dg);
        \assert($b >= $db);
        return [
            \sprintf('#%02x%02x%02x', $r - $dr, $g - $dg, $b - $db),
            \sprintf('#%02x%02x%02x', $r + $dr, $g + $dg, $b + $db),
        ];
    }

    /**
     * @group nonary
     */
    public function gradiateByName(): array
    {
        return self::gradiantPairByName($this->name);
    }

    /**
     * @group trinary
     */
    public static function implodeRBG(int $r, int $g, int $b): string
    {
        return \sprintf('#%02x%02x%02x', $r, $g, $b);
    }

    /**
     * @group trinary
     */
    public function makeBrighter(int $dr, int $dg, int $db): string
    {
        [$r, $g, $b] = \sscanf($this->value, '#%02x%02x%02x');
        \assert($r + $dr <= 255);
        \assert($g + $dg <= 255);
        \assert($b + $db <= 255);
        return \sprintf('#%02x%02x%02x', $r + $dr, $g + $dg, $b + $db);
    }

    /**
     * @group unary
     */
    public function makeBrighterByScale($scale = 0.5): string
    {
        $scale_as_float = self::unwrapScale($scale);
        \assert($scale_as_float >= 0);
        \assert($scale_as_float <= 1);

        return self::withRBG(
            $this->value,
            self::withEach(fn ($value) => $value + (255 - $value) * $scale_as_float),
        );
    }

    /**
     * @group trinary
     */
    public function makeDarker(int $dr, int $dg, int $db): string
    {
        [$r, $g, $b] = \sscanf($this->value, '#%02x%02x%02x');
        \assert($r >= $dr);
        \assert($g >= $dg);
        \assert($b >= $db);
        return \sprintf('#%02x%02x%02x', $r - $dr, $g - $dg, $b - $db);
    }

    /**
     * @group unary
     */
    public function makeDarkerByScale($scale = 0.5): string
    {
        $scale_as_float = self::unwrapScale($scale);
        \assert($scale_as_float >= 0);
        \assert($scale_as_float <= 1);

        return self::withRBG(
            $this->value,
            self::withEach(fn ($value) => $value * $scale_as_float),
        );
    }

    /**
     * @group unary
     */
    public static function rbgCode($value): string
    {
        return match (true) {
            \is_string($value) => $value,
            $value instanceof self => $value->value,
        };
    }

    /**
     * @group unary
     */
    public static function unwrapScale($value): float
    {
        return match (true) {
            \is_float($value) => \value(function () use ($value) {
                return $value;
            }),
            \is_string($value) => \value(function () use ($value) {
                if (\str_ends_with($value, '%')) {
                    return self::unwrapScale(\substr($value, 0, -1));
                }

                if (\is_numeric($value)) {
                    return (float) $value;
                }
                throw new \AssertionError();
            })
        };
    }

    /**
     * @group unary
     */
    public static function withEach($transform): \Closure
    {
        return fn (...$values) => \array_map($transform, $values);
    }

    /**
     * @group binary
     */
    public static function withRBG(string $value, $callback): string
    {
        return self::implodeRBG(...$callback(...self::explodeRBG($value)));
    }
}
