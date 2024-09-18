@push('background')
{{ view('Bane.background') }}
<x-card.flavortext>
<x-card.flavortext.line>FLAVOR_TEXT</x-card.flavortext.line>
</x-card.flavortext>

<x-card.image-credit>
Image by USER_NAME on SERVICE
</x-card.image-credit>
@endpush

<x-card :$cardNumber card-name="Sunken Eye">
<x-card.concept.staticon type="Bane" x="530" /> 
    <image x="0" y="0" class="hero" href="@local(TODO.jpg)"  />
    
        <text y="500">
            <x-card.normalrule>You may play this Bane only with an Attack.</x-card.normalrule>
                <x-card.normalrule>Limit 2 per Monster.</x-card.normalrule>
    </text>
    
    <x-card.phaserule type="Resolution" height="135">
        <text >                
TODO
        </text>
    </x-card.phaserule>

</x-card>