@props(['count'])
<?php

global $rules_dy,$concept_cursor_x,$concept_cursor_y;

$rules_dy ??= 0;
$concept_cursor_x ??= 0;
$concept_cursor_y ??= 0;

?>
<rect x="0" y="{{$rules_dy}}" width="610" height="80" fill="#ffffff" fill-opacity="50%" />
<?php
echo $slot;

$rules_dy += 80; 


