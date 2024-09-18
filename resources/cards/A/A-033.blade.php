@push('background')
{{ view('Draw.background') }}
<x-card.image-credit>Image by freepik {{-- https://www.freepik.com/free-psd/casino-roulette-icon-render_23877079.htm --}}</x-card.image-credit>
@endpush

<x-card.flavortext>
<x-card.flavortext.line>This isn't a game (show).</x-card.flavortext.line>
</x-card.flavortext>

@endpush

<x-card :$cardNumber card-name="Wheel of Fortune">
    <image x="0" y="0" class="hero" href="@local(hero/wheel-of-fortune.jpg)" />

    <x-card.concept.staticon type="Draw" x="530" /> 
    <text>
<x-card.normalrule>Each player puts his hand on the</x-card.normalrule>
<x-card.normalrule>bottom of his Library, then draws 7 cards.</x-card.normalrule>
    </text>

</x-card>
