
<?php
// TODO:
// Filtration
// Popup with info on each image

?>

<x-guest-layout>
    <x-slot:page-title>Image Gallery</x-slot>

<h1>Gallery</h1>

@php
$publicimage = match (\App\Facades\Environment::getFacadeRoot()) {
            \App\Enums\Environments::Development => fn (string $filename) => "/images/{$filename}",
            \App\Enums\Environments::Production => fn (string $filename) => "/public/images/{$filename}",
            default => fn (string $filename) => "/images/{$filename}",
        };
@endphp

<div class="container">
<div class="row">
@foreach(array_chunk(config('gallery'), (int)(count(config('gallery'))/4)) as $column)
<div class="col-lg-3">
@foreach($column as $image) 
            <img src="{{ $publicimage($image['path']) }}" class="img-fluid border rounded-3 mx-auto mb-3 d-block" alt="{{ $image['title'] }}"  loading="lazy">
        @endforeach
</div>
@endforeach
</div>
</div>

</x-guest-layout>