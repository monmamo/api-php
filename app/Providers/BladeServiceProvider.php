<?php

namespace App\Providers;

use App\Enums\Color;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class BladeServiceProvider extends ServiceProvider
{
    private function _directives(): \Traversable
    {
        yield 'local' => function (string $filename) {
            $path = \resource_path("images/{$filename}");
            \assert(\file_exists($path), "Image file not found: {$path}");
            return 'data:image/jpg;base64,' . \base64_encode(\file_get_contents($path));
        };

        yield 'cardspec' => fn (string $pieces) => \config('card-design.' . $pieces);

        foreach (['trimbox', 'viewbox', 'titlebox',  'hero'] as $component) {
            yield $component . 'spec' => fn (string $pieces) => \config("card-design.{$component}.{$pieces}");
        }

        yield 'dieroll' => function (string $pieces): string {
            return \implode(
                \array_map(
                    fn (string $die) => match ($die) {
                        '1' => '&#x2680;',
                        '2' => '&#x2681;',
                        '3' => '&#x2682;',
                        '4' => '&#x2683;',
                        '5' => '&#x2684;',
                        '6' => '&#x2685;',
                    },
                    \explode(',', $pieces),
                ),
            );
        };

        yield 'ai' => fn () => 'Generated image';
    }

    private function _stringables(): \Traversable
    {
        yield fn (Color $color) => $color->value;
    }

    public function boot(): void
    {
        foreach ($this->_directives() as $slug => $function) {
            Blade::directive($slug, $function);
        }

        foreach ($this->_stringables() as $function) {
            Blade::stringable($function);
        }
    }

    /**
     * Register any application services.
     */
    public function register(): void {}

    public static function transformCenteredIcon(int $original_size, int $new_size, float $width): array
    {
        return [
            'size' => $original_size,
            'scale' => $new_size / $original_size,
            'translate' => ($width - $new_size) / 2,
        ];
    }
}
