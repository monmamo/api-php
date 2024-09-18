@push('background')
{{ view('Draw.background') }}
<x-card.image-credit>Image by logturnal on Freepik</x-card.image-credit> {{-- https://www.freepik.com/free-vector/recycle-colorful-geometric-gradient-logo-vector_27230675.htm --}}
<x-card.flavortext>
    <x-card.flavortext.line>Recycle today for a better upkeep phase tomorrow.</x-card.flavortext.line>
    </x-card.flavortext>
    @endpush

<x-card :$cardNumber card-name="Recycle">
    <image x="0" y="0" class="hero" href="@local(A212.jpg)" />
    
      <x-card.concept.staticon type="Draw" x="530" /> 
      <text y="70" filter="url(#solid)">
        <x-card.normalrule>Put a card from your Discard</x-card.normalrule>
            <x-card.normalrule>pile into your hand.</x-card.normalrule>
      </text>

</x-card>