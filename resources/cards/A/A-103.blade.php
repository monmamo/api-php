@push('image-credit')
@ai
@endpush

<x-card.Upkeep :$cardNumber card-name="Drinking Water Fountain">
  <image x="0" y="0" class="hero" href="@local(A307.png)" />

  <x-card.rulebox>
        <x-slot:normal>
          Upkeep phase: You may heal 4 damage from 
          and/or attach a Water Mana card from your  
          Library or Discard to each of your Monsters
          in play. After using this card, put it at the 
          bottom of your deck. If you searched through 
          your Library, shuffle it.          
      </x-slot:normal>
</x-card.rulebox>
</x-card.Upkeep>