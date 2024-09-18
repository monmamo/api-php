@push('background')
{{ view('Draw.background') }}

<x-card.image-credit>Image by ShutterStock #2389392699 by AnhSilhouetteArt</x-card.image-credit>

<x-card.flavortext>
    <x-card.flavortext.line>It's a female monster.</x-card.flavortext.line>
</x-card.flavortext>

@endpush

<x-card :$cardNumber card-name="Karma">
    <x-card.concept.staticon type="Draw" x="530" />
    <image x="0" y="0" class="hero" href="@local(A139.jpg)" />

    
        <text>
            <x-card.normalrule>Each player adds up the remaining health</x-card.normalrule>
            <x-card.normalrule>on his Monsters. The player with the highest total</x-card.normalrule>
            <x-card.normalrule>shuffles his hand into his Library.</x-card.normalrule>
        </text>
    
</x-card>
