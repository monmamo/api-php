<x-card.Vendor :$cardNumber card-name="Lottery">
    <x-card.concept type="Item">Item</x-card.concept>

    <x-card.rulebox>
        <x-slot:normal>
            Discard two or more cards from your hand.
Then draw that number plus two cards.
</x-slot:normal>
</x-card.rulebox>
</x-card.Vendor>
    @push('flavor-text')
<x-card.flavor-text-line>Can’t win if you don’t play!</x-card.flavor-text-line>
@endpush
    "image": {
        <image x="0" y="0" class="hero" href="@local(A146.jpg)" />
        @push('image-credit')
Image by storyset on Freepik
@endpush
{{-- https://www.freepik.com/free-vector/lottery-ticket-concept-illustration_171056284.htm --}}
    },
    
