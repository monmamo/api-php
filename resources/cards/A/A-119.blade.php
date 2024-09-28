@push('background') 
{{ view('Item.background') }}
<x-card.image-credit>Image by freepik</x-card.image-credit>
'flavor-text' => [
    'Does a monster good!'
    ],
@endpush

{{-- https://www.freepik.com/free-photo/brain-booster-pills-container-still-life_65114716.htm --}}

<x-card :$cardNumber card-name="Healing Elixir" >
    <image x="0" y="0" class="hero" href="@local(A119.jpg)" />
    'concepts' => ['Item'],
    'concepts' => ['Healing'],

        <x-card.phaserule type="Upkeep"  lines="3"><text >    
<x-card.normalrule>Discard any number of cards from</x-card.normalrule>
<x-card.normalrule>your hand. For each card you discarded, </x-card.normalrule>
<x-card.normalrule>remove 5 damage from one Monster.</x-card.normalrule>
</text></x-card.phaserule>  </x-card>