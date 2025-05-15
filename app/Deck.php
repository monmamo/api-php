<?php

namespace App;

class Deck
{
    private function __construct(
        private readonly \Traversable $individual_cards,
        private readonly \Traversable $distinct_cards,
    ) {}

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
        $individual_cards = new \MultipleIterator();

        foreach ($cards as $card => $count) {
            $individual_cards->attachIterator(new SingleItemIterator($card, $count));
        }
        return new self(
            individual_cards: $individual_cards,
            distinct_cards: new \ArrayIterator(\array_keys($cards)),
        );
    }

    /**
     * @group unary
     */
    public static function fromConfig(string $slug): self
    {
        $cards = \config($slug);
        return match (true) {
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
