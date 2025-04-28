@props(['id'])
<?php
$deck = new \Canon\Deck($id);

if(isset($_GET['print'])) {
    ?>
<html>
@foreach($deck->chunk( 9) as $chunk)
<x-card-sheet :cards="$chunk" :distinct_cards="$deck->distinctCards" />
    @endforeach
</html>
<?php
    
}

else if(isset($_GET['png'])) {
    ?>
<html>
<div id="svg-container">
    <x-card-sheet :abreast="ceil(sqrt($deck->count()))" :cards="$deck->cards" :distinct_cards="$deck->distinctCards" />
</div>
<div id="img-container"></div>

<script>
    const dataHeader = 'data:image/svg+xml;charset=utf-8';
    const $svg = document.getElementById('svg-container').querySelector('svg'); // <svg> element
    const $holder = document.getElementById('img-container'); // <div> element

    const destroyChildren = $element => {
        while ($element.firstChild) {
            const $lastChild = $element.lastChild ?? false
            if ($lastChild) $element.removeChild($lastChild)
        }
    }

    const loadImage = async url => {
        const $img = document.createElement('img')
        $img.src = url
        return new Promise((resolve, reject) => {
            $img.onload = () => resolve($img)
            $img.onerror = reject
        })
    }

    const serializeAsXML = $e => (new XMLSerializer()).serializeToString($e)

    const encodeAsUTF8 = s => `${dataHeader},${encodeURIComponent(s)}`

    const convertSVGtoImg = format => async e => {
  const $btn = e.target

  destroyChildren($holder)

  const svgData = encodeAsUTF8(serializeAsXML($svg))

  const img = await loadImage(svgData)

  // https://www.w3schools.com/jsref/dom_obj_canvas.asp
  const $canvas = document.createElement('canvas')
  $canvas.width = $svg.clientWidth
  $canvas.height = $svg.clientHeight
  $canvas.getContext('2d').drawImage(img, 0, 0, $svg.clientWidth, $svg.clientHeight)

  const $img = new Image($svg.clientWidth, $svg.clientHeight);
  $img.src = await $canvas.toDataURL(`image/${format}`, 1.0);
  $holder.appendChild($img);
}

document.addEventListener('DOMContentLoaded', convertSVGtoImg('png'), false);

</script>

</html>
<?php
    }
else {
?>
<x-guest-layout>

    <x-slot:page-title><?= $deck->name ?> | {{__('cg')}}</x-slot>

    <x-breadcrumbs>
        <x-breadcrumbs.crumb url="/cg">{{__('cg')}}</x-breadcrumbs.crumb>
        <x-breadcrumbs.crumb url="/cg/decks">Available Decks</x-breadcrumbs.crumb>
    </x-breadcrumbs>
        
    <h1><?= $deck->name ?> <span class="badge text-bg-secondary"><?= $deck->count() ?> cards</span></h1>

@if ($slot->isEmpty())
{{ $deck->details }}
@else
{{ $slot }}
@endif

    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">Click on a card to view its details.</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/cg/decks/{{$id}}?print">Print This Deck</a>
        </li>
    </ul>

    <div class="row">
        @foreach(array_chunk($deck->distinctCards, 4) as $chunk)
        <div class="d-flex flex-row">
            @foreach ($chunk as  $card_info) 
           
                <div class="p-2 position-relative">
                    <x-card :link="true" :cardNumber="$card_info->cardNumber()" width="200" />
                    <div class="badge bg-secondary p-2 fs-1 position-absolute top-0 end-0">
                            {{$deck->cardCounts[$card_info->cardNumber()]}}
                            <span class="visually-hidden">copies of this card</span>
                        </div>
                    </div>
                @endforeach
                    </div>
            @endforeach
    </div>
                
</x-guest-layout>
<?php
}
?>