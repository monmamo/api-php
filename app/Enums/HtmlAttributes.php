<?php

namespace App\Enums;

use Illuminate\View\ComponentAttributeBag;

/**
 * An enumeration for common HTML attributes.
 *
 * HTMX attributes: see https://htmx.org/reference/
 */
enum HtmlAttributes: string
{
    case AriaControls = 'aria-controls'; // https://developer.mozilla.org/en-US/docs/Web/Accessibility/ARIA/Attributes/aria-controls
    case AriaExpanded = 'aria-expanded'; // https://developer.mozilla.org/en-US/docs/Web/Accessibility/ARIA/Attributes/aria-expanded
    case AriaHidden = 'aria-hidden'; // https://developer.mozilla.org/en-US/docs/Web/Accessibility/ARIA/Attributes/aria-hidden
    case AriaLabel = 'aria-label'; // https://developer.mozilla.org/en-US/docs/Web/Accessibility/ARIA/Attributes/aria-label
    case AriaLabelledBy = 'aria-labelledby'; // https://developer.mozilla.org/en-US/docs/Web/Accessibility/ARIA/Attributes/aria-labelledby
    case BootstrapBackdrop = 'data-bs-backdrop';
    case BootstrapKeyboard = 'data-bs-keyboard';
    case BootstrapTarget = 'data-bs-target';
    case BootstrapToggle = 'data-bs-toggle';
    case DescribedElement = 'for'; // https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/for
    case HtmxGet = 'hx-get';
    case HtmxPost = 'hx-post';
    case HtmxSwap = 'hx-swap';
    case HtmxSwapOutOfBand = 'hx-swap-oob';
    case HtmxTarget = 'hx-target';
    case HtmxTrigger = 'hx-trigger';
    case ID = 'id';
    case ReferencedTarget = 'href'; // https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/href
    case Role = 'role'; // https://developer.mozilla.org/en-US/docs/Web/HTML/Global_attributes/role
    case TabIndex = 'tabindex';
    case Title = 'title';

    /**
     * @group unary
     *
     * @uses \Illuminate\View\ComponentAttributeBag::__construct
     */
    public function bag(mixed $value): ComponentAttributeBag
    {
        return new ComponentAttributeBag([
            $this->value => $value,
        ]);
    }

    /**
     * @group unary
     *
     * @uses \Illuminate\View\ComponentAttributeBag::__construct
     */
    public static function bagSet(array $attributes): ComponentAttributeBag
    {
        return new ComponentAttributeBag($attributes);
    }
}
