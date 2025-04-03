
@props(['x'=>'50%'])
<tspan x="<?= $x ?>" dy="<?= config('card-design.primary_rule_height') ?>" 
    font-style="normal"
    font-size="30px"
    text-align="center"
    text-anchor="middle"
    white-space="normal"
    fill="black"
    alignment-baseline="middle"

    >{{ $slot }}</tspan>