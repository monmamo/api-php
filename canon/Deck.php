<?php

namespace Canon;

class Deck
{
    public readonly array $cards;

    public readonly array $distinctCards;

    public function __construct(public readonly string $id)
    {
        $data = \config('decks.' . $id);

        if ($data === null) {
            exit("Error loading configuration for deck {$id}.");
        }
        $cards = [];
        $distinctCards = [];

        foreach (\config('decks.' . $id . '.cards') as $card_number => $count) {
            $distinctCards[$card_number] = \App\Card\make($card_number);

            for ($i = 0; $i < $count; ++$i) {
                $cards[] = $card_number;
            }
        }
        $this->cards = $cards;
        $this->distinctCards = $distinctCards;
    }

    public static function __callStatic(string $name, array $arguments)
    {
        return new static($name);
    }

    /**
     * @group unary
     */
    public function __get(string $key)
    {
        return \config('decks.' . $this->id . '.' . $key);
    }

    /**
     * @group unary
     */
    public function chunk(int $size): \Generator
    {
        yield from \array_chunk($this->cards, $size);
    }

    /**
     * @group nonary
     */
    public function count(): int
    {
        return \count($this->cards);
    }

    public function countDistinct(): int
    {
        return \count($this->distinctCards);
    }
}
