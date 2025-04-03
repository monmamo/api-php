@props(['x'=>'50%'])
<tspan x="<?= $x ?>" dy="<?= config('card-design.primary_rule_height')+25 ?>"  font-family="'Roboto Condensed', sans-serif"
    font-size="45px"
    font-style="normal"
    text-align="center"
    text-anchor="middle"
    white-space="normal"
    fill="black"
    alignment-baseline="top"
>{{ $slot }}</tspan>
