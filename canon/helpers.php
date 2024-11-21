<?php

namespace Canon;

/**
 * @group variadic
 */
function concepts(): \Traversable
{
    return \collect(\scandir(\base_path('canon/concepts')));
};

/**
 * @group variadic
 */
function taxons(): \Traversable
{
    return \collect(\scandir(\base_path('canon/Taxons')))
        ->filter(fn ($file) => \str_ends_with($file, '.php') && $file !== 'BaseTaxon.php' && $file !== 'functions.php')
        ->map(fn ($file) => \str_replace('.php', '', $file));
};

/**
 * @group variadic
 */
function rarity(...$pieces): float
{
    $result = 1;

    foreach ($pieces as $piece) {
        $result *= match (true) {
            \is_int($piece) => $piece,
            \is_float($piece) => $piece < 1 ? (1 / $piece) : $piece,
            \is_object($piece) => $piece::rarity(),
        };
    }
    return $result;
}

/**
 * @group variadic
 */
function sizeDelta(...$pieces): float
{
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
