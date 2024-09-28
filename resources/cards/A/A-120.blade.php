@push('background')
{{ view('Item.background') }}
<x-card.image-credit>Image by freepik</x-card.image-credit>
{{-- https://www.freepik.com/free-psd/skin-product-isolated_158243292.htm --}}
{{-- prompt: green jar of healing ointment --}}
'flavor-text' => [
    'Does a monster good!'
],
@endpush

<x-card :$cardNumber card-name="Healing Salve">

    <image x="0" y="0" class="hero" href="@local(A120.png)" />
    'concepts' => ['Item'],
    'concepts' => ['Healing'],

                <x-card.phaserule type="Upkeep" y="600" lines="1">
                    <text>
                        <x-card.normalrule>Attach this card to a Monster.</x-card.normalrule>
                    </text>
                </x-card.phaserule>

                <x-card.phaserule type="Resolution" lines="3">
                    <text>
                        <x-card.normalrule>If this Monster</x-card.normalrule>
                        <x-card.normalrule>did not take any damage on this turn,</x-card.normalrule>
                        <x-card.normalrule>remove 3d6 damage from it.</x-card.normalrule>
                    </text>
                </x-card.phaserule>

            
</x-card>
