<x-card.image-credit>
Generated with StarryAI. Placeholder image.
</x-card.image-credit>
@endpush

@push('background')
{{ view('Catastrophe.background') }}
@endpush


<x-card :$cardNumber card-name="Cruel Order">
    <image x="0" y="0" class="hero" href="@local(A066.jpeg)" />
    <x-card.rulebox>
        <x-card.concept-card type="Catastrophe" />
        <x-slot:normal>
        Discard the highest-level Monster
        of each opponent
        and all cards attached to that Monster.
    </x-slot:normal>
</x-card.rulebox>
</x-card>
