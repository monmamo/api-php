<?php

namespace App;

use App\CardAttributes\ImageCredit;
use App\Concerns\Properties\Name;

class CardSpec implements \IteratorAggregate, \App\Contracts\Card\CardComponents
{
/**
     * @implements \App\Contracts\HasName
     */
    public function name(): string
    {
        return $this->card_name;
    }

private string $_set;

    public function cardNumber(): string { return $this->card_number; }
    public function set(): string {
        $card_number_pieces = \explode('-', $this->card_number);
        return $this->_set ??= $card_number_pieces[0];
    }


    public function concepts(): array { return $this->concepts; }
    public function imagePrompt(): ?string { return $this->image_prompt; }
    public function imageCredit(): ?string { return $this->image_credit; }
    public function background(): ?string { return $this->background; }


    private object $card_type_facade;

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
        protected  ?string $background = null,
    ) {
$this->background ??= "view('{$this->concepts[0]}.background')";
    }

/**
 * @group nonary
 * @implements \IteratorAggregate::getIterator
 */
    public function getIterator(): \Traversable    {
        $format_value = fn($key, $value) => \sprintf("'%s' => %s,", $key, \json_encode($value));

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
        yield "'background' => $this->background,";

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

            if ($height === 0)
                yield "<x-card.normalrule>TODO</x-card.normalrule>";

            yield '</x-card.cardrule>';
        }
        yield 'HTML';
        yield '];';
    }


    public function put(): void
    {
        $set = $this->set();
        $card_number = $this->cardNumber();
        $card_name = $this->name();

        \Illuminate\Support\Facades\Storage::disk('cards')->put("{$set}/{$card_number}.php", \implode("\n", \iterator_to_array($this)));


    }

    /**
     * @group nonary
     */
    public function cardType(): object
    {
        return $this->card_type_facade ??= \value(function () {
            $reflection = new \ReflectionClass($this);
            $attributes = $reflection->getAttributes(CardType::class);
            $attribute = $attributes[0] ?? throw new \LogicException();
            return $attribute->newInstance();
        });
    }

    /**
     * @group nonary
     */
    public function flavorText(): \Traversable
    {
        return new \ArrayIterator($this->flavor_text);
    }


}
