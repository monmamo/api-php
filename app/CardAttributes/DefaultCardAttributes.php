<?php

namespace App\CardAttributes;

use App\CardNumber;
use App\Concept;
use App\GeneralAttributes\Title;

#[\Attribute(\Attribute::TARGET_CLASS)]
trait DefaultCardAttributes
{
    private array $_concepts;

    private $_flavor_text_attribute;

    private array $_flavor_text_lines;

    private array $_prerequisite_lines;

    private readonly \ReflectionClass $_reflection;

    /**
     * @group nonary
     */
    private function prerequisiteLines(): array
    {
        return $this->_prerequisite_lines ??= \value(function () {
            $prerequisites = [];
            $attributes = $this->getAttributes(Prerequisites::class);

            if (\count($attributes) > 0) {
                $prerequisites = $attributes[0]->getArguments();
            }

            foreach ($this->concepts() as $slug) {
                \array_push($prerequisites, ...Concept::make($slug)->standardRule());
            }

            return $prerequisites;
        });
    }

    protected function getAttributes(string $class): array
    {
        return $this->reflection()->getAttributes($class);
    }

    /**
     * @group nonary
     */
    protected function reflection(): \ReflectionClass
    {
        return $this->_reflection ?? new \ReflectionClass($this);
    }

    protected function withAttribute(string $class, $callback = null)
    {
        $attributes = $this->reflection()->getAttributes($class);

        if (\count($attributes) > 0) {
            $instance = $attributes[0]->newInstance();
            return \is_null($callback) ? $instance : $callback($instance);
        }
    }

    /**
     * @group nonary
     */
    public function background()
    {
        return $this->withAttribute(
            LocalBackgroundImage::class,
            fn ($attribute) => $attribute->render(),
        ) ?? $this->concepts()[0]->background();
    }

    /**
     * @group nonary
     */
    public function cardNumber(): string
    {
        $attributes = $this->reflection()->getAttributes(CardFilePath::class);
        return CardNumber::make($attributes[0]->getArguments()[0]);
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
    public function hero(): ?string
    {
        foreach ([SvgHeroImage::class, LocalHeroImage::class, ConceptIconHeroImage::class] as $class_fqn) {
            $attributes = $this->getAttributes($class_fqn);

            if (\count($attributes) > 0) {
                return $attributes[0]->newInstance()->render();
            }
        }

        return null;
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
    public function prerequisites(): \Traversable
    {
        yield from $this->prerequisiteLines();
    }

    /**
     * @group nonary
     */
    public function prerequisiteY(): int
    {
        $attributes = $this->getAttributes(PrerequisiteY::class);

        if (\count($attributes) > 0) {
            return $attributes[0]->getArguments()[0];
        }

        $flavor_text_attribute = $this->flavorTextAttribute();
        $flavor_text_line_count = $flavor_text_attribute instanceof FlavorText ? \count($flavor_text_attribute->lines()) : 1;

        return 475 + 25 * $flavor_text_line_count;
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
