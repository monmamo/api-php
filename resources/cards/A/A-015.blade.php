    
    @push('background')
    {{ view('Trait.background') }}
    @endpush
    
    <x-card  :$cardNumber card-name="Berserk">

        <x-card.rulebox>
            <x-card.concept-card type="Trait" /> 
            <x-slot:normal>Speed +2 when remaining HP drops below half.</x-slot:normal>
        </x-card.rulebox>

</x-card>
