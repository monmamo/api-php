<?php

namespace App\Console\Commands;

use App\Concept;
use Illuminate\Console\Command;
use Illuminate\Contracts\Console\PromptsForMissingInput;
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
            ->textarea('Definition', name: 'definition')
            ->textarea('Icon', name: 'icon')
            ->text('Icon Credit', name: 'icon_credit')
            ->text('Icon Credit URL', name: 'icon_credit_url');

        $data = $form->submit();

        $definition_html = '';

        foreach (\App\Strings\explode_string_lines($data['definition']) as $line) {
            $line = \preg_replace('/\[\[(.+?)\]\]/', '<a href="/concepts/$1">$1</a>', $line);
            $definition_html .= \App\Strings\html('p', $line)->toHtml();
        }

        $disk = Concept::disk();
        $disk->makeDirectory($slug);
        $put = function ($filename, $content) use ($disk, $slug): void {
            $disk->put(
                $slug . '/' . $filename,
                $content,
            );
            $this->info($slug . '/' . $filename);
        };

        $put('definition.html', $definition_html);

        if ($data['icon'] !== '') {
            $put('icon.blade.php', $data['icon']);
            $put('icon-credit.html', \App\Strings\html('a', ['href' => $data['icon_credit_url']], $data['icon_credit'])->toHtml());
        }
    }
}
