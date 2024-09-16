@push('background')
{{ view('Draw.background') }}
@endpush

<x-card :$cardNumber card-name="Grab Bag">
<x-card.concept-card type="Draw" /> 
  <image x="0" y="0" class="hero" href="@local(A108.jpg)" />
<x-card.rulebox>
<x-slot:normal>
  "image credit": "Shutterstock #2348597925
<x-card.normalrule>Reveal the top 7 cards of your Library.</x-card.normalrule>
<x-card.normalrule>You may put any Item cards in your hand.</x-card.normalrule>
<x-card.normalrule>Discard the rest.</x-card.normalrule>
  </x-slot:normal>
</x-card.rulebox>
</x-card>