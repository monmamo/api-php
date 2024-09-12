<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Card extends Component
{
    public function __construct(
        public string $cardName,
        public string $creditColor = 'white',
        public float $titleboxOpacity = 1,
        public ?string $cardNumber =  null, // will be set later
        public mixed $concepts = null,
    ) {}
    /**
     * Get the view / contents that represent the component.
     * This is a point where we can inject a value into the view.
     */
    public function render(): \Illuminate\View\View
    {

        if (is_null($this->cardNumber)) {
            dump($this, $this->data());
            throw new \Exception('cardNumber must be set before rendering');
        }
        return view('components.card.index');
    }
}
