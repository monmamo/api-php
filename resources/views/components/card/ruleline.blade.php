
@props(['x'=>'50%','source'=>null,'class'=>'normalrule'])
<?php
$source_actual = match(true) {
    $source instanceof \App\Concept => $source->standardRule(),
    $source instanceof \Traversable => $source,
    is_array($source) => $source,
    is_null($source) => \App\Strings\explode_lines( $slot ?? '')
};

$dy = match($class) {
    'normalrule' => 35,
    'smallrule' => 30,
    'skilltitle' => 50,
};

foreach ($source_actual  as $line) { 
    ?>
<tspan x="<?= $x ?>" dy="<?= $dy ?>" class="{{$class}}"><?= $line ?></tspan>
    <?php
}