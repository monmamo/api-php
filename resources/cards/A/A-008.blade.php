@push('background')
<image x="0" y="0"  href="@local(A-008-full.png)" />
@endpush

    <x-card.Vendor :$cardNumber card-name="Bagman">
        @push('image-credit')
@ai
@endpush
        
    </x-slot:background>
    <x-card.body-text y="500">
        You may play this card only if you have a
        Mobster card on the Battlefield. Choose one
        opponent. Roll 1d6. That opponent discards
        that many cards from his Library,
        or all if he doesn't have that many.
        You may draw as many cards as were discarded.
        </x-slot:card-rules>
    </x-card.Vendor>
    <?php
    // "_": "A person who collects money, as for racketeers.",
    // "image": {
    //     "fullsize": true,
    //     "prompt": "dark man in a mask wearing a trenchcoat carrying a large tote bag"
    // },
    // <x-card.concept type="Integrity">1d4</x-card.concern>

