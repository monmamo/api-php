<?php
use Illuminate\Support\Str;

$base_path = resource_path("monsters/$slug");
if (!is_dir($base_path)) abort(404);

?>
<x-guest-layout>
<p>HERO IMAGE</p>

<p><x-icons.inline.concept size="30">Male</x-icons.inline.concept> Male</p>
<p><x-icons.inline.concept size="30">DamageCapacity</x-icons.inline.concept> Damage Capacity 70</p>
<p><x-icons.inline.concept size="30">Level</x-icons.inline.concept> Level 30</p>

</x-guest-layout>
