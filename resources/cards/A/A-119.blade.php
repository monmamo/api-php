<x-card.Upkeep :$cardNumber card-name="Healing Elixir" >

<x-slot:card-rules>
</x-slot:card-rules>
</x-card.Upkeep>
<?php
 [
Discard any number of cards from your hand.
For each card you discarded,
remove 5 damage from one Monster.
    ],
    "subtypes": [
Item
Healing
    ],
    "image": {
        <image x="0" y="0" class="hero" href="@local(A119.jpg)" />
        @push('image-credit')
Image by freepik
@endpush
{{-- https://www.freepik.com/free-photo/brain-booster-pills-container-still-life_65114716.htm --}}
    },
    @push('flavor-text')
<x-card.flavor-text-line>Does a monster good!</x-card.flavor-text-line>
@endpush
}
