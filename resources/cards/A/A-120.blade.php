@push('image-credit')
Image by freepik
@endpush

@push('flavor-text')
<x-card.flavor-text-line>Does a monster good!</x-card.flavor-text-line>
@endpush

<x-card.Upkeep :$cardNumber card-name="Healing Salve">
    <image x="0" y="0" class="hero" href="@local(A120.png)" />
    <x-card.concept type="Item">Item</x-card.concept>
    <x-card.concept type="Healing" index="1">Healing</x-card.concept>

    <x-slot:card-rules>
        Attach this card to a Monster.
    Resolution phase: If this Monster
      did not take any damage on this turn,
      remove 3d6 damage from it.
    </x-slot:card-rules>
</x-card.Upkeep>

{{-- https://www.freepik.com/free-psd/skin-product-isolated_158243292.htm --}}
{{-- prompt: green jar of healing ointment --}}
