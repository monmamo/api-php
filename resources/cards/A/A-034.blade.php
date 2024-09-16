<x-card.image-credit>
Image by freepik
</x-card.image-credit>
@endpush

<x-card :$cardNumber card-name="Gene Pool" >
    <image x="-75" y="0" href="@local(hero/gene-pool.jpg)" source="https://www.freepik.com/free-photo/dna-representation-concept_44999157.htm" />
<x-card.rulebox>
    <x-card.concept-card type="Setup" />
    <x-slot:normal>
    Attach a Trait card to a Monster from your
    hand, Library or Discard.
    You may play another card on this turn.
</x-slot:normal>
</x-card.rulebox>
</x-card>