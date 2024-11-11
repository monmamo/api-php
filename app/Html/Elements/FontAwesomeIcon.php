<?php

namespace App\Html\Elements;

use Illuminate\View\ComponentAttributeBag;
use Spatie\Html\Elements\I;

/**
 * https://fontawesome.com/docs
 * https://fontawesome.com/docs/web/style/styling.
 */
final class FontAwesomeIcon extends I
{
    /**
     * @group fluent
     * @group unary
     *
     * @uses \App\Html\Elements\FontAwesomeIcon::fixedWidth
     * @uses \Spatie\Html\Elements\I::class
     *
     * @return static
     */
    public function applyAttributes(ComponentAttributeBag $attributes): self
    {
        return $this->margin($attributes)
            ->padding($attributes)
            ->fixedWidthIf($attributes['isFixedWidth'] ?? false)
            ->classIf($attributes['isNavIcon'] ?? false, 'nav-icon');
    }

    /**
     * @group unary
     *
     * @uses \Spatie\Html\Attributes::addClass
     * @uses \Spatie\Html\Elements\I::__construct
     *
     * @return static
     */
    public static function brand(mixed $icon_slug)
    {
        $object = new self();
        $object->attributes->addClass('fab');
        $object->attributes->addClass('fa-' . $icon_slug);
        return $object;
    }

    /**
     * @group nonary
     *
     * @uses \Spatie\Html\Attributes::addClass
     *
     * @return static
     */
    public function fixedWidth()
    {
        $element = clone $this;

        $element->attributes->addClass('fa-fw');

        return $element;
    }

    /**
     * @group unary
     *
     * @uses \Spatie\Html\Attributes::addClass
     * @uses \Spatie\Html\Elements\I::__construct
     *
     * @return static
     */
    public static function regular(mixed $icon_slug)
    {
        $object = new self();
        $object->attributes->addClass('far');
        $object->attributes->addClass('fa-' . $icon_slug);
        return $object;
    }

    /**
     * @group fluent
     * @group unary
     *
     * @uses \is_null (native) Returns whether a variable is null.
     * @uses \Spatie\Html\Elements\BaseElement::data
     * @uses \Spatie\Html\Elements\BaseElement::title
     *
     * @return static
     */
    public function setTitle(mixed $title = null): self
    {
        if (\is_null($title)) {
            return $this;
        }
        return $this
            ->title($title)
            ->data('toggle', 'tooltip')
            ->data('placement', 'top');
    }

    /**
     * @group unary
     *
     * @uses \Spatie\Html\Attributes::addClass
     * @uses \Spatie\Html\Elements\I::__construct
     *
     * @return static
     */
    public static function solid(mixed $icon_slug)
    {
        $object = new self();
        $object->attributes->addClass('fas');
        $object->attributes->addClass('fa-' . $icon_slug);
        return $object;
    }

    /**
     * @group nonary
     *
     * @uses \Spatie\Html\Attributes::addClass
     *
     * @return static
     */
    public function textInverse()
    {
        $element = clone $this;

        $element->attributes->addClass('text-inverse');

        return $element;
    }
}
