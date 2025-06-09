<?php

use App\CardAttributes\DefaultCardAttributes;
use App\Contracts\Card\CardComponents;
use App\Facades\Blade;

return new class(path: __FILE__, svg: \view('Attack.icon'), imageCredit: '') implements CardComponents
{
    use DefaultCardAttributes{
        __construct as construct;
    }

    /**
     * @group nonary
     */
    public function __construct(
        string $path,
        public $svg,
        public readonly string $imageCredit,
        public readonly string $viewBox = '0 0 512 512',
    ) {
        $this->construct($path);
    }

    /**
     * @group nonary
     */
    public function background(): \Traversable
    {
        $width = $height = 700;

        yield '<x-card.background fill="#FF8000" />';

        yield Blade::deferRender(
            '<x-svg id="background-icon" :$x :$y :$height :$width :$viewBox>' . $this->svg . '</x-svg>',
            [
                'x' => (\config('card-design.width') - $width) / 2,
                'y' => \config('card-design.viewbox.y'),
                'height' => $height,
                'width' => $width,
                'viewBox' => $this->viewBox,
            ],
        );
    }

    /**
     * @group nonary
     */
    public function concepts(...$names): array
    {
        return [];
    }

    /**
     * @group nonary
     */
    public function name(): string
    {
        return 'BATTLE';
    }
};
