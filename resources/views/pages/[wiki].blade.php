<?php
use Illuminate\Support\Str;

$wiki = urldecode($wiki);

$configuration = config('wiki.pages')[$wiki] ?? null;
if (is_null($configuration)) abort(404);

if (Str::startsWith($configuration, 'lore/')) {
 redirect()->to('/' . $configuration)->send();
    exit;
}

if(!file_exists(base_path("$configuration/profile.html"))) abort(404);

?>
<x-guest-layout>
<?= file_get_contents(base_path("$configuration/profile.html")) ?>
<?= file_exists(base_path("$configuration/details.html")) ? file_get_contents(base_path("$configuration/details.html")) : '' ?>
</x-guest-layout>
