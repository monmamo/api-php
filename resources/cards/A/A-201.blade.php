@push('background')
{{ view('Draw.background') }}
@endpush

<x-card :$cardNumber card-name="Product Recall">
<x-card.rulebox>
<x-card.concept-card type="Draw" />
<x-slot:normal>
<x-card.normalrule>Choose one of your opponents.</x-card.normalrule>
<x-card.normalrule>That opponent reveals his or her hand and </x-card.normalrule>
<x-card.normalrule>shuffles all Item cards found there into </x-card.normalrule>
<x-card.normalrule>his or her Library. Then, draw a number of cards </x-card.normalrule>
<x-card.normalrule>equal to the number of Item cards your opponent </x-card.normalrule>
<x-card.normalrule>shuffled into his or her Library.</x-card.normalrule>
  </x-slot:normal>
</x-card.rulebox>
</x-card>