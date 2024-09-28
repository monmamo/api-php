@push('background')
{{ view('Draw.background') }}

'image-credit' => "ShutterStock #2389392699 by AnhSilhouetteArt",


'flavor-text' => [
    'It's a female monster.'
],

@endpush

<x-card :$cardNumber :$dx :$dy card-name="Karma">
    
    <image x="0" y="0" class="hero" href="@local(A139.jpg)" />

    'concepts' => ['Draw'],
    
<x-card.phaserule type="Draw" lines="4"><text>    
<x-card.normalrule>Each player adds up the remaining</x-card.normalrule>
<x-card.normalrule>health on his Monsters.</x-card.normalrule> 
<x-card.normalrule>The player with the highest</x-card.normalrule>
<x-card.normalrule>shuffles his hand into his Library.</x-card.normalrule>
</text></x-card.phaserule>
    
</x-card>
