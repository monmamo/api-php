<x-card.image-credit>
Image by teravector on Freepik
</x-card.image-credit>
@endpush

<x-card.flavortext>
<x-card.flavortext.line>Expect more. Live better. Simplify life. Get more done.</x-card.flavortext.line>
</x-card.flavortext>

@push('background')
{{ view('Vendor.background') }}
@endpush


<x-card :$cardNumber card-name="Big-Box Store">
  <image x="0" y="0" class="hero" href="@local(A-014.jpg)" source="https://www.freepik.com/free-vector/express-truck-delivering-goods-supermarket_4147963.htm" />
  
  <x-card.rulebox>
  <x-card.concept-card type="Vendor" />
  <x-card.concept-card type="Integrity" index="1">1d4</x-card.concern-card>

    <x-slot:normal>
    Discard three cards from your hand.
    Search your Library for two Item cards.
    Reveal them, then put them in your hand.
    Shuffle your library.
  </x-slot:normal>

</x-card.rulebox>
</x-card>