<?php

namespace App\Enums;

use App\GeneralAttributes\Gloss;

// a nice gold for future use:  '#705420';

enum Color: string
{
    #[Gloss('Clean, hygienic interface white, with slight gray-blue undertone.')]
    case AdminFrost = '#F5F7F9';

    case Aquos = '#00A2FF';

    #[Gloss('Soft paper/ivory tone; feels like filing cabinets and well-lit office floors.')]
    case ArchiveCream = '#E8E4D8';

    #[Gloss('Light neutral for contrast and background texture. (Blends Admin Frost + Milkglass + Carrion White)')]
    case AshIvory = '#ECE6DC';

    case Attack = '#6D0000';
    case AttackGradientBottom = '#390000';
    case AttackGradientTop = '#A10000';

    #[Gloss('Used for deep shadows, suits, black glass; projects authority and fear.')]
    case AuthoritarianInk = '#151515';

    case BaneColor = '#797c00';
    case BaneGradientBottom = '#3c2600';
    case BaneGradientTop = '#b57200';

    #[Gloss('For highlighting toxic magic, rare monsters, or underground scenes')]
    case BiolumeAcid = '#83E37D';

    case Black = '#000000';
    case Blue = '#0000FF';

    #[Gloss('Earthy red-brown, evokes warm brick homes, local factories.')]
    case BrickDust = '#B2583C';

    #[Gloss('A gritty earth-red used in storytelling, faction flags, map elements')]
    case BrickRust = '#B24C32';

    case Brown = '#A52A2A';
    case Bystander = '#303000';
    case CalamityColor = 'orange';

    #[Gloss('Magical realism accent—used in monster power FX, sanctioned technology, UI glows')]
    case CaveShadow = '#1C1C1C';

    case CharacterColor = '#282828';
    case CharacterGradientBottom = '#010101';
    case CharacterGradientTop = '#4f4f4f';

    #[Gloss('A vibrant orange-red accent used in monster gear, team logos, lunchboxes.')]
    case CitrusEmber = '#F76F3E';

    case Defense = '#00006D';
    case DefenseGradientBottom = '#000039';
    case DefenseGradientTop = '#0000A1';
    case DrawActionColor = '#1e3e60';
    case DrawActionGradientBottom = '#152c80';
    case DrawActionGradientTop = '#275040';
    case DrawBackgroundColor = '#653294';
    case Energos = '#FFD700';
    case EnvironmentColor = '#003300';

    #[Gloss('Deep neutral gray with a cold blue undertone; evokes concrete, steel, glass.')]
    case ExecutiveSteel = '#2B2F38';

    case GameActionColor = '#428000';
    case GameActionGradientBottom = '#300000';
    case GameActionGradientTop = '#54ff00';

    #[Gloss('Neutral green for monster habitats, resource icons, natural cues')]
    case GardenFeral = '#86A87B';

    #[Gloss('Muted green, evokes vegetable plots, monster stables, home gardens.')]
    case GardenSage = '#9CAF88';

    #[Gloss('Rich gold-yellow, used in kitchens, signage, and casual clothes.')]
    case GoldenOat = '#D9A441';

    case Green = '#00FF00';

    #[Gloss('A deep desaturated indigo-black. Base for backgrounds, UI, and serious tone. (Derived from First & Third World shadows)')]
    case GrimeIndigo = '#2E2A36';

    #[Gloss('Pale brown-pink; the color of comfort, dusty upholstery, hand-me-downs.')]
    case HearthTan = '#D1B79E';

    #[Gloss('Used sparingly in titles/logos; signifies power, prestige, sport trophies. (From First World "Tinted Brass")')]
    case IndustrialGold = '#C29E52';

    case ItemColor = '#222222';
    case ItemGradientBottom = '#020202';
    case ItemGradientTop = '#424242';
    case Master = '#006000';

    #[Gloss('Off-white, just warm enough to feel lived-in.')]
    case Milkglass = '#F4F2EC';

    case Mobster = '#600000';

    #[Gloss('Washed-out green, like old security terminals or municipal paint.')]
    case MonotoneMint = '#98B7A1';

    case Monster = '#600060';

    #[Gloss('A hot, red-orange accent for CTAs and highlights. Evokes monsters, violence, spectacle. (Pulled from Second + Third World vibrancy)')]
    case MonsterEmber = '#F75A3D';

    #[Gloss('Futuristic blue; soft neon used sparingly in interfaces, light panels, badges.')]
    case NeonAzure = '#3FBFFF';

    case Orange = '#FFA500';
    case Pink = '#FFC0CB';
    case PlaceColor = '#705420';

    #[Gloss('Shiny silver-white, conveys wealth, institutional polish.')]
    case PlatinumGlare = '#C7C8CA';

    case Purple = '#800080';
    case Pyros = '#FFA457';
    case Red = '#FF0000';
    case Skill = '#6d006d';
    case SkillGradientBottom = '#390039';
    case SkillGradientTop = '#A100A1';

    #[Gloss('Blood, crime, underground arenas. Should not be overused.')]
    case SpoilRed = '#891E1E';

    #[Gloss('Cool desaturated blue for maps, calm interfaces, nostalgia')]
    case SuburbanBlue = '#A0BFD5';

    #[Gloss('Pale brass-gold; symbol of achievement, access, and power.')]
    case TintedBrass = '#C6A664';

    case TraitColor = '#400060';

    #[Gloss('Mid-dark neutral gray-brown, solid and unpretentious.')]
    case WarmAsphalt = '#4F4A47';

    case White = '#FFFFFF';
    case Yellow = '#FFFF00';

    public function asRBG(): array
    {
        return self::explodeRBG($this->value);
    }

    public function contrastColor(): string
    {
        return self::getContrastColor(...\array_map('hexdec', $this->asRBG()));
    }

    /**
     * @group unary
     */
    public static function explodeRBG(string $value): array
    {
        return \sscanf($value, '#%02x%02x%02x');
    }

    public static function getContrastColor(int $r, int $g, int $b)
    {
        // Calculate relative luminance using the formula recommended by W3C
        $luminance = (0.299 * $r + 0.587 * $g + 0.114 * $b);

        // If the luminance is high, use black text; otherwise, use white text
        return ($luminance > 186) ? 'black' : 'white';
    }

    /**
     * @group unary
     */
    public static function gradiantPairByName(string $name): array
    {
        return [
            \constant(Color::class . '::' . $name . 'GradientBottom'),
            \constant(Color::class . '::' . $name . 'GradientTop'),
        ];
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

    public static function resolve($value): self
    {
        if (\is_string($value) && \str_starts_with($value, '#')) {
            return self::from(value: $value);
        }

        // Assume the string is a color name.
        if (\is_string($value)) {
            return \constant(self::class . '::' . \str_replace(' ', '', $value));
        }

        if ($value instanceof self) {
            return $value;
        }

        throw new \InvalidArgumentException('Invalid color value: ' . \var_export($value, true));
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
