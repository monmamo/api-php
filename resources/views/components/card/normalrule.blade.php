
@props(['x'=>'50%'])
<tspan x="<?= $x ?>" dy="<?= config('card-design.primary_rule_height') ?>" class="bodytext">{{ $slot }}</tspan>