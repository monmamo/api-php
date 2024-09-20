@push('background')
{{ view('Bane.background') }}
<x-card.image-credit>
Image by USER_NAME on SERVICE
</x-card.image-credit>
@endpush

<x-card :$cardNumber card-name="Cowardice">
<x-card.concept.staticon type="Bane" x="530" /> 
    <image x="0" y="0" class="hero" href="@local(TODO.png)"  />
    
    <text y="500" filter="url(#solid)">
        <x-card.smallrule>{{trans_choice('rules.monster-limit',1)}}</x-card.smallrule>
        </text >

    <x-card.phaserule type="Resolution" height="135">
        <text >                
            <x-card.normalrule>Attack -1d6.</x-card.normalrule> 
                <x-card.normalrule>Defense -1d6.</x-card.normalrule>
    </text>
</x-card.phaserule>

</x-card>