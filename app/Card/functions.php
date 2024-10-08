<?php

namespace App\Card;

use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\LocalHeroImage;
use App\CardNumber;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Storage;

/**
 * @group unary
 */
function localHeroUri(string $filename): string
{
    $path = \resource_path("images/{$filename}");
    \assert(\file_exists($path), "Image file not found: {$path}");
    return 'data:image/jpg;base64,' . \base64_encode(\file_get_contents($path));
};

/**
 * @implements \IteratorAggregate::getIterator
 * @group nonary
 */
function makeNewCard(
    string $card_name,
    array $concepts,
    array $flavor_text = [],
    bool $no_content = false,
    array $secondary_lines = [],
    array $primary_lines = [],
    ?string $background = null,
    ?string $image_credit = null,
): \Traversable {
    yield '<?php';
    yield 'return new';
    yield \App\Strings\phpAttribute(Title::class, $card_name);

    foreach ($concepts as $concept) {
        yield \App\Strings\phpAttribute(Concept::class, $concept);
    }
    yield \App\Strings\phpAttribute(ImageCredit::class, $image_credit ?? 'Image by USER_NAME on SERVICE');

    if (!$no_content) {
        yield \App\Strings\phpAttribute(FlavorText::class, $flavor_text);
        yield \App\Strings\phpAttribute(LocalHeroImage::class, 'TODO.png');
    }

    yield 'class implements \\App\\Contracts\\Card\\CardComponents {use \\App\\CardAttributes\\DefaultCardAttributes;';

    yield \sprintf('public function background(){return %s;}', $background);

    yield 'public function content():\\Traversable{yield <<<HTML';

    if (!$no_content) {
        $height = \count($secondary_lines) * 40 + \count($primary_lines) * 55;

        yield "<x-card.cardrule height=\"{$height}\" >";

        foreach ($secondary_lines as $line) {
            yield "<x-card.smallrule>{$line}</x-card.smallrule>";
        }

        foreach ($primary_lines as $line) {
            yield "<x-card.normalrule>{$line}</x-card.normalrule>";
        }

        if ($height === 0) {
            yield '<x-card.normalrule>TODO</x-card.normalrule>';
        }

        yield '</x-card.cardrule>';
    }
    yield 'HTML;';
    yield '}};';
}

/**
 * @group unary
 */
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
             * @implements \IteratorAggregate::getIterator
             * @group nonary
             */
            public function getIterator(): \Traversable
            {
                yield from \App\Card\makeNewCard(
                    card_name: $this->spec['card_name'],
                    concepts: $this->spec['concepts'] ?? [],
                    flavor_text: Arr::wrap($this->spec['flavor-text'] ?? []),
                    no_content: $this->spec['no_content'] ?? false,
                    secondary_lines: $this->spec['secondary_lines'] ?? [],
                    primary_lines: $this->spec['primary_lines'] ?? [],
                    background: $this->background(),
                );
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
