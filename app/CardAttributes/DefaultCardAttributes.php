<?php

namespace App\CardAttributes;

use App\Concept;
use App\Concerns\Reflection;
use App\GeneralAttributes\Title;
use Illuminate\Contracts\Support\Renderable;

#[\Attribute(\Attribute::TARGET_CLASS)]
trait DefaultCardAttributes
{
    use Reflection;

    private array $_concepts;

    private $_flavor_text_attribute;

    private array $_flavor_text_lines;

    private $_prerequisites_attribute;

    private readonly string $card_number;

    public function __construct($path)
    {
        $this->card_number = \basename($path, '.php');
    }

    /**
     * @group nonary
     */
    public function background(): \Traversable
    {
        $concepts = $this->concepts();

        yield $this->withAttribute(
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
    public function cardNumber(): string
    {
        return $this->card_number;
    }

    /**
     * @group nonary
     */
    public function concepts(): array
    {
        return $this->_concepts ??= \array_map(
            fn ($attribute) => $attribute->newInstance(),
            $this->getAttributes(Concept::class),
        );
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
        $attributes = $this->getAttributes(CreditColor::class);

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
    public function hero(): Renderable
    {
        foreach ([SvgHeroImage::class, LocalHeroImage::class, ConceptIconHeroImage::class] as $class_fqn) {
            $attributes = $this->getAttributes($class_fqn);

            if (\count($attributes) > 0) {
                try {
                    return $attributes[0]->newInstance();
                } catch (\Throwable $e) {
                    \dd($e);
                }
            }
        }

        return new class() implements Renderable
        {
            public function render()
            {
                return '';
            }
        };
    }

    /**
     * @implements \App\Contracts\HasName
     */
    public function imageCredit(): ?string
    {
        if (isset($this->imageCredit)) {
            return $this->imageCredit;
        }

        $attributes = $this->getAttributes(IsGeneratedImage::class);

        if (\count($attributes) > 0) {
            return 'Generated image';
        }

        $attributes = $this->getAttributes(ImageCredit::class);
        return \count($attributes) > 0 ? $attributes[0]->getArguments()[0] : null;
    }

    /**
     * @implements \App\Contracts\HasName
     */
    public function name(): string
    {
        $attributes = $this->getAttributes(Title::class);

        if (\count($attributes) > 0) {
            return $attributes[0]->getArguments()[0];
        }
    }

    /**
     * @group nonary
     */
    public function prerequisitesAttribute(): ?Prerequisites
    {
        return $this->_prerequisites_attribute ??= \value(function () {
            $prerequisites = [];
            $y = 475 + 25 * (\transform($this->flavorTextAttribute(), fn ($attribute): int => \count($attribute->lines())) ?? 1);
            $color = '#000000';
            $attributes = $this->getAttributes(Prerequisites::class);

            if (\count($attributes) > 0) {
                $object = $attributes[0]->newInstance();
                $prerequisites = $object->lines();
                $y = $object->y;
                $color = $object->color;
            }

            foreach ($this->concepts() as $slug) {
                \array_push($prerequisites, ...Concept::make($slug)->standardRule());
            }

            return new Prerequisites(lines: $prerequisites, y: $y, color: $color);
        });
    }

    /**
     * @implements \App\Contracts\HasName
     */
    public function set(): string
    {
        $attributes = $this->getAttributes(CardSet::class);
        return \count($attributes) > 0 ? $attributes[0]->getArguments()[0] : 'Unknown';
    }
}
