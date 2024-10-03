<?php

namespace App;

use App\Contracts\Card\CardComponents;

class CardSpec implements \IteratorAggregate, CardComponents
{
    protected readonly CardNumber $card_number_parsed;

    public function __construct(
        protected readonly string $card_number,
        protected readonly string $card_name,
        protected readonly array $concepts,
        protected readonly ?string $image_prompt = null,
        protected readonly ?string $image_credit = null,
        protected readonly array $flavor_text = [],
        protected readonly bool $no_content = false,
        protected readonly array $secondary_lines = [],
        protected readonly array $primary_lines = [],
        protected ?string $background = null,
    ) {}

    /**
     * @group nonary
     */
    public function background()
    {
        return $this->background;
    }

    /**
     * @group nonary
     */
    public function cardNumber(): string
    {
        return $this->card_number;
    }

    /**
     * @group nonary
     */
    public function concepts(): array
    {
        return $this->concepts;
    }

    /**
     * @implements \IteratorAggregate::getIterator
     * @group nonary
     */
    public function getIterator(): \Traversable
    {
        return \App\Card\makeNewCard(
            card_name: $this->card_name,
            concepts: $this->concepts,
            flavor_text: $this->flavor_text,
            no_content: $this->no_content,
            secondary_lines: $this->secondary_lines,
            primary_lines: $this->primary_lines,
            background: $this->background,
        );
    }

    /**
     * @group nonary
     */
    public function imageCredit(): ?string
    {
        return $this->image_credit;
    }

    /**
     * @implements \App\Contracts\HasName
     */
    public function name(): string
    {
        return $this->card_name;
    }

    /**
     * @group nonary
     */
    public function set(): string
    {
        $this->card_number_parsed ??= CardNumber::make($this->card_number);
        return $this->card_number_parsed->set;
    }
}
