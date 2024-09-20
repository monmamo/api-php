@push('background')
{{ view('Bane.background') }}
<x-card.flavortext>
<x-card.flavortext.line>Excessive sweating.</x-card.flavortext.line>
</x-card.flavortext>

<x-card.image-credit>
Image by USER_NAME on SERVICE
</x-card.image-credit>
@endpush

<x-card :$cardNumber card-name="Hyperhidrosis">
    <x-card.concept.staticon type="Bane" x="530" /> 
    <image x="0" y="0" class="hero" href="@local(TODO.jpg)"  />
    
    <text y="500" filter="url(#solid)">
        <x-card.smallrule>{{trans_choice('rules.monster-limit',1)}}</x-card.smallrule>
        </text >

<x-card.phaserule type="Resolution" height="135">
    <text >     
TODO
    </text>
</x-card.phaserule>  

</x-card>