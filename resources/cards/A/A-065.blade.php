<x-card.image-credit>
@ai
</x-card.image-credit>
@endpush

<x-card.flavortext>
<x-card.flavortext.line>Halitosis is the least of your problems.</x-card.flavortext.line>
</x-card.flavortext>

@push('background')
{{ view('Trait.background') }}
@endpush

<x-card :$cardNumber card-name="Firebreath">
    <image x="0" y="0" class="hero" href="@local(hero/firebreath.jpeg)" />

<x-card.rulebox>
    <x-card.concept-card type="Trait" /> 
    <x-slot:small>Requires Pyros.</x-slot:small>
<x-slot:normal>    
    When this Monster attacks or defends
    & has 1+ Fire Mana cards attached & is 
    not already consuming Fire Mana,
    the defending/attacking Monster takes 
    1d6-1 damage. If the defending/attacking Monster 
    takes any damage, discard 1 Fire Mana card from this Monster.
    </x-slot:normal>
</x-card.rulebox>
</x-card>
{{-- https://www.notion.so/monmamo/Firebreath-570c6fc6a1b541928a7b4168293b2c6e?pvs=4#8b14c79fef304feaaacd808a2007baa7 --}}

