    
@push('image-credit')
Image by Lorc on Game-Icons.net under CC BY 3.0
{{-- https://game-icons.net/1x1/lorc/gift-trap.html --}}
@endpush
    
@push('background')
{{ view('Draw.background') }}
@endpush

    <x-card :$cardNumber card-name="Basic Lure">
        <path class="svg-hero" d="M137 98.656c-16.695.23-30.792 4.135-44.03 10.47L51.155 125.31l6.72 17.407 47.374-18.314c29.788 2.705 51.25 10.618 64.625 21.25-14.55-3.855-36.98-5.487-62.28-3.656-.255 0-.535-.43-.814-.188v.063c-20.038 10.504-35.305 23.39-47.25 38.22l-.124-.126-40.468 45.874 14 12.375 39.968-45.25c12.475-6.585 26.963-12.64 42.906-17.407-16.033 15.476-26.79 31.88-33.937 49.343L55.47 277.03l16.686 8.44 28.188-55.72c10.678-9.705 23.508-19.39 38.062-28.188-14.368 23.392-21.037 46.116-22.375 69.125L111 303.125 129.47 306l7.593-48.78c12.085-17.806 29.716-36.438 54.406-54.5 15.688-11.484 29.222-29.287 30.843-45.626 2.235-22.436-13.413-43.398-35.813-50.28-19.113-5.874-35.252-8.353-49.5-8.158zm235.5 0c-13.583.133-28.894 2.65-46.813 8.156-22.4 6.884-38.078 27.846-35.843 50.282 1.62 16.34 15.186 34.142 30.875 45.625 24.662 18.042 42.29 36.65 54.374 54.436L382.72 306l18.467-2.875-5.03-32.25c-1.313-23.073-7.968-45.858-22.376-69.313 14.557 8.8 27.385 18.482 38.064 28.188l28.187 55.72 16.658-8.44-26.5-52.405c-7.147-17.362-17.863-33.667-33.813-49.063 15.943 4.768 30.43 10.823 42.906 17.407l39.97 45.25 14-12.376-40.5-45.875-.125.093c-11.94-14.814-27.195-27.692-47.22-38.188v-.063c-.277-.242-.557.188-.81.188-25.302-1.83-47.732-.2-62.283 3.656 13.38-10.636 34.82-18.548 64.625-21.25l47.344 18.313 6.75-17.407-41.81-16.188c-13.24-6.334-27.337-10.24-44.033-10.47-.89-.01-1.78-.008-2.687 0zM256.406 213.25l-29.875 16.063c17.367 18.545 21.357 38.456 20.845 55.906-7.2-4.745-14.84-9.365-22.03-12.5-42.413-18.495-76.576 29.284-76.25 78.092.324 48.81 26.526 95.435 68.936 103.907 10.856 2.167 32.447-3.007 38.814-20.626 8.826 17.087 29.49 22.085 40.312 19.687 42.293-9.345 64.763-56.715 69.906-105.25h.032c4.502-42.497-33.786-100.522-80.875-76.436-6.1 3.12-12.72 7.05-19.095 11.187 2.077-24.64-2.11-50.12-10.72-70.03z" ></path>

     
        <x-card.rulebox>
            <x-card.concept-card type="Draw" /> 
            <x-card.concept-card type="Item" index="1" /> 
            <x-card.concept-card type="Lure" index="2" /> 
           <x-slot:normal>
Flip a coin. If heads, you may search your Library 
for a Monster card. 
Reveal that/those card(s). 
Put that/those card(s) in your hand.
</x-slot:normal>
    
</x-card.rulebox>
  

</x-card>
