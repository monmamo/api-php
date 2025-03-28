@props(['number'])
<x-scripts.popover />

<?php

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

$filesystem = \App\Concept::disk();


$number_object =  \App\CardNumber::make($number);
$spec = \App\Card\make($number);

$previous = $number_object->makePrevious();
$next = $number_object->makeNext();


// if (isset($_REQUEST['png'] )) {
//      \header('Content-Type: image/png');
//      \header('Content-Disposition: attachment; filename="'.$number.'.png"');
//     return;
// }

// if (isset($_REQUEST['download'] ))
// \header('Content-Disposition: attachment; filename="'.$number.'.svg"');

// x-slot:leftbar>
// x-content-bar.section title="Card Sets" :links="config('ui.card_sets')" />
// x-content-bar.section title="Decks" :links="config('ui.decks')" />
// /x-slot:leftbar>
?>

<x-guest-layout>
    <x-slot:page-title><?= $number ?> <?= $spec->name() ?></x-slot>
    <x-breadcrumbs :items="['/cards'=>'Card System']" />

    
    <div class="d-flex justify-content-between w-100">
        <div class="w-100">
            <h1><?= $spec->name() ?> <span class="badge text-bg-secondary"><?= $number ?></span></h1>
            <?= \App\Strings\render(...$spec->concepts()); ?>
        </div>
    <div class="flex-shrink-1 align-items-end">
        <div class="gap-2">
            @isset($previous)
            <a id="btn-previous" type="button" class="btn btn-secondary" href="/cards/card/{{$previous}}">{{$previous}}</a>
              @endisset
            <button id="btn-png" type="button" class="btn btn-secondary" data-format="png">PNG</button>
            <button id="btn-jpg" type="button" class="btn btn-secondary" data-format="jpeg">JPG</button>
            <button id="btn-webp" type="button" class="btn btn-secondary" data-format="webp">WEBP</button>
          
            {{--<a class="btn btn-warning" href="<?=  "vscode://file/".urlencode($number_object->getSpecFilePath()) ?>">Edit</a>--}}
          
            @isset($next)
            <a id="btn-next" type="button" class="btn btn-secondary" href="/cards/card/{{$next}}">{{$next}}</a>
              @endisset
          </div>
            <div class="pt-2" id="svg-container" hx-get="#"  hx-trigger="dblclick" hx-target="#svg-container">
            <x-card :cardNumber="$number" width="400"/>
          </div>
            <div id="img-container"></div>
          </div>
                 
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
