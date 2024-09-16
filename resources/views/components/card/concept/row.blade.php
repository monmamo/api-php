<?php

global $rules_dy,$concept_cursor_x,$concept_cursor_y;

$rules_dy ??= 0;
$concept_cursor_x ??= 0;
$concept_cursor_y ??= 0;

echo $slot;

$rules_dy += config("card-design.concept.standard-height");; 


