<x-card.Setup :$cardNumber card-name="Gene Pool" >
    <image x="-75" y="0" href="@local(hero/gene-pool.jpg)" source="https://www.freepik.com/free-photo/dna-representation-concept_44999157.htm" />
    @push('image-credit')
Image by freepik
@endpush
<x-slot:card-rules>
    Attach a Trait card to a Monster from your
    hand, Library or Discard.
    You may play another card on this turn.
</x-slot:card-rules>
</x-card.Setup>