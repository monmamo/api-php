<x-card.image-credit>
Image by Delapouite on Game-Icons.net under CC BY 3.0
</x-card.image-credit>
@endpush

<x-card.flavortext>
<x-card.flavortext.line>I've got a driver and that's a start.</x-card.flavortext.line>
</x-card.flavortext>


@push('background')
{{ view('Bystander.background') }}
@endpush

<x-card :$cardNumber card-name="Driver">

    <g transform="scale(1.25) translate(-5,-25)"><path d="M188.287 169.428c-28.644-.076-60.908 2.228-98.457 8.01-4.432.62-47.132 24.977-58.644 41.788-11.512 16.812-15.45 48.813-15.45 48.813-3.108 13.105-1.22 34.766-.353 36.872 1.17 4.56 7.78 8.387 19.133 11.154C35.84 295.008 53.29 278.6 74.39 278.574c22.092 0 40 17.91 40 40-.014 1.764-.145 3.525-.392 5.272.59.008 1.26.024 1.82.03l239.266 1.99c-.453-2.405-.685-4.845-.693-7.292 0-22.09 17.91-40 40-40 22.092 0 40 17.91 40 40 0 2.668-.266 5.33-.796 7.944l62.186.517c1.318-22.812 6.86-46.77-7.024-66.72-5.456-7.84-31.93-22.038-99.03-32.66-34.668-17.41-68.503-37.15-105.35-48.462-28.41-5.635-59.26-9.668-96.09-9.765zm-17.197 11.984c5.998.044 11.5.29 16.014.81l7.287 48.352c-41.43-5.093-83.647-9.663-105.964-27.5.35-5.5 7.96-13.462 16.506-16.506 4.84-1.724 40.167-5.346 66.158-5.156zm34.625.348c25.012.264 62.032 2.69 87.502 13.94 12.202 5.65 35.174 18.874 50.537 30.55l-6.35 10.535c-41.706-1.88-97.288-4.203-120.1-6.78l-11.59-48.245zM74.39 294.574a24 24 0 0 0-24 24 24 24 0 0 0 24 24 24 24 0 0 0 24-24 24 24 0 0 0-24-24zm320 0a24 24 0 0 0-24 24 24 24 0 0 0 24 24 24 24 0 0 0 24-24 24 24 0 0 0-24-24z" fill="#ffffff" fill-opacity="1"></path></g>

    <x-card.rulebox>
        
        <x-card.concept-card type="Bystander"  />
        
            <x-card.concept.row>
                <x-card.concept.card type="Male" x="0" width="150" />
        <x-card.concept-card type="Cumulative" x="150" width="230" />
        <x-card.concept.card type="Integrity" x="380" width="230" >1d4</x-card.concept>
        </x-card.concept.row>
        <x-slot:small>    
            A player may have any number of Drivers on the Battlefield.
            You may make this card Female when you play it on the Battlefield.
        </x-slot:small>
        <x-slot:normal>You may take one additional Draw phase.</x-slot:normal>
    </x-card.rulebox>
    

</x-card>