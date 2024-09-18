@push('background')
{{ view('Draw.background') }}

<x-card.flavortext>
    <x-card.flavortext.line>Who says money can't buy popularity?</x-card.flavortext.line>
</x-card.flavortext>

<x-card.image-credit>
    Image by wirestock on Freepik
</x-card.image-credit>
@endpush

<x-card :$cardNumber card-name="Make It Rain">
    <image x="0" y="0" class="hero" href="@local(A-002.jpg)" source="https://www.freepik.com/free-photo/throwing-money-air-being-happy_10978858.htm" />

    
        <x-card.concept.staticon type="Draw" x="530" />
        <text y="150" filter="url(#solid)">
            <x-card.normalrule>Every player may draw up to 5 cards.</x-card.normalrule>
        </text>
    

</x-card>
