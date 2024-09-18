@push('background')
{{ view('Draw.background') }}
<x-card.image-credit>Image by logturnal on Freepik</x-card.image-credit>
@endpush

<x-card :$cardNumber card-name="Refurbish">
  <image x="0" y="0" class="hero" href="@local(A212.jpg)" />
  
    <x-card.concept.staticon type="Draw" x="530" /> 
    <text y="70" filter="url(#solid)">
      <x-card.normalrule>Shuffle up to three Item cards</x-card.normalrule> 
      <x-card.normalrule>from your Discard pile into your Library.</x-card.normalrule>
    </text>


</x-card>
