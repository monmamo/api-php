@push('background')
{{ view('Vendor.background') }}

<x-card.flavortext>
    <x-card.flavortext.line>Where the real money from the concept is made.</x-card.flavortext.line>
    <x-card.flavortext.line>- Mel Brooks (paraphrased)</x-card.flavortext>
    </x-card.flavortext>
    @endpush

    <x-card :$cardNumber :$dx :$dy card-name="Merchandizing">
        
            <x-card.concept.staticon type="Vendor"/>
            <x-card.phaserule type="Draw" lines="3"><text>    
                <x-card.normalrule>Discard a card from your hand</x-card.normalrule>
                <x-card.normalrule>to take a card of your choice from your Library.</x-card.normalrule>
            </text></x-card.phaserule>
        
    </x-card>
