<?php

namespace App\View\Components;

use App\CardNumber;
use App\Contracts\Card\CardComponents;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Support\Facades\Blade;
use Illuminate\View\Component;
use Illuminate\View\View;

class Card extends Component //implements CardComponents
{
    protected readonly CardNumber $card_number_parsed;

    public function __construct(
        public string $cardNumber,
        public ?CardComponents $spec,
        public ?string $cardName = null,
        public float $titleboxOpacity = 1,
        public mixed $concepts = null,
        public int $dx = 0,
        public int $dy = 0,
        public bool $omitCommon = false,
    ) {
        $this->cardName ??= $this->spec->name();
    }

    /**
     * @group nonary
     */
    private function _backgroundPieces(): \Traversable
    {
        $background = $this->spec->background() ?? match (true) {
            \count($this->concepts) === 0 => '<x-card.background />',
            \Illuminate\Support\Facades\View::exists($this->concepts[0] . '.background') => $this->concepts[0][0] . '.background',
            default => '<x-card.background />'
        };

        yield match (true) {
            $background instanceof View => $background,
            $background instanceof Htmlable => $background->toHtml(),
            $background instanceof \Stringable => (string) $background,
            \is_string($background) => Blade::render($background, []),
            \is_null($background) => null
        };

        if (!\is_null($image_credit = $this->spec->imageCredit())) {
            yield \App\Strings\html(
                'text',
                ['x' => '50%', 'y' => '50', 'class' => 'credit', 'text-anchor' => 'middle', 'alignment-baseline' => 'baseline',  'fill' => $this->creditColor()],
                $image_credit,
            );
        }
    }

    /**
     * @group nonary
     */
    public function background()
    {
        $html = '';

        foreach ($this->_backgroundPieces() as $piece) {
            $html .= $piece;
        }
        return $html;
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
     * @group nonary
     */
    public function hero(): ?string
    {
        return $this->spec->hero();
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
     * @group nonary
     */
    public function prerequisites(): \Traversable
    {
        return $this->spec->prerequisites();
    }

    /**
     * Get the view / contents that represent the component.
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
        $this->card_number_parsed ??= CardNumber::make($this->cardNumber);
        return $this->card_number_parsed->set;
    }
}
