<?php
$jsonFiles = \glob('specs/*/*.json');

// Iterate through each .json file
foreach ($jsonFiles as $file) {
    if ($file[0] === '_') {
        continue;
    }

    $card_id = \pathinfo($file, \PATHINFO_FILENAME);
    echo "<a href=\"?card_id={$card_id}\">{$card_id}</a> ";
}
