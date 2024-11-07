<?php
$singular = Str::singular($slot);
?>
<a href="/concepts/{{$singular}}" class="text-blue-500 hover:underline" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Top popover">{{$slot}}</a>
