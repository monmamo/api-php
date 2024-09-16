@push('background')
{{ view('Upkeep.background') }}
<x-card.image-credit>Image by freepik</x-card.image-credit>
{{-- https://www.freepik.com/free-psd/skin-product-isolated_158243292.htm --}}
{{-- prompt: green jar of healing ointment --}}

<x-card.flavortext>
    <x-card.flavortext.line>Does a monster good!</x-card.flavortext.line>
</x-card.flavortext>
@endpush

<x-card :$cardNumber card-name="Healing Salve">

    <image x="0" y="0" class="hero" href="@local(A120.png)" />
    <x-card.concept-card type="Item">Item</x-card.concept>
        <x-card.concept-card type="Healing" index="1">Healing</x-card.concept>

            <x-card.rulebox>

                <x-card.phaserule type="Upkeep" y="135" height="100">
                    <text>
                        <x-card.normalrule>Attach this card to a Monster.</x-card.normalrule>
                    </text>
                </x-card.phaserule>

                <x-card.phaserule type="Resolution" y="135" height="100">
                    <text>
                        <x-card.normalrule>If this Monster</x-card.normalrule>
                        <x-card.normalrule>did not take any damage on this turn,</x-card.normalrule>
                        <x-card.normalrule>remove 3d6 damage from it.</x-card.normalrule>
                    </text>
                </x-card.phaserule>

            </x-card.rulebox>
</x-card>
