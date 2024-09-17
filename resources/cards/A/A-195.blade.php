@push('background')
{{ view('Vendor.background') }}
<x-card.image-credit>
    @ai
</x-card.image-credit>
@endpush
@endpush

<x-card :$cardNumber card-name="Personal Assistant">
    <x-card.rulebox>
        <x-card.concept-card type="Vendor" />
        <x-card.concept-card type="Integrity">1d6</x-card.concern-card>
            <x-slot:normal>
                <x-card.normalrule>Draw up to 3 cards.</x-card.normalrule>
                <x-card.normalrule>If you drew any cards in this way,</x-card.normalrule>
                <x-card.normalrule>discard an equal number of cards from your hand.</x-card.normalrule>
            </x-slot:normal>
    </x-card.rulebox>
</x-card>
