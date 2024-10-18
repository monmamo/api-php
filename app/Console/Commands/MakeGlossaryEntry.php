<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Contracts\Console\PromptsForMissingInput;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class MakeGlossaryEntry extends Command implements PromptsForMissingInput
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
    protected $signature = 'glossary:make {title-pieces*}';

    /**
     * Prompt for missing input arguments using the returned questions.
     *
     * @return array
     */
    protected function promptForMissingArgumentsUsing()
    {
        return [
            'card-number' => 'Card number of new card:',
        ];
    }

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $title = \implode(' ', $this->argument('title-pieces'));
        $slug = Str::slug($title);
        $path = "glossary/{$slug}.blade.php";

        Storage::disk('website')->put(
            $path,
            <<<HTML
<x-guest-layout>
<x-slot:page-title>{$title}</x-slot>
<h1>{$title}</h1>

</x-guest-layout>
HTML
        );

        $this->info($path);
    }
}
