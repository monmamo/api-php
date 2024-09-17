@push('background')
{{ view('Vendor.background') }}
@endpush

<x-card :$cardNumber card-name="Breeder">
    <x-card.rulebox>
        <x-card.concept-card type="Vendor" />
        <x-card.concept-card type="Integrity" index="1">1d4</x-card.concern-card>

            <text y="80" filter="url(#solid)">
                <x-card.normalrule>Search your Library for a Monster card.</x-card.normalrule>
                <x-card.normalrule>Put that card in your hand.</x-card.normalrule>
            </text>

    </x-card.rulebox>

</x-card>
