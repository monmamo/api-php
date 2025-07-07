<x-guest-layout>

            <x-slot:page-title>Color Palettes for Monsters Masters & Mobsters</x-slot>

    <x-breadcrumbs>
        <x-breadcrumbs.crumb url="/design">Design Standards</x-breadcrumbs.crumb>
    </x-breadcrumbs>

<h1>Color Palettes for Monsters Masters & Mobsters</h1>

            

<dl class="row">
            <dt class="col-sm-3"><a href="/design/palettes/worlds-in-tension">Worlds in Tension</a></dt>
            <dd class="col-sm-9">A unified visual identity. Evokes the entire world, not just one class or layer, but the tension and interplay between First, Second, and Third Worlds.</dd>
            <dt class="col-sm-3"><a href="/design/palettes/polished-power">Polished Power</a></dt>
            <dd class="col-sm-9">Cold luxury, controlled magic and technology, high-end opacity, and the eerie normalcy of elite systems.<br />
            @foreach(config('design.color.polished-power') as $color)
                <x-color.badge :color="$color['color']" />
            @endforeach
            </dd>
            <dt class="col-sm-3"><a href="/design/palettes/earth-hearth">Earth and Hearth</a></dt>
            <dd class="col-sm-9">Natural tones, domestic warmth, faded industrial strength, monster care, sport, and working-man pride.<br />
            @foreach(config('design.color.earth-hearth') as $color)
                <x-color.badge :color="$color['color']" />
            @endforeach</dd>
            <dt class="col-sm-3"><a href="/design/palettes/third-world">Third World</a></dt>
            <dd class="col-sm-9">Colors representing the Third World, highlighting survival and resilience. (This one I'm still working on. I'm not satisfied with this being one palette.)</dd>
            </dl>

</x-guest-layout>