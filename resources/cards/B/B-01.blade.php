<x-card.flavortext>
<x-card.flavortext.line>FLAVOR_TEXT</x-card.flavortext.line>
</x-card.flavortext>

<x-card.image-credit>
Image by USER_NAME on SERVICE
</x-card.image-credit>
@endpush

@push('background')
{{ view('Draw.background') }}
@endpush

<x-card :$cardNumber card-name="Fabric Allergy">
<x-card.concept.staticon type="Draw" x="530" /> 
    <image x="0" y="0" class="hero" href="@local(TODO.jpg)"  />
    
        <x-card.phaserule type="Resolution" y="135" height="100">
            <text >
                <x-card.normalrule>If this Monster is wearing a Garment, it takes 1d4 damage.</x-card.normalrule>
            </text>
        </x-card.phaserule>
        
        
        </x-card>