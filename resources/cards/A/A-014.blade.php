  <x-card.Vendor :$cardNumber card-name="Big-Box Store">
    <image x="0" y="0" class="hero" href="@local(A-014.jpg)" source="https://www.freepik.com/free-vector/express-truck-delivering-goods-supermarket_4147963.htm" />
    @push('image-credit')
Image by teravector on Freepik
@endpush
    @push('flavor-text')
<x-card.flavor-text-line>Expect more. Live better. Simplify life. Get more done.</x-card.flavor-text-line>
@endpush
  <x-card.body-text y="575">
    Discard three cards from your hand.
    Search your Library for two Item cards.
    Reveal them, then put them in your hand.
    Shuffle your library.
    </x-slot:card-rules>
</x-card.Vendor>
<?php
  // <x-card.concept type="Integrity">1d4</x-card.concern>
?>