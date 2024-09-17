@push('background')
{{ view('Facility.background') }}
<x-card.flavortext>
    <x-card.flavortext.line>Have a hot meal. Hang out with the boys.</x-card.flavortext.line>
</x-card.flavortext>
@endpush


<x-card :$cardNumber card-name="Community Center">
    <x-card.rulebox>
        <x-card.concept-card type="Facility" />
        <text y="80" filter="url(#solid)">
            <x-card.normalrule>No Mobsters are allowed on the Battlefield.</x-card.normalrule>
            <x-card.normalrule>Discard all Mobsters from the Battlefield.</x-card.normalrule>
        </text>
    </x-card.rulebox>

</x-card>
