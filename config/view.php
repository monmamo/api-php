<?php

// View Storage Paths
$paths = [
    \resource_path('views'),
    \resource_path('concepts'),
    \resource_path('cards'),
];

// Compiled View Path
// This option determines where all the compiled Blade templates will be stored for your application. Typically, this is within the storage directory. However, as usual, you are free to change this value.
$compiled = \realpath(\storage_path('framework/views'));

return \compact('paths', 'compiled');
