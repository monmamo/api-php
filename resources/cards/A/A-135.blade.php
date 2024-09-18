@push('background')
{{ view('Draw.background') }}
<x-card.image-credit>Image by photoroyalty on Freepik</x-card.image-credit>
<x-card.flavortext>
    <x-card.flavortext.line>Past performance is not indicative of future results.</x-card.flavortext.line>
</x-card.flavortext>
@endpush

<x-card :$cardNumber card-name="Investment">
    <image x="0" y="0" class="hero" href="@local(A135.jpg)" /> {{-- https://www.freepik.com/free-vector/time-is-money-background_1014317.htm --}}
    
        <x-card.concept.staticon type="Draw" x="530" />
        <text>
            <x-card.normalrule>Put any number of cards facedown on the Battlefield.</x-card.normalrule>
            <x-card.normalrule>At the Resolution Phase of this turn,</x-card.normalrule>
            <x-card.normalrule>draw 1d6-1 cards for each facedown card.</x-card.normalrule>
            <x-card.normalrule>Discard the facedown cards.</x-card.normalrule>
        </text>
    
</x-card>
