@props(['number'])
<x-scripts.popover />

<?php

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

$number = Str::of($number)->trim()->upper()->replace(' ', '')->toString();
$filesystem = \App\Concept::disk();


$number_object =  \App\CardNumber::make($number);
$spec = \App\Card\make($number);

$previous = $number_object->makePrevious();
$next = $number_object->makeNext();

$set_slug = $number_object->set;

$concepts = $spec->concepts();

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
    <x-breadcrumbs>
      <x-breadcrumbs.crumb url="/cards">Card System</x-breadcrumbs.crumb>
      <x-breadcrumbs.crumb url="/cards/set/{{$set_slug}}">{{\App\Enums\CardSet::from($set_slug)->title()}}</x-breadcrumbs.crumb>
    </x-breadcrumbs>

      {{--
      <div class="gap-2">
        @isset($previous)
        <a id="btn-previous" type="button" class="btn btn-secondary" href="/cards/card/{{$previous}}">{{$previous}}</a>
          @endisset
        <button type="button" class="btn btn-secondary export" data-format="png">PNG</button>
        <button type="button" class="btn btn-secondary export" data-format="jpeg">JPG</button>
        <button type="button" class="btn btn-secondary export" data-format="webp">WEBP</button>
      
        <a class="btn btn-warning" href="<?=  "vscode://file/".urlencode($number_object->getSpecFilePath()) ?>">Edit</a>
      
        @isset($next)
        <a id="btn-next" type="button" class="btn btn-secondary" href="/cards/card/{{$next}}">{{$next}}</a>
          @endisset
      </div>
--}}

    <div class="d-flex justify-content-between w-100">
        <div class="w-100">
            <h1><?= $spec->name() ?> <span class="badge text-bg-secondary"><?= $number ?></span></h1>
            <h2>Concepts</h2>
            @foreach($concepts as $index => $concept)
            <p><x-icons.inline.concept size="30" :$concept /> {{$concept->type}}</p>
            @endforeach
            <?= \App\Strings\render(...$spec->webpageContent()); ?>
        </div>
    <div class="flex-shrink-1 align-items-end">
            <div class="pt-2" id="svg-container" hx-get="#"  hx-trigger="dblclick" hx-target="#svg-container">
            <x-card :cardNumber="$number" width="400"/>
          </div>
            <div id="img-container"></div>
          </div>
                 
    </div>

    <ul  class="dropdown-menu" id="img-menu" style="display: none; position: absolute; background: white; border: 1px solid black; list-style: none; padding: 5px;">
      <li class="open-svg">SVG</li>
        <li data-format="png">PNG</li>
      <li data-format="jpeg">JPG</li>
      <li data-format="webp">WEBP</li>
    </ul>

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
        
          //const $img = new Image($svg.clientWidth, $svg.clientHeight);
          //$img.src = await $canvas.toDataURL(`image/${format}`, 1.0);
          //$holder.appendChild($img);
          const imgsrc = await $canvas.toDataURL(`image/${format}`, 1.0);
const blob = await fetch(imgsrc).then(r => r.blob());
var blobUrl = URL.createObjectURL(blob);
window.location.assign(blobUrl);
        }

        for (const btn of [...document.querySelectorAll('[data-format]')]) {
          btn.onclick = convertSVGtoImg(btn.dataset.format)
        }

        for (const btn of [...document.querySelectorAll('.open-svg')]) {
          btn.onclick = e => {
            window.location.assign( '/cards/card/{{$number}}/svg');
          };
        }

  const customMenu = document.getElementById('img-menu');

  $svg.addEventListener('contextmenu', (event) => {
    event.preventDefault();
    customMenu.style.top = `${event.clientY}px`;
    customMenu.style.left = `${event.clientX}px`;
    customMenu.style.display = 'block';
  });

  document.addEventListener('click', () => {
    customMenu.style.display = 'none';
  });
            </script>  

    @stack('debug')


</x-guest-layout>
