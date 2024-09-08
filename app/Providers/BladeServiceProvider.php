<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class BladeServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        \Illuminate\Support\Facades\Blade::directive(
            'local',
            function (string $filename) {
                $path = resource_path("images/{$filename}");
                assert(\file_exists($path), "Image file not found: {$path}");
                return 'data:image/jpg;base64,' . \base64_encode(\file_get_contents($path));
            }
        );

        \Illuminate\Support\Facades\Blade::directive(
            'cardspec',
            function (string $pieces) {
                return config('card-design.' . $pieces);
            }
        );

        foreach (['viewbox', 'titlebox', 'bodybox', 'bodytext', 'hero'] as $component)
            \Illuminate\Support\Facades\Blade::directive(
                $component . 'spec',
                fn(string $pieces) =>  config("card-design.$component.$pieces")
            );

        \Illuminate\Support\Facades\Blade::directive(
            'dieroll',
            function (string $pieces): string {
                return join(
                    array_map(
                        fn(string $die) => match ($die) {
                            '1' => "&#x2680;",
                            '2' => "&#x2681;",
                            '3' => "&#x2682;",
                            '4' => "&#x2683;",
                            '5' => "&#x2684;",
                            '6' => "&#x2685;",
                        },
                        explode(',', $pieces)
                    )
                );
            }
        );

        \Illuminate\Support\Facades\Blade::directive(
            'ai',
            fn() => 'Generated image'
        );

        \Illuminate\Support\Facades\Blade::stringable(
            function (\App\Enums\Color $color) {
                return $color->value;
            }
        );
    }

    /**
     * Register any application services.
     */
    public function register(): void
    {
    }
}
