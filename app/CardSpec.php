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
     * @group nonary
     */
    public function flavorText(): \Traversable
    {
        return new \ArrayIterator($this->flavor_text);
    }

    /**
     * @implements \IteratorAggregate::getIterator
     * @group nonary
     */
    public function getIterator(): \Traversable
    {
        $format_value = fn ($key, $value) => \sprintf("'%s' => %s,", $key, \json_encode($value));

        yield '<?php';
        yield 'return [';
        yield $format_value('name', $this->card_name);
        yield '';
        yield $format_value('concepts', $this->concepts);
        yield '';
        yield $format_value('image-prompt', null);
        yield '';
        yield $format_value('image-credit', 'Image by USER_NAME on SERVICE');
        yield '';

        if (!$this->no_content) {
            yield $format_value('flavor-text', $this->flavor_text);
        }
        yield $format_value('background', $this->background);

        yield "'content' => <<<HTML";

        if (!$this->no_content) {
            yield '<image x="0" y="0" class="hero" href="@local(TODO.png)"  />';

            $height = \count($this->secondary_lines) * 40 + \count($this->primary_lines) * 55;

            yield "<x-card.cardrule height=\"{$height}\" >";

            foreach ($this->secondary_lines as $line) {
                yield "<x-card.smallrule>{$line}</x-card.smallrule>";
            }

            foreach ($this->primary_lines as $line) {
                yield "<x-card.normalrule>{$line}</x-card.normalrule>";
            }

            if ($height === 0) {
                yield '<x-card.normalrule>TODO</x-card.normalrule>';
            }

            yield '</x-card.cardrule>';
        }
        yield 'HTML';
        yield '];';
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
