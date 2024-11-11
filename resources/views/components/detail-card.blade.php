<?php
// https://getbootstrap.com/docs/4.6/components/card/

use App\Slug;
use Illuminate\Contracts\Support\Htmlable as HtmlableInterface;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Str;
use Spatie\Html\Elements\Element;
use App\Enums\FontAwesomeIcons;
?>

@props([
'legend'=>null,
'if'=>true
])

@aware([
'collapsed'=>false
])

<?php
// Calculated here so that header is not rendered if legend is missing.

$legend = match (true) {
    is_iterable($legend) => __('details', ['entity' => Str::headline(Slug::of(...$legend)->noun())]),
    $legend instanceof \App\View\Components\Content => $legend,
    default =>  new \App\View\Components\Content($legend)
};

$card_id_slug = \App\HtmlElementId::make('card', uniqid());

?>

@if($if)
<div class="card" id="{{$card_id_slug}}">

    @isset($legend)
    <h4 class="card-header card-title w-100" {{ $card_id_slug->header->asBag() }}>
        <?php
        // echo e($legend); // this is what double braces does.
        echo $legend->render();
        ?>
        <button type="button" {{ $card_id_slug->body->asHref() }} class="btn float-end @padding(0) text-muted" data-bs-toggle="collapse" aria-expanded="true" aria-label="Collapse"><x-icons.minimize /></button>
    </h4>
    @endisset

    <div class="card-body collapse @if(!$collapsed) show @endif" id="{{$card_id_slug->body}}">
        {{$slot}}
    </div>
</div>
@endif