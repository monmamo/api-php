<?php

use Symfony\Component\Finder\Finder;

resource_path();

$taxons = collect(scandir(base_path('app/Taxons')))
    ->filter(fn($file) => !in_array($file, ['.', '..','Attributes']))
    ->map(fn($file) => str_replace('.php', '', $file));


// {{ route('taxons.show',['slug'=> $taxon]) }}
?>

<x-guest-layout>
    <h1>Taxonomy</h1>

    <p>Anthropes and monsters have multiple forms of taxonomy: They can be classified by evolutionary relationships, by morphology, and by their respective powers.</p>

    <p>Here is a list of all the taxons in the Monsters Masters & Mobsters universe:</p>

    <div class="container">
        <div class="row">
            @foreach ($taxons->splitIn(6) as $chunk)
            <div class="col-2">
                <ul>
                    @foreach ($chunk as $taxon)
                    <li><a href="/taxons">{{ $taxon }}</a></li>
                    @endforeach
                </ul>
            </div>
            @endforeach
        </div>
        </div>

</x-guest-layout>
