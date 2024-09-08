<x-card.Draw :$cardNumber card-name="Busybody">
  <image x="0" y="0" class="hero" href="@local(A025.jpeg)" />
  @push('image-credit')
Image by Adobe: Stock #58908676
@endpush
  <x-slot:card-rules>
    Choose an opponent. That opponent
    reveals their hand. Choose one card.
    The opponent puts that card
    on the bottom of their Library.
  </x-slot:card-rules>
</x-card.Draw>