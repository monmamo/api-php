@push('background')
{{ view('Catastrophe.background') }}
<x-card.image-credit>Image by USER_NAME on SERVICE</x-card.image-credit>
@endpush

<x-card :$cardNumber card-name="Volcanic Eruption">
<x-card.concept.staticon type="Catastrophe" x="530" />
    <image x="0" y="0" class="hero" href="@local(TODO.png)"  />
    
        <text>
<x-card.normalrule>May be played only when the Place on the Battlefield is a Volcano.</x-card.normalrule>
<x-card.normalrule>Each Monster on the Battlefield that does not have some sort of flying ability immediately takes 2 damage.</x-card.normalrule>
<x-card.normalrule>Each player discards 3 cards from the top of his Library.</x-card.normalrule>
<x-card.normalrule>Discard all Mobster and Bystander cards on the Battlefield.</x-card.normalrule>
    </text>
    

</x-card>