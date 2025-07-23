<?php

use App\Enums\CardSet;

$home = [
    'title' => 'Home',
    'url' => '/',
    'links' => [
        ['/news', 'News'],
        ['/lore', 'Lore'],
        ['/events', 'Events'],
        ['/gallery', 'Gallery'],
    ],
];

$world = [
    'title' => 'World',
    'links' => [
        ['/lore', 'Lore'],
        //        ['/lore/monsters', 'Monsters'],
        //      ['/lore/anthropes', 'Anthropes'],
        ['/taxons', 'Taxonomy'],
        //    ['/lore/places', 'Places'],
        //  ['/lore/organizations', 'Organizations'],
    ],
];

$products = [
    'title' => 'Products',
    'links' => [
        ['/cards', 'Card System'],
        ['cg'],
        // ['/ms', 'Mean Streets Card Game'],
        // ['/rlr', 'Raid on Leaser Ridge'],
        // ['/rcs', 'Race for the Championship'],
        // ['/ttrpg', 'Tabletop Role Playing Game'],
        // ['/orpg', 'Online Role Playing Game'],
    ],
];

$community = [
    'title' => 'Community',
    'links' => [
        ['/community', 'Rules'],
        //  [\config('external.deviantart.url') , 'DeviantArt',true],
        [\config('external.discord.url'), 'Discord', true],
        [\config('external.patreon.url'), 'Patreon', true],
        [\config('external.github.url'), 'GitHub', true],
        [\config('external.reddit.url'), 'Reddit', true],
    ],
];

$card_sets = [];

foreach (CardSet::cases() as $set) {
    $card_sets['/cards/set/' . $set->value] = \sprintf('%s (%s)', $set->name, $set->value);
}

$decks = [
    '/cg/decks/sdv1' => 'SDV',
    '/cg/decks/pdv-energos' => 'PDV Energos',
    '/cg/decks/pdv-pyros' => 'PDV Pyros',
    '/cg/decks/pdv-aquos' => 'PDV Aquos',
];

return \compact('home', 'world', 'products', 'community', 'card_sets', 'decks');
