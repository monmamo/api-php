@push('background')
{{ view('Trait.background') }}
@endpush

<x-card :$cardNumber card-name="Deception">
<x-card.rulebox>
<x-card.concept-card type="Trait" />
<x-card.phaserule type="Resolution" y="135" height="135">
    <text >
<x-card.normalrule>If this Monster uses </x-card.normalrule>
<x-card.normalrule>a Defense, add 4 to any roll.</x-card.normalrule>
<x-card.normalrule>(For example, 1d6 becomes 1d10.)</x-card.normalrule>
    </text>
</x-card.phaserule>
</x-card.rulebox>
</x-card>
