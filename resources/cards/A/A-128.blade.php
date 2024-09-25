@push('background')
{{ view('Draw.background') }}
<x-card.flavortext>
    <x-card.flavortext.line>The less we hear from them, the better they are serving us.</x-card.flavortext.line>
</x-card.flavortext>

'image-credit' => "Placeholder image",

@endpush

<x-card :$cardNumber :$dx :$dy card-name="Idiot Agents">
    <image x="0" y="0" class="hero" href="@local(A128.png)" />

<x-card.concept.staticon type="Draw" dx="2" />
<x-card.concept.staticon type="Integrity" value="1d4" />
<x-card.phaserule type="Draw" lines="3"><text>    
        <x-card.normalrule>Choose an opponent. </x-card.normalrule>
            <x-card.normalrule>That opponent removes all Monster cards</x-card.normalrule>
        <x-card.normalrule>from his Library and puts them in Discard.</x-card.normalrule>
    </text></x-card.phaserule>

</x-card>
