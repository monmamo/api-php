<?php

namespace App\View\Components;

use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\View\ComponentAttributeBag;

class Html extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public ...$pieces,
    ) {}

    /**
     * Returns the view / contents that represent the component.
     */
    public function render(): View|\Closure|string
    {
        if (\count($this->pieces) === 0) {
            return '';
        }

        if (\count($this->pieces) === 1 && $this->pieces[0] instanceof Htmlable) {
            return (string) $this->pieces[0];
        }

        if (\count($this->pieces) === 1 && $this->pieces[0] instanceof Renderable) {
            return $this->pieces[0]->render();
        }

        $content = [];
        $attributes = [];

        foreach ($this->pieces as $index => $piece) {
            if ($index === 0) {
                \assert(\is_string($piece));
                continue;
            }

            if (\is_null($piece)) {
                continue;
            }

            if (\is_array($piece)) {
                $attributes = \array_merge($attributes, $piece);
                continue;
            }
            $content[] = $piece;
        }

        if (\count($content) === 0) {
            return \sprintf('<%s %s />', $this->pieces[0], new ComponentAttributeBag($attributes));
        }

        return \sprintf(
            '<%s %s>%s</%s>',
            $this->pieces[0],
            new ComponentAttributeBag($attributes),
            \App\Strings\render(...$content),
            $this->pieces[0],
        );
    }
}
