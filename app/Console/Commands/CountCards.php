<?php

namespace App\Console\Commands;

use App\Concept;
use Illuminate\Console\Command;
use Illuminate\Contracts\Console\PromptsForMissingInput;
use Illuminate\Support\Facades\Storage;
use League\Flysystem\StorageAttributes;

class CountCards extends Command implements PromptsForMissingInput
{
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Returns a count of all defined cards.';

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'card:count';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $filesystem = Storage::disk('cards');

        $total_count = 0;
        foreach (
            $filesystem->listContents('')
                ->filter(function (StorageAttributes $attributes) {
                    return $attributes->isDir();
                })
                ->sortByPath()
                ->map(function (StorageAttributes $attributes) {
                    return $attributes->path();
                }) as $set
        ) {
            $existing_files = $filesystem->listContents($set)
                ->filter(function (StorageAttributes $attributes) {
                    return $attributes->isFile() && \preg_match("/\\.php$/", $attributes->path(), $matches) === 1;
                })
                ->toArray();

            $this->info(sprintf("%5u %s", count($existing_files), $set));
            $total_count += count($existing_files);
        }
        $this->info(sprintf("%5u TOTAL", $total_count));
    }
}
