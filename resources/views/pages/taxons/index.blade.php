<?php

use Symfony\Component\Finder\Finder;

resource_path();

$taxons = \Canon\taxons();


// {{ route('taxons.show',['slug'=> $taxon]) }}
?>

<x-guest-layout>


    <x-breadcrumbs>
        <x-breadcrumbs.crumb url="/lore">Lore</x-breadcrumbs.crumb>
    </x-breadcrumbs>
    
    <h1>Taxonomy</h1>

    <p>Anthropes and monsters have multiple forms of taxonomy: They can be classified by evolutionary relationships, by morphology, and by their respective powers.</p>

    <p>Here is a list of all the taxons in the Monsters Masters & Mobsters universe:</p>

    <div class="container">
        <div class="row">
            @foreach ($taxons->splitIn(6) as $chunk)
            <div class="col-sm-6 col-md-2 ">
                <dl>
                    @foreach ($chunk as $taxon)
                    <dt><a href="/taxons/{{ $taxon }}">{{ $taxon }}</a></dt>
                    @endforeach
                </dl>
            </div>
            @endforeach
        </div>
        </div>

</x-guest-layout>
