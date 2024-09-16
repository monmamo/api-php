@push('background')
{{ view('Draw.background') }}
@endpush

<x-card :$cardNumber card-name="Reconnaissance Team">
<x-card.rulebox>
<x-card.concept-card type="Draw" />
<x-slot:normal>
<x-card.normalrule>Discard up to 2 Monster cards from your hand.</x-card.normalrule>
<x-card.normalrule>Draw 3 cards for each card</x-card.normalrule>
<x-card.normalrule>you discarded in this way.</x-card.normalrule>
  </x-slot:normal>
</x-card.rulebox>
</x-card>