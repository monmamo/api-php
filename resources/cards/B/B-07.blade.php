<x-card.image-credit>
Image by USER_NAME on SERVICE
</x-card.image-credit>
@endpush

@push('background')
{{ view('Draw.background') }}
@endpush

<x-card :$cardNumber card-name="Cowardice">
<x-card.concept.staticon type="Draw" x="530" /> 
    <image x="0" y="0" class="hero" href="@local(TODO.png)"  />
    
        <text>
        Attack -3. Defense -3.
    </text>
    

</x-card>