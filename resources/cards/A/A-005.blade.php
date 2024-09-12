@push('background')
{{ view('Facility.background') }}
@endpush

@push('flavor-text')
<x-card.flavor-text-line>Have a hot meal. Hang out with the boys.</x-card.flavor-text-line>
@endpush

<x-card :$cardNumber card-name="Community Center" >
    <x-card.rulebox>
        <x-card.concept-card type="Facility" />
        <x-slot:normal>
    No Mobsters are allowed on the Battlefield.
        Discard all Mobsters from the Battlefield.
    </x-slot:normal>
</x-card.rulebox>

</x-card>
