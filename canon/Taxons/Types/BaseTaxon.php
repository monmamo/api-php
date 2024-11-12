<?php

namespace Canon\Taxons\Types;

use App\Concerns\HasClassAttributes;
use App\Contracts\Taxon;
use App\GeneralAttributes\Gloss;
use Canon\Taxons\Attributes\Parents;
use Canon\Taxons\Attributes\Rarity;
use Canon\Taxons\Attributes\SizeDelta;

abstract class BaseTaxon implements Taxon
{
    use HasClassAttributes;

    /**
     * @group unary
     */
    private static function _rarityByClass(string $piece): float
    {
        $rarity = $piece::rarity();

        if (\method_exists($piece, 'subtaxonRarity')) {
            $rarity *= \Canon\rarity($piece::subtaxonRarity(static::class));
        }

        return $rarity;
    }

    /**
     * @group unary
     */
    private static function _rarityByType(string $piece): float
    {
        $config = \config('taxon-distributions.' . $piece);
        return \Canon\rarity(
            $config['rarity'],
            ($config['taxons'][static::class] ?? 1),
        );
    }

    /**
     * @group nonary
     */
    public static function gloss(): ?string
    {
        return static::classAttribute(Gloss::class)?->gloss;
    }

    public static function parents(): array
    {
        return static::classAttribute(Parents::class)?->pieces ?? [];
    }

    /**
     * @group nonary
     */
    public static function rarity(): float
    {
        $result = 1;

        foreach (static::classAttribute(Rarity::class)?->pieces ?? [] as $piece) {
            $result *= match (true) {
                \is_string($piece) => \class_exists($piece) ? static::_rarityByClass($piece) : static::_rarityByType($piece),
                default => \Canon\rarity($piece)
            };
        }
        return $result;
    }

    /**
     * @group nonary
     */
    public static function sizeDelta(): float
    {
        return \Canon\sizeDelta(...static::classAttribute(SizeDelta::class)?->pieces ?? []);
    }
}
