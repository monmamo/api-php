<?php
use Illuminate\Support\Facades\Blade;

// no @props here, they're defined in \App\View\Components\Card

$rules_dy = 0;
?>

<x-svg :$dx :$dy :id="$cardNumber" :width="config('card-design.width')" :height="config('card-design.height')">

    <title><?= $cardName ?></title>

@unless($omitCommon)
@once
<x-card.common />
@endonce
@endunless

{{-- //////////////////////// --}}

    <rect id="absolute-bounds" x="0" y="0"  width="@cardspec(width)" height="@cardspec(height)"  fill-opacity="0" stroke="#808080" rx="75"/>

<?php
echo implode([...$background()]);

echo $flavorText();

// The bodybox is a viewbox minus the titlebox.
$bodybox_width = config("card-design.viewbox.width");
$bodybox_height = config("card-design.viewbox.height")-config("card-design.titlebox.height");

$bodybox_attributes = [
    'id'=>"bodybox",
    'x' => config("card-design.viewbox.x"),
    'y' =>  config("card-design.viewbox.y"),
    'width' => $bodybox_width,
    'height' => $bodybox_height,
'viewBox'=>"0 0 $bodybox_width $bodybox_height"
];
?>
<svg {{new \Illuminate\View\ComponentAttributeBag($bodybox_attributes)}}>
    <?= implode([...$content()]) ?>
</svg>

<?php
$text_x =  config('card-design.titlebox.text_x')(false) ;
?>

<x-card.box slug="titlebox" >
    <text x="<?= $text_x ?>" y="<?= config('card-design.titlebox.height')*0.7 ?>" text-anchor="middle" class="cardname" alignment-baseline="baseline" fill-opacity="{{$titleboxOpacity}}"><?=  $cardName ?></text>
</x-card.box >

{{-- just under the viewbox --}}
<?php
$credit_y =  config('card-design.trimbox.y')+config('card-design.trimbox.height')-5;
?>

<g class="credit" fill="{{$creditColor()}}">
    <text x="<?= config('card-design.viewbox.x') ?>" y="<?= $credit_y ?>" text-anchor="start" alignment-baseline="top">&#169; Monsters Masters &amp; Mobsters LLC</text>
    <text x="70%" y="<?= $credit_y ?>"  text-anchor="middle" alignment-baseline="top"><?php echo \date('Y-m-d'); ?></text>
    <text x="<?= config('card-design.viewbox.x')+config('card-design.viewbox.width') ?>" y="<?= $credit_y ?>"  text-anchor="end" alignment-baseline="top"><?php echo $cardNumber; ?></text>
</g>

<g class="debug">
    <x-card.rect slug="trimbox"  fill-opacity="0" stroke-width=3 stroke="#FF0000" rx="25" />
    <x-card.rect slug="viewbox"  fill-opacity="0" stroke-width=3 stroke="#2BA6DE" stroke-dasharray="1.44" rx="5" />
    <x-card.rect slug="hero"  fill-opacity="0" stroke-width=1 stroke="#2BA6DE" stroke-dasharray="1.44" />
    <line x1="25%" y1="0" x2="25%" y2="100%" class="info secondary" />
    <line x1="50%" y1="0" x2="50%" y2="100%" class="info" />
    <line x1="75%" y1="0" x2="75%" y2="100%" class="info secondary" />
</g>
</x-svg>
