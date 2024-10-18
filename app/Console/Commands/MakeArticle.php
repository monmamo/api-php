<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Contracts\Console\PromptsForMissingInput;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class MakeArticle extends Command implements PromptsForMissingInput
{
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'article:make {title-pieces*}';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $title = \implode(' ', $this->argument('title-pieces'));
        $slug = Str::slug($title);
        $path = "article/{$slug}.blade.php";

        Storage::disk('website')->put(
            $path,
            <<<HTML
@fragment('hero')
@endfragment

@fragment('hero-alt')
@endfragment

@fragment('title')
{$title}
@endfragment

@fragment('byline')
@endfragment

@fragment('summary')
@endfragment

@fragment('content')
@endfragment
HTML
        );

        $this->info($path);
    }
}
