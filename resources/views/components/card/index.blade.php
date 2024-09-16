<?php
use Illuminate\Support\Facades\Blade;

// no @props here, they're defined in \App\View\Components\Card 

$rules_dy = 0;

$debug = env('DEBUG') ?? false;
$debug_opacity = match(true) {
    $debug === true => 1,
    $debug === false => 0,
    $debug === 'true' => 1,
    $debug === 'false' => 0,
    default => $debug
};

$concepts_resolved = array_map(
    function($concept) {
        $concept_pieces = match(true) {
            is_string($concept) => explode(':',$concept),
        is_array($concept) => $concept,        
        };
        $type = $concept_pieces[0];
    $detail = $concept_pieces[1] ?? $concept_pieces[0];
return compact('type','detail');
    },
    match(true) {
        is_string($concepts) => explode(';',$concepts),
        is_array($concepts) => $concepts,
        is_null($concepts) => []
    }
);

?>

<svg id="{{$cardNumber}}" width="@cardspec(width)" height="@cardspec(height)" viewBox="0 0 @cardspec(width) @cardspec(height)" xmlns="http://www.w3.org/2000/svg">

    <title><?= $cardName ?></title>

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Roboto");
        @import url("https://fonts.googleapis.com/css2?family=Roboto+Condensed");

        text {
            font-family: 'Roboto', sans-serif;
        }

        .credit {
            font-style: normal;
            font-size: 20px;
            fill: <?= $creditColor ?>;
        }

        .flavor {
            font-style: italic;
            font-size: 25px;
            white-space: normal;
        }

        tspan.bodytext {
            font-style: normal;
            font-size: 30px;
            font-weight: 400;
            font-style: normal;
            text-align: center;
            text-anchor: middle;
            white-space: normal;
            fill: black;
            margin: 5px;
            alignment-baseline: middle;
        }

        .conceptrule {
            font-style: normal;
            font-size: 20px;
            font-weight: 400;
            font-style: normal;
            white-space: normal;
            text-anchor: middle;
            alignment-baseline: middle;
            fill: black;
        }

        .smallrule {
            font-style: normal;
            font-size: 20px;
            font-weight: 400;
            font-style: normal;
            white-space: normal;
            text-align: center;
            text-anchor: middle;
            alignment-baseline: middle;
            fill: black;
        }

        .cardtype {
            font-style: normal;
            font-size: 30px;
            font-weight: 500;
            font-style: normal;
            fill: black;
        }

        .cardname {
            font-family: 'Roboto Condensed';
            font-style: normal;
            font-size: 50px;
            font-weight: 500;
            font-style: normal;
            fill: black;
        }

        rect.titlebox {
            fill: white;
            fill-opacity: <?= $titleboxOpacity ?>
        }

        image.hero {
            position: relative;
            display: block;
            text-align: center;
            height: 450px;
            width:610px;
        }

        .svg-hero {
            position: absolute;            
            transform: translate(@cardspec(hero.icon.translate.x)px,@cardspec(hero.icon.translate.y)px) scale(@cardspec(hero.icon.scale));
            margin: 0;
            fill: #ffffff;
            fill-opacity: 1;
        }

        .standard-background-icon {
            transform: translate(@cardspec(icon.translate.x)px,@cardspec(icon.translate.y)px) scale(@cardspec(icon.scale));
        }

        .debug {
            stroke-opacity: <?= $debug_opacity ?>;
        }

        .info {
            stroke: #ffff00;
        }

        g.concept-icon {
            transform: translate(2px,2px) scale(<?= 54/512 ?>);
        }

        text.concept-type {
            font-style: normal;
            font-size: 30px;
            font-weight: 500;
            font-style: normal;
            fill: black;
            text-anchor: left;
            alignment-baseline: central;
        }

    </style>

    <defs>
        <filter x="-5%" y="-5%" width="110%" height="110%" id="solid">
            <feFlood flood-color="white" flood-opacity="85%" result="bg" />
            <feMerge>
                <feMergeNode in="bg" />
                <feMergeNode in="SourceGraphic" />
            </feMerge>
        </filter>
    </defs>

    
    <rect id="absolute-bounds" x="0" y="0"  width="@cardspec(width)" height="@cardspec(height)"  fill-opacity="0" stroke="#808080" rx="75"/>

<text id="MON-MA-MO" >
<tspan x="50%" y="440" font-family="Roboto" text-anchor="middle"  font-size="265" font-weight="700" fill="#333333" >MON</tspan>
<tspan x="50%" y="657.7" font-family="Roboto" text-anchor="middle"  font-size="265" font-weight="700" fill="#333333" >MA</tspan>
<tspan x="50%" y="875.4" font-family="Roboto"  text-anchor="middle"  font-size="265" font-weight="700" fill="#333333" >MO</tspan>
</text>

@stack('background') 


<?php
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

    {{ $slot ?? null }}

</svg>

<?php
$text_x =  config('card-design.titlebox.text_x')(false) ;
//<line x1="0" y1="0" x2="650" y2="70" stroke="yellow" stroke-width="2" />
//<line x1="0" y1="70" x2="650" y2="140" stroke="yellow" stroke-width="2" />
?>

<x-card.box slug="titlebox" >
    <text x="<?= $text_x ?>" y="<?= config('card-design.titlebox.height')*0.7 ?>" text-anchor="middle" class="cardname" alignment-baseline="baseline"><?=  $cardName ?></text>
</x-card.box >

{{-- just under the viewbox --}}
<?php
$credit_y =  config('card-design.trimbox.y')+config('card-design.trimbox.height')-5;
?>
    <text x="<?= config('card-design.viewbox.x') ?>" y="<?= $credit_y ?>" class="credit" text-anchor="start" alignment-baseline="top">&#169; Monsters Masters &amp; Mobsters LLC</text>
    <text x="70%" y="<?= $credit_y ?>" class="credit" text-anchor="middle" alignment-baseline="top"><?php echo \date('Y-m-d'); ?></text>
    <text x="<?= config('card-design.viewbox.x')+config('card-design.viewbox.width') ?>" y="<?= $credit_y ?>" class="credit" text-anchor="end" alignment-baseline="top"><?php echo $cardNumber; ?></text>

    <x-card.rect slug="trimbox" class="debug" fill-opacity="0" stroke-width=3 stroke="#FF0000" rx="25" />

    <x-card.rect slug="viewbox" class="debug" fill-opacity="0" stroke-width=3 stroke="#2BA6DE" stroke-dasharray="1.44" rx="5" />

    <line x1="375" y1="0" x2="375" y2="1050" class="debug info" />

        
</svg>
