@push('background')
{{ view('Catastrophe.background') }}

<x-card.image-credit>Image by USER_NAME on SERVICE</x-card.image-credit>
@endpush

<x-card :$cardNumber card-name="Tsunami">
<x-card.concept.staticon type="Catastrophe" x="530" />
    <image x="0" y="0" class="hero" href="@local(TODO.png)"  />
    
        <text y="500">
<x-card.normalrule>Each player discards 3 cards from the top of his Library.</x-card.normalrule>
<x-card.normalrule>If the Place card on the Battlefield is a Venue or Facility card, discard it.</x-card.normalrule>
<x-card.normalrule>Discard all Mobster and Bystander cards on the Battlefield.</x-card.normalrule>
<x-card.normalrule>Discard all Item cards on the Battlefield.</x-card.normalrule>
    </text>
    

</x-card>