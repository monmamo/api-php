{{-- inspiration: Fieldworker PTCG card https://bulbapedia.bulbagarden.net/wiki/Fieldworker_(EX_Legend_Maker_73) --}}

@push('image-credit')
Image by Freepik
@endpush

<x-card.Bystander :$cardNumber card-name="Fieldworker">
    <image x="0" y="0" class="hero" href="@local(hero/fieldworker.jpg)"  />
    <x-card.concept type="Integrity">1d4</x-card.concern>
        <x-card.concept type="Male" index="1">Male</x-card.concern>
        <x-card.concept type="Cumulative" index="2">Cumulative</x-card.concern>
        
            <x-card.rulebox>
                <x-slot:small>
                    A player may have any number of Drivers on the Battlefield.
                </x-slot:small>
                <x-slot:normal>Draw phase: You may choose to 
                    draw up to 2 cards for each Fieldworker 
                    you have on the Battlefield.
                Then you may Redraw.</x-slot:normal>
            </x-card.rulebox>
</x-card.Bystander>
