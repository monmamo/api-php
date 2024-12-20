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
        ['/lore/monsters', 'Monsters'],
        ['/lore/anthropes', 'Anthropes'],
        ['/taxons', 'Taxonomy'],
        ['/lore/places', 'Places'],
        ['/lore/organizations', 'Organizations'],
        ['/lore/stories', 'Stories'],
    ],
];

$products = [
    'title' => 'Products',
    'links' => [
        ['/cards', 'Cards'],
        ['/cg', 'Card Game'],
        ['/ttrpg', 'Tabletop Role Playing Game'],
        ['/orpg', 'Online Role Playing Game'],
    ],
];

$community = [
    'title' => 'Community',
    'links' => [
        ['/community" target="_blank" rel="noopener', 'Rules'],
        [\config('external.deviantart.url') . '" target="_blank" rel="noopener', 'DeviantArt'],
        [\config('external.discord.url') . '" target="_blank" rel="noopener', 'Discord'],
        [\config('external.github.url') . '" target="_blank" rel="noopener', 'GitHub'],
        [\config('external.patreon.url') . '" target="_blank" rel="noopener', 'Patreon'],
        [\config('external.reddit.url') . '" target="_blank" rel="noopener', 'Reddit'],
    ],
];

$card_sets = [];

foreach (CardSet::cases() as $set) {
    $card_sets['/cards/set/' . $set->value] = \sprintf('%s (%s)', $set->name, $set->value);
}

$decks = [
    '/cards/deck/sdv1' => 'SDV',
    '/cards/deck/pdv-energos' => 'PDV Energos',
    '/cards/deck/pdv-pyros' => 'PDV Pyros',
    '/cards/deck/pdv-aquos' => 'PDV Aquos',
];

return \compact('home', 'world', 'products', 'community', 'card_sets', 'decks');
