<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class BladeServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        foreach ($this->_directives() as $slug => $function)
            \Illuminate\Support\Facades\Blade::directive($slug, $function);

        foreach ($this->_stringables() as $function)
            \Illuminate\Support\Facades\Blade::stringable($function);
    }

    private function _directives(): \Traversable
    {

        yield         'local' =>         function (string $filename) {
            $path = resource_path("images/{$filename}");
            assert(\file_exists($path), "Image file not found: {$path}");
            return 'data:image/jpg;base64,' . \base64_encode(\file_get_contents($path));
        };

        yield        'cardspec' => fn(string $pieces) => config('card-design.' . $pieces);

        foreach (['viewbox', 'titlebox', 'bodybox', 'bodytext', 'hero'] as $component)
            yield             $component . 'spec' => fn(string $pieces) =>  config("card-design.$component.$pieces");

        yield        'dieroll' =>         function (string $pieces): string {
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
        };

        $tspan = function ($dy, $class) {
            return fn($line): string => \Illuminate\Support\Facades\Blade::render(
                '<tspan x="50%" dy="{{$dy}}" class="{{$class}}">{{$line}}</tspan>',
                ['dy' => $dy, 'class' => $class, 'line' => $line] // 💢
            );
        };

        yield 'smallrule' => $tspan(dy: '25', class: 'smallrule');

        yield 'normalrule' => $tspan(dy: '35', class: 'bodyrule');


        yield    'ai' =>        fn() => 'Generated image';
    }

    private function _stringables(): \Traversable
    {
        yield    fn(\App\Enums\Color $color) => $color->value;
    }



    /**
     * Register any application services.
     */
    public function register(): void {}
}
