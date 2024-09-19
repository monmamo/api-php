@push('background') 
{{ view('Item.background') }}
<x-card.image-credit>Image by freepik</x-card.image-credit>
<x-card.flavortext>
    <x-card.flavortext.line>Does a monster good!</x-card.flavortext.line>
    </x-card.flavortext>
@endpush

{{-- https://www.freepik.com/free-photo/brain-booster-pills-container-still-life_65114716.htm --}}

<x-card :$cardNumber card-name="Healing Elixir" >
    <image x="0" y="0" class="hero" href="@local(A119.jpg)" />
    <x-card.concept.staticon type="Item" :dx="2" />
    <x-card.concept.staticon type="Healing" />

        <x-card.phaserule type="Upkeep"  lines="3"><text >    
<x-card.normalrule>Discard any number of cards from</x-card.normalrule>
<x-card.normalrule>your hand. For each card you discarded, </x-card.normalrule>
<x-card.normalrule>remove 5 damage from one Monster.</x-card.normalrule>
</text></x-card.phaserule>  </x-card>