@props(['source'=>null])
<?php
foreach ($source ?? \App\Strings\explode_lines( $slot ?? '') as $line) { 
    ?>
<tspan x="50%" dy="<?= config('card-design.secondary_rule_height') ?>" class="smallrule">{{ $line }}</tspan>
<?php
}