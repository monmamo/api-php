@props(['source'=>null])
<?php
$source_actual = match(true) {
    $source instanceof \App\Concept => $source->standardRule(),
    $source instanceof \Traversable => $source,
    is_array($source) => $source,
    is_null($source) => \App\Strings\explode_lines( $slot ?? '')
};

// 

foreach ($source_actual  as $line) { 
    ?>
<tspan x="50%" dy="<?= config('card-design.secondary_rule_height') ?>" class="smallrule">{{ $line }}</tspan>
<?php
}