<?php
use Symfony\Component\Finder\Finder;
resource_path();
$concepts = \Canon\concepts();

// {{ route('concepts.show',['slug'=> $concept]) }}
?>

<x-guest-layout>

       <x-slot:page-title>Concepts</x-slot>

<h1>Concepts in The World of Monsters Masters & Mobsters</h1>

<p>Concepts identify various kinds of attributes and mechanics that define the gameplay and narrative elements of Monsters Masters & Mobsters. Some concepts are absolute, while others can have a value associated with them.</p>

    <p>Here is a list of all the taxons in the Monsters Masters & Mobsters universe:</p>

    <div class="container">
        <div class="row">
            @foreach ($concepts->splitIn(6) as $chunk)
            <div class="col-sm-6 col-md-2 ">
                <dl>
                    @foreach ($chunk as $concept)
                    <dt><a href="/concepts/{{ $concept }}">{{ $concept }}</a></dt>
                    @endforeach
                </dl>
            </div>
            @endforeach
        </div>
        </div>



</x-guest-layout>