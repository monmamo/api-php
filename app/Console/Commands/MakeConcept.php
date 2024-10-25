<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Contracts\Console\PromptsForMissingInput;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class MakeConcept extends Command implements PromptsForMissingInput
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
    protected $signature = 'concept:make {title-pieces*}';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $title = \implode(' ', $this->argument('title-pieces'));
        $slug = Str::studly($title);

        $form = \Laravel\Prompts\form()
            ->textarea('Definition', name: 'definition');

        $data = $form->submit();

        $definition_html = '';

        foreach (\App\Strings\explode_string_lines($data['definition']) as $line) {
            $line = preg_replace('/\[\[(.+?)\]\]/', '<a href="/concepts/$1">$1</a>', $line);
            $definition_html .= \App\Strings\html('p', $line)->toHtml();
        }

        $disk = Storage::disk('concepts');
        $disk->makeDirectory($slug);
        $disk->put(
            $slug . '/definition.html',
            $definition_html,
        );

        $this->info($slug . '/definition.html');
    }
}
