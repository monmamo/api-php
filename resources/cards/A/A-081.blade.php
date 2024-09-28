@push('background')
{{ view('Draw.background') }}
<x-card.image-credit>Image by logturnal on Freepik</x-card.image-credit> {{-- https://www.freepik.com/free-vector/recycle-colorful-geometric-gradient-logo-vector_27230675.htm --}}
'flavor-text' => [
    'Recycle today for a better upkeep phase tomorrow.'
    ],
    @endpush

<x-card :$cardNumber card-name="Recycle">
    <image x="0" y="0" class="hero" href="@local(A212.jpg)" />
    
      'concepts' => ['Draw'], 
      <text y="70" filter="url(#solid)">
        <x-card.normalrule>Put a card from your Discard</x-card.normalrule>
            <x-card.normalrule>pile into your hand.</x-card.normalrule>
      </text>

</x-card>