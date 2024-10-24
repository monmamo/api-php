<?php

namespace App;

define('TODO', 'TODO');

$dir = new \RecursiveDirectoryIterator(__DIR__);
$ite = new \RecursiveIteratorIterator($dir);
$files = new \RegexIterator(
    $ite,
    '/.+\/functions\.php$/i',
    \RegexIterator::GET_MATCH,
);

foreach ($files as $file) {
    require_once $file[0];
}
