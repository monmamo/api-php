@push('image-credit')
@ai
@endpush

@push('flavor-text')
<x-card.flavor-text-line>Halitosis is the least of your problems.</x-card.flavor-text-line>
@endpush


<x-card concepts="Trait" :$cardNumber card-name="Firebreath">
    <image x="0" y="0" class="hero" href="@local(hero/firebreath.jpeg)" />
<x-slot:card-rules>
    Requires Pyros. When this Monster attacks or defends
    & has 1+ Fire Mana cards attached
    & is not already consuming Fire Mana,
    the defending/attacking Monster takes 1d6-1 damage.
    If the defending/attacking Monster takes any damage,
    discard 1 Fire Mana card from this Monster.
    </x-slot:card-rules>
</x-card>
{{-- https://www.notion.so/monmamo/Firebreath-570c6fc6a1b541928a7b4168293b2c6e?pvs=4#8b14c79fef304feaaacd808a2007baa7 --}}

