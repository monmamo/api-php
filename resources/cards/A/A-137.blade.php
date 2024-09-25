@push('background')
{{ view('Vendor.background') }}
@endpush

<x-card :$cardNumber :$dx :$dy card-name="Junk Patrol">
    
        <x-card.concept.staticon type="Vendor"  />

    
        <x-card.phaserule type="Draw" lines="2">
                <text>
                        <x-card.normalrule>Put an Item card from your </x-card.normalrule>
                                <x-card.normalrule>Discard into your hand.</x-card.normalrule></text></x-card.phaserule>
    
</x-card>

{{-- _inspiration": "https://bulbapedia.bulbagarden.net/wiki/Junk_Arm_(Triumphant_87) --}}
