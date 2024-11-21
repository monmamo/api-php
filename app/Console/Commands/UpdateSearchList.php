<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class UpdateSearchList extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'search:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $list = [];

        foreach (\Canon\taxons() as $taxon_slug)
            $list[strtolower($taxon_slug)] = '/taxons/' . $taxon_slug;

        foreach (\Canon\concepts() as $concept_slug)
            $list[strtolower($concept_slug)] = '/concepts/' . $concept_slug;

        foreach (\App\Enums\CardSet::cases() as $set) {
            $list[strtolower($set->name)] = '/cards/set/' . $set->value;

            try {
                foreach (\App\Enums\CardSet::from($set->value)->cards() as $card_spec) {
                    $card_number = $card_spec->cardNumber();
                    $list[strtolower($card_number)] = '/cards/card/' . $card_number;
                    $list[strtolower($card_spec->name())] = '/cards/card/' . $card_number;
                }
            } catch (\Throwable $e) {
            }
        }

        $path = resource_path('search.json');
        \file_put_contents($path, \json_encode($list));
        $this->info($path);
        $this->info(count($list) . ' entries');
    }
}
