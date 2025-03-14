<?php
use Illuminate\Support\Facades\Blade;

if (!\Illuminate\Support\Facades\View::exists("$card_number")) {
    abort(404);
    exit;
}

$card_number_object =  \App\CardNumber::make($card_number);
$spec = \App\Card\make($card_number);

$previous = $card_number_object->makePrevious();
$next = $card_number_object->makeNext();


// if (isset($_REQUEST['png'] )) {
//      \header('Content-Type: image/png');
//      \header('Content-Disposition: attachment; filename="'.$card_number.'.png"');
//     return;
// }

// if (isset($_REQUEST['download'] ))
// \header('Content-Disposition: attachment; filename="'.$card_number.'.svg"');

// x-slot:leftbar>
// x-content-bar.section title="Card Sets" :links="config('ui.card_sets')" />
// x-content-bar.section title="Decks" :links="config('ui.decks')" />
// /x-slot:leftbar>

?>
<x-guest-layout>
<x-slot:page-title><?= $card_number ?> <?= $spec->name() ?></x-slot>

<div class="px-4 my-5 text-center border-bottom">
  <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
  @isset($previous)
  <a id="btn-previous" type="button" class="btn btn-secondary" href="/cards/card/{{$previous}}">{{$previous}}</a>
    @endisset
  <button id="btn-png" type="button" class="btn btn-secondary" data-format="png">PNG</button>
  <button id="btn-jpg" type="button" class="btn btn-secondary" data-format="jpeg">JPG</button>
  <button id="btn-webp" type="button" class="btn btn-secondary" data-format="webp">WEBP</button>

  {{--<a class="btn btn-warning" href="<?=  "vscode://file/".urlencode($card_number_object->getSpecFilePath()) ?>">Edit</a>--}}

  @isset($next)
  <a id="btn-next" type="button" class="btn btn-secondary" href="/cards/card/{{$next}}">{{$next}}</a>
    @endisset
</div>
  <div class="container px-5" id="svg-container" hx-get="#"  hx-trigger="dblclick" hx-target="#svg-container">
  <x-card :cardNumber="$card_number" />
</div>
  <div id="img-container"></div>
</div>

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

const buttons = [...document.querySelectorAll('[data-format]')]
for (const btn of buttons) {
  btn.onclick = convertSVGtoImg(btn.dataset.format)
}
    </script>
    @stack('debug')

</x-guest-layout>
