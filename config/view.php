<?php

use App\Enums\CardSet;

// View Storage Paths
$paths = [
    \resource_path('views'),
    \base_path('canon/concepts'),
];

foreach (CardSet::cases() as $set) {
    $paths[] = \resource_path('cards/' . $set->value);
}

// Compiled View Path
// This option determines where all the compiled Blade templates will be stored for your application. Typically, this is within the storage directory. However, as usual, you are free to change this value.
$compiled = \realpath(\storage_path('framework/views'));

return \compact('paths', 'compiled');
