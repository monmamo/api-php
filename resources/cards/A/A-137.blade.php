@push('background')
{{ view('Vendor.background') }}
@endpush

<x-card :$cardNumber card-name="Junk Patrol">
    
        <x-card.concept.staticon type="Vendor" x="530" />

        <text>Put a discarded Item card into your hand.</text>
    
</x-card>

{{-- _inspiration": "https://bulbapedia.bulbagarden.net/wiki/Junk_Arm_(Triumphant_87) --}}
