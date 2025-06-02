<?php
// no at-props here, they're defined in \App\View\Components\Card

use App\CardNumber;
use App\Contracts\Card\CardComponents;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Support\Facades\Blade;
use Illuminate\View\Component;
use Illuminate\View\View;

$rules_dy = 0;
$id = function (string $suffix) use ($cardNumber) {
    return $cardNumber . '-' . $suffix;
};

$concepts = $spec->concepts();
$concept_count = count($concepts);
$concept_icon_size = 80;
if ($concept_count > 7) {
    $concept_icon_size *= (7 / $concept_count);
}
$concept_x_0 = \config('card-design.viewbox.width') / 2 - $concept_icon_size * $concept_count / 2;

?>

@if($link)
<a href="/cards/card/{{$cardNumber}}">
@endif

<x-svg
    :$dx
    :$dy
    :id="$cardNumber"
    :$width
    :$height
    :$padding
    class="has-context-menu"
    viewBox="0 0 750 1050">

    <title><?= $cardName ?></title>

    @unless($omitCommon)
    <x-card.common :specs="[$spec]"/>
    @endunless

    <rect id="absolute-bounds" x="0" y="0" width="@cardspec(width)" height="@cardspec(height)" fill="url(#{{$cardNumber}}-background)" rx="75" />
{{--
    <x-svg.logos.card-system-logo />
<use href="#card-system-logo" x="600" y="0" style="fill:#ffffff;stroke:#ffffff;opacity:0.25" />
--}}
    <?php

    
    // The bodybox is the viewbox minus the titlebox.
    $bodybox_width = config("card-design.viewbox.width");
    $bodybox_height = config("card-design.viewbox.height") - config("card-design.titlebox.height");

    $bodybox_attributes = [
        'id' => "bodybox",
        'x' => config("card-design.viewbox.x"),
        'y' =>  config("card-design.viewbox.y"),
        'width' => $bodybox_width,
        'height' => $bodybox_height,
        'viewBox' => "0 0 $bodybox_width $bodybox_height"
    ];

    ?>

    <svg {{new \Illuminate\View\ComponentAttributeBag($bodybox_attributes)}}>
    
<?php
        echo \App\Strings\render(
            ...$spec->content()
        );
        ?>

<text x="0" y="50"         font-family="'Roboto Condensed', sans-serif"
font-size="50px"
font-style="normal"
fill="{{$cardNameColor()}}" stroke="{{$cardNameColor()}}" alignment-baseline="baseline" ><?= $cardName ?></text>

    </svg>

    @if(count($concepts) > 0)
    <x-card.box slug="titlebox">
        <?php
        $text_x =  $titlebox['text_x'] = fn (bool $has_icon) => $viewbox['width'] / 2 + ($has_icon ? $titlebox['height'] / 2 : 0);

        ?>        
@foreach($concepts as $index => $concept)
@php
$x = $concept_x_0 + $index * $concept_icon_size ;
@endphp
<x-icons.inline.concept :$concept :size="$concept_icon_size" :$x /> 
        <text class="gloss" x="{{$x+$concept_icon_size/2}}" y="{{$concept_icon_size+10}}px" font-family="'Roboto Condensed', sans-serif" font-style="normal" font-size="15px" fill="#000000" paint-order="stroke" font-width="200" text-anchor="middle" alignment-baseline="baseline"          >{{$concept->label()}}</text>
@endforeach        
    </x-card.box>
    @endif

    <?php
    // echo \App\Strings\render($spec->flavorTextAttribute());

    $credit_y =  config('card-design.trimbox.y') + config('card-design.trimbox.height') - 5;


    if (\App\Reflection\hasAttribute($spec,\App\CardAttributes\ImageIsPrototype::class)) {
            echo \App\Strings\html(
            'text',
            ['x' => '50%', 'y' => '370','transform'=>'rotate(-30,375,370)', 'text-anchor' => 'middle', 'dominant-baseline'=>"central" ,'font-family'=>"'Roboto Condensed', sans-serif" , 'font-size'=>"120px", 'fill' => '#000000','stroke'=>'#ffffff','fill-opacity' => '0.20', 'stroke-opacity' => '0.20'],
            'PROTOTYPE',
        )->toHtml();
        }

        
?>

    <g class="credit" fill="{{$creditColor()}}">
        
        <text x="<?= config('card-design.viewbox.x') ?>" y="<?= config('card-design.viewbox.y') ?>" class="credit" text-anchor="start" alignment-baseline="top" >{{$spec->system()}}</text>
        <text x="<?= config('card-design.viewbox.x')+config('card-design.viewbox.width') ?>" y="<?= config('card-design.viewbox.y') ?>" class="credit" text-anchor="end" alignment-baseline="top" >{{$spec->imageCredit()}}</text>
        
        <text x="<?= config('card-design.viewbox.x') ?>" y="<?= $credit_y ?>" text-anchor="start" alignment-baseline="top">&#169; Monsters Masters &amp; Mobsters LLC</text>
        <text x="70%" y="<?= $credit_y ?>" text-anchor="middle" alignment-baseline="top">{{ \date('Y-m-d') }}</text>
        <text x="<?= config('card-design.viewbox.x') + config('card-design.viewbox.width') ?>" y="<?= $credit_y ?>" text-anchor="end" alignment-baseline="top">{{ $cardNumber }}</text>
    </g>

    <?php
        if (\App\Reflection\hasAttribute($spec,\App\CardAttributes\ImageInDevelopment::class)) {
            echo \App\Strings\html(
                'text',
                ['x' => '50%', 'y' => '340', 'transform' => 'rotate(-30,375,340)', 'text-anchor' => 'middle', 'dominant-baseline' => "central", 'font-family' => "'Roboto Condensed', sans-serif", 'font-size' => "80px", 'fill' => '#ffffff', 'stroke' => '#000000', 'stroke-width' => '2'],
                'ART IN PROGRESS',
            )->toHtml();
        }

    if (\App\Reflection\hasAttribute($spec,\App\CardAttributes\IsIncomplete::class)) {
            echo \App\Strings\html(
            'text',
            ['x' => '50%', 'y' => '50%', 'transform' => 'rotate(-30,375,525)', 'text-anchor' => 'middle', 'dominant-baseline' => "central", 'font-family' => "'Roboto Condensed', sans-serif", 'font-size' => "120px", 'fill' => '#ffffff', 'stroke' => '#000000', 'stroke-width' => '2'],
            'INCOMPLETE',
        )->toHtml();
        }

    ?>

    <g class="debug">
        <x-card.rect slug="trimbox" fill-opacity="0" stroke-width="3" stroke="#FF0000" rx="25" />
        <x-card.rect slug="viewbox" fill-opacity="0" stroke-width="3" stroke="#2BA6DE" stroke-dasharray="1.44" rx="5" />
        <x-card.rect slug="titlebox" fill-opacity="0" stroke-width="3" stroke="#2BA6DE"    />
        <?php
        $hero_attributes = [
            'x' => config("card-design.viewbox.x") + config("card-design.hero.x"),
            'y' => config("card-design.viewbox.y") + config("card-design.hero.y"),
            'width' => config("card-design.hero.width"),
            'height' => config("card-design.hero.height"),
        ];
        ?>
        <rect id="hero-rect" slug="hero" fill-opacity="0" stroke-width="1" stroke="#2BA6DE" stroke-dasharray="1.44" {{new \Illuminate\View\ComponentAttributeBag($hero_attributes)}} />
        <line x1="25%" y1="0" x2="25%" y2="100%" class="info secondary" />
        <line x1="50%" y1="0" x2="50%" y2="100%" class="info" />
        <line x1="75%" y1="0" x2="75%" y2="100%" class="info secondary" />
    </g>
</x-svg>

@if($link)
</a>
@endif
