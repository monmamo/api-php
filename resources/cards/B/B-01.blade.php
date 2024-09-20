@push('background')
{{ view('Bane.background') }}
<x-card.flavortext>
<x-card.flavortext.line>FLAVOR_TEXT</x-card.flavortext.line>
</x-card.flavortext>

<x-card.image-credit>
Image by USER_NAME on SERVICE
</x-card.image-credit>
@endpush

<x-card :$cardNumber card-name="Fabric Allergy">
<x-card.concept.staticon type="Bane" x="530" /> 
    <image x="0" y="0" class="hero" href="@local(TODO.jpg)"  />
    
    <text y="500" filter="url(#solid)">
        <x-card.smallrule>{{trans_choice('rules.monster-limit',1)}}</x-card.smallrule>
        </text >
    
        <x-card.phaserule type="Resolution" y="135" height="100">
            <text >
                <x-card.normalrule>If this Monster is wearing a Garment, it takes 1d4 damage.</x-card.normalrule>
            </text>
        </x-card.phaserule>
        
        
        </x-card>