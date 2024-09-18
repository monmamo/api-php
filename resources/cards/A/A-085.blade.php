@push('background')
{{ view('Draw.background') }}
<x-card.image-credit>Image by logturnal on Freepik</x-card.image-credit> {{-- https://www.freepik.com/free-vector/recycle-colorful-geometric-gradient-logo-vector_27230675.htm --}}
@endpush

<x-card :$cardNumber card-name="Recycle Mana">
  <image x="0" y="0" class="hero" href="@local(A212.jpg)" />

<x-card.concept.staticon type="Draw" x="530" />
<text y="100" filter="url(#solid)">
<x-card.normalrule>Shuffle up to 5 basic Mana cards</x-card.normalrule>
<x-card.normalrule>from your Discard pile into your Library.</x-card.normalrule>
</text>

</x-card>