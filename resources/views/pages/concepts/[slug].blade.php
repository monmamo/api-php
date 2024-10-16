<?php
use Illuminate\Support\Str;

$path = resource_path("concepts/$slug/definition.html");
if (!file_exists($path)) abort(404);

$icon = resource_path("concepts/$slug/icon.blade.php");
?>
<x-guest-layout>
<?php
if(file_exists($icon)) {
    ?>
<x-svg size="256" viewBox="0 0 512 512"><g fill="#000000"><?= file_get_contents($icon) ?></g></x-svg>
<?php
}
?>

<h1><?= Str::headline($slug) ?></h1>
<?= file_get_contents($path) ?>
</x-guest-layout>
