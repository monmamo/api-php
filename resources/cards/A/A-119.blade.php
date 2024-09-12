@push('image-credit')
Image by freepik
@endpush
{{-- https://www.freepik.com/free-photo/brain-booster-pills-container-still-life_65114716.htm --}}

@push('flavor-text')
<x-card.flavor-text-line>Does a monster good!</x-card.flavor-text-line>
@endpush

<x-card.Upkeep :$cardNumber card-name="Healing Elixir" >
    <x-card.concept type="Item">Item</x-card.concept>
    <x-card.concept type="Healing" index="1">Healing</x-card.concept>
<x-slot:card-rules>
    Discard any number of cards from your hand.
    For each card you discarded,
    remove 5 damage from one Monster.
    </x-slot:card-rules>
</x-card.Upkeep>
<?php
 [
     "image": {
        <image x="0" y="0" class="hero" href="@local(A119.jpg)" />
}
