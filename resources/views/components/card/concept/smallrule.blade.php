<?php

global $rules_dy,$concept_cursor_x,$concept_cursor_y;

$rules_dy ??= 0;
$concept_cursor_x ??= 0;
$concept_cursor_y ??= 0;

?>
<tspan x="50%" dy="<?= config('card-design.secondary_rule_height') ?>" class="smallrule">{{ $slot }}</tspan>
<?php

$rules_dy += config("card-design.concept.standard-height");; 
