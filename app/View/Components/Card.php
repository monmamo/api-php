<?php

namespace App\View\Components;

use App\CardNumber;
use Illuminate\View\Component;
use Illuminate\View\View;

class Card extends Component //implements CardComponents
{
    protected readonly CardNumber $card_number_parsed;

    public float $height;

    public readonly \App\Contracts\Card\CardComponents $spec;

    /**
     * Constructor.
     *
     * @group magic
     * @group mutator
     * @group variadic
     *
     * @uses \config
     *
     * @return void
     */
    public function __construct(
        public string $cardNumber,
        public ?string $cardName = null,
        public ?float $width = null,
        public float $titleboxOpacity = 1,
        public mixed $concepts = null,
        public int $dx = 0,
        public int $dy = 0,
        public bool $omitCommon = false,
    ) {
        $this->card_number_parsed = CardNumber::make($this->cardNumber);
        $this->spec = require $this->card_number_parsed->getSpecFilePath();

        $this->cardName ??= $this->spec->name();
        $this->width ??= \config('card-design.width');
        $this->height ??= \config('card-design.height') * $this->width / \config('card-design.width');
    }

    /**
     * @group nonary
     */
    public function cardNumber(): string
    {
        return $this->cardNumber;
    }

    /**
     * @group nonary
     */
    public function creditColor(): string
    {
        return $this->spec->creditColor();
    }

    /**
     * @implements \App\Contracts\HasName
     */
    public function imageCredit(): ?string
    {
        return $this->spec->imageCredit();
    }

    /**
     * @group nonary
     */
    public function name(): string
    {
        return $this->cardName;
    }

    /**
     * Returns the view / contents that represent the component.
     * This is a point where we can inject a value into the view.
     *
     * @group nonary
     */
    public function render(): View
    {
        if (\is_null($this->cardNumber)) {
            \dump($this, $this->data());
            throw new \Exception('cardNumber must be set before rendering');
        }
        return \view('components.card.index');
    }

    /**
     * @group nonary
     */
    public function set(): string
    {
        return $this->card_number_parsed->set;
    }
}
