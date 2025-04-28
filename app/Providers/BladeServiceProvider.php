<?php

namespace App\Providers;

use App\Enums\Color;
use App\Enums\Environments;
use App\Facades\Environment;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class BladeServiceProvider extends ServiceProvider
{
    /**
     * @group nonary
     */
    private function _directives(): \Traversable
    {
        yield 'local' => \App\Card\localHeroUri(...);

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

        yield 'damage' => fn () => '&#x2764;';

        yield 'ai' => fn () => 'Generated image';

        yield 'publicimage' => match (Environment::getFacadeRoot()) {
            Environments::Development => fn (string $filename) => "/images/{$filename}",
            Environments::Production => fn (string $filename) => "/public/images/{$filename}",
            default => fn (string $filename) => "/images/{$filename}",
        };
    }

    private function _stringables(): \Traversable
    {
        yield fn (Color $color) => $color->value;
    }

    /**
     * @group nonary
     */
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
     *
     * @group nonary
     */
    public function register(): void {}

    /**
     * @group nonary
     */
    public static function transformCenteredIcon(int $original_size, int $new_size, float $width): array
    {
        return [
            'size' => $original_size,
            'scale' => $new_size / $original_size,
            'translate' => ($width - $new_size) / 2,
        ];
    }
}
