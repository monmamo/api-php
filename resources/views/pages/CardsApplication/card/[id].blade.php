<?php

use Stats\DamageCapacity;
use Stats\Integrity;
use Stats\Level;
use Stats\Size;
use Stats\Speed;

$jsonFiles = \glob("specs/*/{$id}.json");

if (\count($jsonFiles) === 0) {
    exit("Card {$id} not found.");
}

$data = \json_decode(\file_get_contents($jsonFiles[0]), true);

if ($data === null) {
    exit("Error decoding JSON for card {$id} from file {$jsonFiles[0]}.");
}

\extract($data);

