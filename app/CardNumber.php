<?php

namespace App;

use Illuminate\Support\Facades\Storage;
use League\Flysystem\StorageAttributes;

class CardNumber
{
    public const FILEPATH_PATTERN = '/\w+\/(\w+-[A-Z0-9-]+)\.php$/U';

    protected readonly string $format_string;

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
    public function __construct(
        public readonly string $set,
        protected readonly ?string $series,
        protected readonly int $ordinal,
    ) {
        $format_string = $set;

        if ($series) {
            $format_string .= "-{$series}";
        }
        $this->format_string = $format_string . \sprintf('-%%0%dd', \config('card-subsets.' . $format_string) ?? 2);
    }

    /**
     * @group nonary
     */
    public function __toString()
    {
        return \sprintf($this->format_string, $this->ordinal);
    }

    /**
     * @group unary
     */
    private static function getNextOrdinalInSeries(string $set, ?string $series): int
    {
        $existing_files = Storage::disk('cards')->listContents($set)
            ->filter(function (StorageAttributes $attributes) {
                return $attributes->isFile();
            })
            ->map(function (StorageAttributes $attributes) use ($set, $series): int {
                $subset = $series ? "{$set}-{$series}" : $set;

                if (\preg_match("/{$set}\\/{$subset}-(\\d+)\\.php/", $attributes->path(), $matches) === 1) {
                    return (int) $matches[1];
                }
                return 0;
            })
            ->toArray();

        $existing_files[] = 0; // ensure there is at least one element in the array

        return \max($existing_files) + 1;
    }

    /**
     * @group unary
     *
     * @uses \assert
     * @uses \file_exists
     * @uses \resource_path
     */
    public function getSpecFilePath(): ?string
    {
        $filepath = \resource_path("cards/{$this->set}/{$this}.php");
        \assert(!empty($filepath));
        return \file_exists($filepath) ? $filepath : null;
    }

    /**
     * Whole could be:
     * Set identifier (e.g. 'A')
     * Subset identifier (e.g. 'A-XX')
     * Card in the set but not a series (e.g. 'A-000')
     * Card in a subset (e.g. 'A-XX-000')
     *
     * @group unary
     *
     * @uses \App\CardNumber::__construct
     */
    public static function make(string $whole): self
    {
        if (\preg_match(self::FILEPATH_PATTERN, $whole, $matches) === 1) {
            return self::make($matches[1]);
        }

        $pieces = \explode('-', $whole);

        $set = $pieces[0];

        [$series,$ordinal] = match (\count($pieces)) {
            1 => [null, null],
            2 => \is_numeric($pieces[1]) ? [null, $pieces[1]] : [$pieces[1], null],
            3 => [$pieces[1], $pieces[2]]
        };

        $ordinal ??= self::getNextOrdinalInSeries($set, $series);

        return new self($set, $series, $ordinal);
    }

    /**
     * @group nonary
     *
     * @uses \App\CardNumber::__construct
     */
    public function makeNext(): self
    {
        return new self($this->set, $this->series, $this->ordinal + 1);
    }

    /**
     * @group nonary
     *
     * @uses \App\CardNumber::__construct
     */
    public function makePrevious(): self
    {
        return new self($this->set, $this->series, $this->ordinal - 1);
    }
}
