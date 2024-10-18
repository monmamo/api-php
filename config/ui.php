<?php

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
        ['https://deviantart.com/monmamo" target="_blank" rel="noopener', 'DeviantArt'],
        ['https://github.com/monmamo" target="_blank" rel="noopener', 'GitHub'],
    ],
];

return \compact('home', 'world', 'products', 'community');
