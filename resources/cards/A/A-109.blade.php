@push('background')
{{ view('Upkeep.background') }}
@endpush

<x-card :$cardNumber card-name="Recall the Wounded" >
    <x-card.phaserule type="Upkeep"  height="150"><text >    
        <x-card.normalrule>Shuffle your Knocked Out Monsters</x-card.normalrule>
        <x-card.normalrule>into your Library. </x-card.normalrule>
        <x-card.smallrule>The Monsters still count as Knocked Out for</x-card.smallrule> 
            <x-card.smallrule>the purpose of resolving the match.</x-card.smallrule>
    </text></x-card.phaserule>  </x-card>