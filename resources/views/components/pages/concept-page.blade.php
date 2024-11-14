@props(['slug'])
<x-scripts.popover />

<?php

use Illuminate\Support\Str;

$path = resource_path("concepts/$slug/definition.html");
if (!file_exists($path)) abort(404);

$icon = resource_path("concepts/$slug/icon.blade.php");
$icon_credit_path = resource_path("concepts/$slug/icon-credit.html");
?>

<x-guest-layout>
    <x-breadcrumbs :items="['/concepts'=>'Concepts']" />

    <?php
    if (file_exists($icon)) {
    ?>
        <x-svg size="256" viewBox="0 0 512 512">
            <g fill="#000000"><?= file_get_contents($icon) ?></g>
        </x-svg>
    <?php
    }
    ?>

    <h1><?= Str::headline($slug) ?></h1>
    <?php
    echo file_get_contents($path);
    if (file_exists($icon) && file_exists($icon_credit_path)) {
    ?>
        <p>Icon credit: <?= file_get_contents($icon_credit_path) ?></p>
    <?php
    }
    ?>

    {{$slot}}
</x-guest-layout>
