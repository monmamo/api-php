<?php

global $rules_dy,$concept_cursor_x,$concept_cursor_y;

$rules_dy ??= 0;
$concept_cursor_x ??= 0;
$concept_cursor_y ??= 0;

?>
<tspan x="50%" dy="30px" class="smallrule">{{ $slot }}</tspan>
<?php

$rules_dy += config("card-design.concept.standard-height");; 
