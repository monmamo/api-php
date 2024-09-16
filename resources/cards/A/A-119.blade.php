<x-card.image-credit>Image by freepik</x-card.image-credit>
<x-card.flavortext>
    <x-card.flavortext.line>Does a monster good!</x-card.flavortext.line>
    </x-card.flavortext>
@endpush
{{-- https://www.freepik.com/free-photo/brain-booster-pills-container-still-life_65114716.htm --}}


<x-card :$cardNumber card-name="Healing Elixir" >
<x-card.concept-card type="Upkeep" />
    <x-card.concept-card type="Item">Item</x-card.concept>
    <x-card.concept-card type="Healing" index="1">Healing</x-card.concept>
<x-card.rulebox>
<x-slot:normal>
<x-card.normalrule>Discard any number of cards from your hand.</x-card.normalrule>
<x-card.normalrule>For each card you discarded,</x-card.normalrule>
<x-card.normalrule>remove 5 damage from one Monster.</x-card.normalrule>
    </x-slot:normal>
</x-card.rulebox>
</x-card.Upkeep>
<?php
 [
     "image": {
        <image x="0" y="0" class="hero" href="@local(A119.jpg)" />
}
