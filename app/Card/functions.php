<?php

namespace App\Card;

use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\Prerequisites;
use App\CardNumber;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Storage;

/**
 * @group binary
 */
function dimension($source, bool $in_inches = false): float
{
    $base_value = match (true) {
        \is_string($source) => \config('card-design.' . $source) ,
        \is_numeric($source) => $source,
        default => \dd($source)
    };

    return $in_inches ? $base_value / \config('card-design.dots_per_inch') : $base_value;
}

/**
 * @group unary
 */
function cardNumber($source): string
{
    return match (true) {
        \is_string($source) => $source,
        $source instanceof CardNumber => $source->cardNumber(),
        default => \dd($source)
    };
}

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
    array $prerequisites = [],
    array $secondary_lines = [],
    array $primary_lines = [],
    ?string $icon = null,
    ?string $background = null,
    ?string $image_credit = null,
): \Traversable {
    yield '<?php';
    yield 'return new';
    yield \App\Strings\phpAttribute(Title::class, $card_name);

    foreach ($concepts as $offset => $value) {
        if (\is_int($offset)) {
            yield \App\Strings\phpAttribute(Concept::class, $value);
        } else {
            yield \App\Strings\phpAttribute(Concept::class, $offset, $value);
        }
    }
    yield \App\Strings\phpAttribute(ImageCredit::class, $image_credit ?? 'Image by USER_NAME on SERVICE');

    if (!$no_content) {
        yield \App\Strings\phpAttribute(FlavorText::class, $flavor_text);
    }

    yield \App\Strings\phpAttribute(Prerequisites::class, $prerequisites);

    yield 'class(__FILE__) implements \\App\\Contracts\\Card\\CardComponents {use \\App\\CardAttributes\\DefaultCardAttributes;';

    if (\is_string($background)) {
        yield \sprintf('public function background(){return %s;}', $background);
    }

    yield 'public function content():\\Traversable{yield <<<HTML';

    if (\is_string($icon)) {
        yield $icon;
    }

    if (!$no_content) {
        $height = \count($secondary_lines) * 40 + \count($primary_lines) * 55;

        yield "<x-card.cardrule height=\"{$height}\" >";

        foreach ($secondary_lines as $line) {
            yield "<x-card.ruleline class=\"smallrule\">{$line}</x-card.ruleline>";
        }

        foreach ($primary_lines as $line) {
            yield "<x-card.ruleline>{$line}</x-card.ruleline>";
        }

        if ($height === 0) {
            yield '<x-card.ruleline>TODO</x-card.ruleline>';
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
    try {
        return match (true) {
            \is_array($spec) => new class($spec) implements \IteratorAggregate, CardComponents
            {
                protected readonly CardNumber $card_number_parsed;

                /**
                 * Constructor.
                 *
                 * @group magic
                 * @group mutator
                 * @group nonary|unary|variadic
                 *
                 * @uses parent::__construct
                 *
                 * @return void
                 */
                public function __construct(public readonly array $spec) {}

                /**
                 * @group nonary
                 */
                public function background(): \Traversable
                {
                    if (isset($this->spec['background'])) {
                        yield $this->spec['background'];
                    }
                }

                /**
                 * @group nonary
                 */
                public function cardNameColor(): string
                {
                    return 'white';
                }

                /**
                 * @group nonary
                 */
                public function cardNumber(): string
                {
                    return $this->spec['card_number'] ?? \dd($this->spec);
                }

                /**
                 * @group nonary
                 */
                public function concepts(...$names): array
                {
                    return $this->spec['concepts'];
                }

                /**
                 * @group nonary
                 */
                public function content(): \Traversable
                {
                    yield from $this->spec['content'];
                }

                /**
                 * @group nonary
                 */
                public function creditColor(): string
                {
                    return 'white';
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
                public function hasConcept(string $name): bool
                {
                    return false;
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
                    // $card_name = $this->name();

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

            default => \dd($spec)
        };
    } catch (\Throwable $e) {
        \dd($spec, $spec->getSpecFilePath(), $e);
    }
}

function includeFontFace($font_slug)
{
    $font = \config("fonts.{$font_slug}");
    $font_name = $font['family'];
    $font_format = $font['format'];
    $font_unicode_range = $font['unicode-range'];
    $font_weight = $font['weight'];
    $font_style = $font['style'];
    $base64String = $font['code'] ?? \value(function () use ($font) {
        $fileContent = \file_get_contents($font['url']);

        if ($fileContent === false) {
            throw new \Exception('Failed to download the file.');
        }
        return \base64_encode($fileContent);
    });

    return "@font-face {
  font-family: '{$font_name}';
  font-style: {$font_style};
  font-weight: {$font_weight};
  src: url('data:application/font-woff;charset=utf-8;base64,{$base64String}') format('{$font_format}');
  unicode-range: {$font_unicode_range};
}";
}
