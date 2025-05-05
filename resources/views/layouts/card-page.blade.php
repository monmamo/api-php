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
            <p><svg width="30" height="30"><x-icons.inline.concept size="30" :$concept /></svg> {{$concept->type}}</p>
            @endforeach
            <?= \App\Strings\render(...$spec->webpageContent()); ?>
        </div>
    <div class="flex-shrink-1 align-items-end">
            <div class="pt-2" hx-get="#"  hx-trigger="dblclick" hx-target="svg.has-context-menu">
            <x-card :cardNumber="$number" width="400"/>
          </div>
            
          </div>
                 
    </div>

<x-svg-context-menu />

<script>
      for (const btn of [...document.querySelectorAll('.open-svg')]) {
      btn.onclick = e => {
        window.location.assign( '/cards/card/{{$number}}/svg');
      };
    }
</script>

    @stack('debug')

</x-guest-layout>
