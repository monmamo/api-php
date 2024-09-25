@props(['start'=>null,'end'=>null,'base'=>null,'dr'=>0,'dg'=>0,'db'=>0])

<?php
list($start,$end) =  match(true) {
    isset($start) && isset($end) => [\App\Enums\Color::rbgCode($start), \App\Enums\Color::rbgCode($end)],
    $base instanceof \App\Enums\Color =>       $base->gradiate($dr,$dg,$db),
is_string(    $base) => \App\Enums\Color::gradiantPairByName($base)
};

$id = sprintf("background-gradient-%s-%s",e($start),e($end));
?>

<defs>
    <linearGradient x1="0" x2="1" y1="1" y2="0" id="{{$id}}">
    <stop offset="0%" stop-color="{{$start}}" stop-opacity="1"></stop>
    <stop offset="100%" stop-color="{{$end}}" stop-opacity="1"></stop>
</linearGradient>
</defs>
<x-card.background fill="url(#{{$id}})" />


