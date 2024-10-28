<?php

return [[
    'name' => 'numeric',
    'pattern' => '/^\d+$/',
    'length-bits' => fn ($version) => match (true) {
        $version > 26 => 14,
        $version > 9 => 12,
        default => 10
    },
], [
    'name' => 'alphanumeric',
    'pattern' => '#^[\dA-Z $%*+\-.:\/]+$#',
    'length-bits' => fn ($version) => match (true) {
        $version > 26 => 13,
        $version > 9 => 11,
        default => 9
    },
], [
    'name' => 'Latin-1',
    'pattern' => '/^[\\x00-\\xff]*$/',
    'length-bits' => fn ($version) => match (true) {
        $version > 26 => 16,
        $version > 9 => 16,
        default => 8
    },
], [
    'name' => 'Kanji',
    'pattern' => '/^[\p{Script_Extensions=Han}\p{Script_Extensions=Hiragana}\p{Script_Extensions=Katakana}]*$/u',
    'length-bits' => fn ($version) => match (true) {
        $version > 26 => 12,
        $version > 9 => 10,
        default => 8
    },
]];
