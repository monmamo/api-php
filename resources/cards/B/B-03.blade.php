<x-card.flavortext>
<x-card.flavortext.line>Excessive sweating.</x-card.flavortext.line>
</x-card.flavortext>

<x-card.image-credit>
Image by USER_NAME on SERVICE
</x-card.image-credit>
@endpush

@push('background')
{{ view('Draw.background') }}
@endpush

<x-card :$cardNumber card-name="Hyperhidrosis">
<x-card.concept.staticon type="Draw" x="530" /> 
    <image x="0" y="0" class="hero" href="@local(TODO.jpg)"  />
    
        <text>
TODO
    </text>
    

</x-card>