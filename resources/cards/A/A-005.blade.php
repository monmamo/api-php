@push('background')
{{ view('Facility.background') }}
<x-card.flavortext>
    <x-card.flavortext.line>Have a hot meal. Hang out with the boys.</x-card.flavortext.line>
</x-card.flavortext>
@endpush


<x-card :$cardNumber card-name="Community Center">
    <x-card.rulebox>
        <x-card.concept-card type="Facility" />
        <x-slot:normal>
            No Mobsters are allowed on the Battlefield.
            Discard all Mobsters from the Battlefield.
        </x-slot:normal>
    </x-card.rulebox>

</x-card>
