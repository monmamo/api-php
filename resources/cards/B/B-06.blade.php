@push('background')
{{ view('Bane.background') }}
<x-card.image-credit>
Image by USER_NAME on SERVICE
</x-card.image-credit>
@endpush

<x-card :$cardNumber card-name="Permanent Blindness">
<x-card.concept.staticon type="Bane" x="530" /> 
    <image x="0" y="0" class="hero" href="@local(TODO.png)"  />
    
    <text y="500" filter="url(#solid)">
        <x-card.smallrule>Limit 1 per Monster.</x-card.smallrule>
        <x-card.smallrule>You may play this card only with an Attack.</x-card.smallrule>
        </text >
    
        <x-card.phaserule type="Resolution" height="135">
            <text >                
<x-card.normalrule>TODO</x-card.normalrule>
</text>
</x-card.phaserule>
    

</x-card>