@push('background')
{{ view('Trait.background') }}
<x-card.image-credit>
    @ai
    </x-card.image-credit>
    @endpush

<x-card :$cardNumber card-name="Dandruff">
    <image x="0" y="0" class="hero" href="@local(hero/dandruff.jpeg)" />
    

    <x-card.concept.staticon type="Trait" x="530" /> 
    <x-card.phaserule type="Resolution" height="135">
    <text>
<x-card.normalrule>When this Monster takes a physical attack, </x-card.normalrule>
<x-card.normalrule>the attacking Monster takes 1d6 damage.</x-card.normalrule>
</text>
    </x-card.phaserule>
</x-card>
