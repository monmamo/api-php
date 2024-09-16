
@push('background')
{{ view('Vendor.background') }}
@endpush

<x-card :$cardNumber card-name="Delivery Service" >
<x-card.rulebox>
<x-card.concept-card type="Vendor" />
<x-slot:normal>
    Search your Library for an Item card.
    Reveal it. Then put it in your hand.
    </x-slot:normal>
</x-card.rulebox>
</x-card>
