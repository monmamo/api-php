<?php
use Illuminate\Support\Str;

$base_path = resource_path("anthropes/$slug");
if (!is_dir($base_path)) abort(404);

?>
<x-guest-layout>
<p>HERO IMAGE</p>

<?= file_get_contents("$base_path/profile.html") ?>
<?= file_get_contents("$base_path/details.html") ?>
</x-guest-layout>
