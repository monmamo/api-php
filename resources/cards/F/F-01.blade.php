<x-card.image-credit>
<x-card.normalrule>Image by USER_NAME on SERVICE</x-card.normalrule>
</x-card.image-credit>
@endpush

@push('background')
{{ view('Trait.background') }}
@endpush

<x-card :$cardNumber card-name="Herbal Scent">
<x-card.concept.staticon type="Trait" x="530" /> 
    <image x="0" y="0" class="hero" href="@local(TODO.png)"  />
    
    <x-slot:small>
<x-card.normalrule>Requires Floros.</x-card.normalrule>
    </x-slot:small>
        <text>
<x-card.normalrule>Resolution phase (all players):</x-card.normalrule>
<x-card.normalrule>Before resolving attacks, remove 1d4 damage from each Monster on the Battlefield.</x-card.normalrule>
    </text>
    

</x-card>