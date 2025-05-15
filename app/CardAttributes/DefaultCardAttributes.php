<?php

namespace App\CardAttributes;

use App\Concept;
use App\GeneralAttributes\Title;

#[\Attribute(\Attribute::TARGET_CLASS)]
trait DefaultCardAttributes
{
    private array $_concepts;

    private $_flavor_text_attribute;

    private array $_flavor_text_lines;

    private $_prerequisites_attribute;

    private readonly \ReflectionClass $_reflection;

    /**
     * @group unary
     */
    public function __construct($path)
    {
        $this->card_number = \basename($path, '.php');
    }

    /**
     * @group nonary
     */
    private function _concepts(): array
    {
        return $this->_concepts ??= \array_map(
            fn ($attribute) => $attribute->newInstance(),
            \App\Reflection\getAttributes($this, Concept::class),
        );
        // \array_walk($concepts, function ($concept): void {
        //     \assert($concept instanceof Concept);
        // });
    }

    /**
     * @group nonary
     */
    protected function reflection(): \ReflectionClass
    {
        return $this->_reflection ?? new \ReflectionClass($this);
    }

    /**
     * @group nonary
     */
    public function background(): \Traversable
    {
        $concepts = $this->concepts();

        yield \App\Reflection\withAttribute(
            $this,
            LocalBackgroundImage::class,
        ) ?? match (true) {
            (\count($concepts) === 0) => '<' . 'x-card.background' . ' />',
            $concepts[0]->hasBackground() => $concepts[0]->background(),
            default => '<' . 'x-card.background' . ' />'
        };
    }

    /**
     * @group nonary
     */
    public function cardNameColor(): string
    {
        $attributes = $this->reflection()->getAttributes(CardNameColor::class);

        if (\count($attributes) > 0) {
            return $attributes[0]->getArguments()[0];
        }

        return 'white';
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
    public function concepts(...$names): array
    {
        if (\count($names) === 0) {
            return $this->_concepts();
        }

        return \array_filter($this->_concepts(), function ($concept) use ($names) {
            return \in_array($concept->name(), $names, true);
        });
    }

    /**
     * @group nonary
     */
    public function content(): \Traversable
    {
        return new \EmptyIterator();
    }

    /**
     * @group nonary
     */
    public function creditColor(): string
    {
        $attributes = $this->reflection()->getAttributes(CreditColor::class);

        if (\count($attributes) > 0) {
            return $attributes[0]->getArguments()[0];
        }

        return 'white';
    }

    /**
     * @group nonary
     */
    public function flavorTextAttribute(): ?FlavorText
    {
        return $this->_flavor_text_attribute ??= $this->withAttribute(FlavorText::class);
    }

    /**
     * @group nonary
     */
    public function hasConcept(string $name): bool
    {
        foreach ($this->_concepts() as $concept) {
            if ($concept->name() === $name) {
                return true;
            }
        }
        return false;
    }

    /**
     * @implements \App\Contracts\HasName
     */
    public function imageCredit(): ?string
    {
        if (isset($this->imageCredit)) {
            return $this->imageCredit;
        }

        $attributes = $this->reflection()->getAttributes(IsGeneratedImage::class);

        if (\count($attributes) > 0) {
            return 'Generated image';
        }

        $attributes = $this->reflection()->getAttributes(ImageCredit::class);
        return \count($attributes) > 0 ? $attributes[0]->getArguments()[0] : null;
    }

    /**
     * @implements \App\Contracts\HasName
     */
    public function name(): string
    {
        $attributes = $this->reflection()->getAttributes(Title::class);

        if (\count($attributes) > 0) {
            return $attributes[0]->getArguments()[0];
        }

        throw new \LogicException('No title attribute found');
    }

    /**
     * @group nonary
     */
    public function prerequisitesAttribute(): ?Prerequisites
    {
        return null;
        // return $this->_prerequisites_attribute ??= \value(function () {
        //     $prerequisites = [];
        //     $y = 475 + 25 * (\transform($this->flavorTextAttribute(), fn ($attribute): int => \count($attribute->lines())) ?? 1);
        //     $color = '#000000';
        //     $attributes = $this->reflection()->getAttributes(Prerequisites::class);

        //     if (\count($attributes) > 0) {
        //         $object = $attributes[0]->newInstance();
        //         $prerequisites = $object->lines();
        //         $y = $object->y;
        //         $color = $object->color;
        //     }

        //     foreach ($this->concepts() as $slug) {
        //         \array_push($prerequisites, ...Concept::make($slug)->standardRule());
        //     }

        //     return new Prerequisites(lines: $prerequisites, y: $y, color: $color);
        // });
    }

    /**
     * @implements \App\Contracts\HasName
     */
    public function set(): string
    {
        $attributes = $this->reflection()->getAttributes(CardSet::class);
        return \count($attributes) > 0 ? $attributes[0]->getArguments()[0] : 'Unknown';
    }

    /**
     * @group nonary
     */
    public function system(): string
    {
        return 'ALL GAMES';
    }

    /**
     * @group nonary
     */
    public function webpageContent(): \Traversable
    {
        return new \EmptyIterator();
    }
}
