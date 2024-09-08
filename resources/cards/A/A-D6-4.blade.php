
<x-card :$cardNumber card-name="Force Roll 4" card-type="Special">
    <g class="svg-hero">
        <path d="M74.5 36A38.5 38.5 0 0 0 36 74.5v363A38.5 38.5 0 0 0 74.5 476h363a38.5 38.5 0 0 0 38.5-38.5v-363A38.5 38.5 0 0 0 437.5 36h-363zm48.97 36.03A50 50 0 0 1 172 122a50 50 0 0 1-100 0 50 50 0 0 1 51.47-49.97zm268 0A50 50 0 0 1 440 122a50 50 0 0 1-100 0 50 50 0 0 1 51.47-49.97zm-268 268A50 50 0 0 1 172 390a50 50 0 0 1-100 0 50 50 0 0 1 51.47-49.97zm268 0A50 50 0 0 1 440 390a50 50 0 0 1-100 0 50 50 0 0 1 51.47-49.97z"></path>
    </g>
    
    <x-card.rulebox>
        <x-slot:small>
            You may apply this to any 1d6 roll, be it your own or another player's.
            Discard this card after using.
        </x-slot:small>
        <x-slot:normal>One 1d6 roll counts as @dieroll(4).</x-slot:normal>
    </x-card.rulebox>
</x-card>
