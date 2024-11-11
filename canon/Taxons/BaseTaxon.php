<?php

namespace Canon\Taxons;

use App\Concerns\HasClassAttributes;
use App\Contracts\Taxon;
use Canon\Taxons\Attributes\Rarity;
use Canon\Taxons\Attributes\SizeDelta;

abstract class BaseTaxon implements Taxon
{
    use HasClassAttributes;

    private static function _rarityByClass(string $piece): float
    {
        $rarity = $piece::rarity();

        if (\method_exists($piece, 'subtaxons')) {
            $rarity *= $piece::subtaxons()[self::class];
        }

        return $rarity;
    }

    private static function _rarityByType(string $piece): float
    {
        $config = \config('taxon-distributions.' . $piece);
        return $config['rarity'] * ($config['taxons'][self::class] ?? 1);
    }

    public static function rarity(): float
    {
        $result = 1;

        foreach (self::classAttribute(Rarity::class)->pieces as $piece) {
            $result *= match (true) {
                \is_int($piece) => $piece,
                \is_float($piece) => $piece < 1 ? (1 / $piece) : $piece,
                \is_object($piece) => $piece::rarity(),
                \is_string($piece) => \class_exists($piece) ? self::_rarityByClass($piece) : self::_rarityByType($piece),
            };
        }
        return $result;
    }

    public static function sizeDelta(): float
    {
        $pieces = self::classAttribute(SizeDelta::class)?->pieces ?? [];

        $result = 0;

        foreach ($pieces as $piece) {
            $result += match (true) {
                \is_float($piece) => $piece,
                \is_int($piece) => $piece,
                \is_object($piece) => $piece::sizeDelta(),
                \is_string($piece) && \class_exists($piece) => $piece::sizeDelta(),
                default => \dd($pieces)
            };
        }
        return $result;
    }
}
