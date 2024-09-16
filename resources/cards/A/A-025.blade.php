<x-card.image-credit>
Image by Adobe: Stock #58908676
</x-card.image-credit>
@endpush

@push('background')
{{ view('Draw.background') }}
@endpush

<x-card :$cardNumber card-name="Busybody">
  <image x="0" y="0" class="hero" href="@local(A025.jpeg)" />
  <x-card.rulebox>
    <x-card.concept-card type="Draw" /> 
    <x-slot:normal>
    Choose an opponent. That opponent
    reveals their hand. Choose one card.
    The opponent puts that card
    on the bottom of their Library.
  </x-slot:normal>
</x-card.rulebox>
</x-card>