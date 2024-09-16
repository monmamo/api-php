@push('background')
{{ view('Vendor.background') }}
@endpush

<x-card :$cardNumber card-name="Junk Patrol" >
<x-card.concept-card type="Vendor" />

</x-card.Vendor>
    <x-card.rulebox>
<x-slot:normal>Put a discarded Item card into your hand.</x-slot:normal>
</x-card.rulebox>
    
{{-- _inspiration": "https://bulbapedia.bulbagarden.net/wiki/Junk_Arm_(Triumphant_87) --}}
