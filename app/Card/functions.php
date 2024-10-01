<?php

namespace App\Card;

use App\CardNumber;
use App\Contracts\Card\CardComponents;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Storage;

function make($spec): CardComponents
{
    return match (true) {
        \is_array($spec) => new class($spec) implements \IteratorAggregate, CardComponents
        {
            protected readonly CardNumber $card_number_parsed;

            public function __construct(public readonly array $spec) {}

            /**
             * @group nonary
             */
            public function background(): ?string
            {
                return $this->spec['background'] ?? null;
            }

            /**
             * @group nonary
             */
            public function cardNumber(): string
            {
                return $this->spec['card_number'];
            }

            /**
             * @group nonary
             */
            public function concepts(): array
            {
                return $this->spec['concepts'] ?? [];
            }

            /**
             * @group nonary
             */
            public function flavorText(): \Traversable
            {
                return new \ArrayIterator(Arr::wrap($this->spec['flavor-text'] ?? []));
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
                return $this->spec['image-credit'] ?? null;
            }

            /**
             * @implements \App\Contracts\HasName
             */
            public function name(): string
            {
                return $this->spec['name'];
            }

            public function put(): void
            {
                $set = $this->set();
                $card_number = $this->cardNumber();
                $card_name = $this->name();

                Storage::disk('cards')->put("{$set}/{$card_number}.php", \implode("\n", \iterator_to_array($this)));
            }

            /**
             * @group nonary
             */
            public function set(): string
            {
                $this->card_number_parsed ??= CardNumber::make($this->cardNumber());
                return $this->card_number_parsed->set;
            }
        },

        \is_string($spec) => match (true) {
            \file_exists($spec) => \App\Card\make(require $spec),
            default => \App\Card\make(CardNumber::make($spec)),
            // throw new \InvalidArgumentException('Invalid spec source'),
        },

        $spec instanceof CardNumber => \App\Card\make(require $spec->getSpecFilePath()),

        $spec instanceof CardComponents => $spec,
    };
}
