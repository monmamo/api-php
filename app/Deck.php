<?php

namespace App;

class Deck implements \Countable
{
    // private readonly array $individual_cards_cache;
    // private readonly array $distinct_cards_cache;

    private function __construct(
        private readonly \Traversable $individual_cards,
        private readonly \Traversable $distinct_cards,
    ) {}

    /**
     * @group nonary
     */
    public function count(): int
    {
        return \iterator_count(clone $this->individual_cards);
    }

    /**
     * @group nonary
     */
    public function countDistinct(): int
    {
        return \iterator_count(clone $this->distinct_cards);
    }

    /**
     * @group nonary
     */
    public function distinctCards(): \Traversable
    {
        return $this->distinct_cards;
    }

    /**
     * @group unary
     */
    public static function fromAnything(mixed $source): self
    {
        return match (true) {
            \is_string($source) => self::fromConfig($source),
            \is_array($source) => \array_is_list($source) ? self::fromList($source) : self::fromCardCounts($source),
            default => \dd($source)
        };
    }

    /**
     * @group unary
     */
    public static function fromCardCounts(array $cards): self
    {
        $individual_cards = [];
        $distinct_cards = [];

        foreach ($cards as $card => $count) {
            $distinct_cards[] = $card;

            for ($i = 0; $i < $count; ++$i) {
                $individual_cards[] = $card;
            }
        }
        return new self(
            individual_cards: new \ArrayIterator($individual_cards),
            distinct_cards: new \ArrayIterator($distinct_cards),
        );
    }

    /**
     * @group unary
     */
    public static function fromConfig(string $slug): self
    {
        $cards = \config($slug);
        return match (true) {
            \is_null($cards) => \dd($slug),
            \array_is_list($cards) => self::fromList($cards),
            default => self::fromCardCounts($cards),
        };
    }

    /**
     * @group unary
     */
    public static function fromList(array $cards): self
    {
        return new self(
            individual_cards: new \ArrayIterator($cards),
            distinct_cards: new \ArrayIterator(\array_unique($cards)),
        );
    }

    public function individualCards(): \Traversable
    {
        return $this->individual_cards;
    }
}
