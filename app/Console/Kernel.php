<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;

/**
 * The console kernel.
 *
 * @see https://laravel.com/docs/10.x/artisan
 *
 * @author Laravel
 */
final class Kernel extends \Illuminate\Foundation\Console\Kernel
{
    /**
     * Registers the commands for the application.
     *
     * @author Laravel
     * @group nonary
     *
     * @uses \Illuminate\Foundation\Console\Kernel::load
     */
    protected function commands(): void
    {
        $this->load(__DIR__ . '/Commands');
    }

    /**
     * Defines the application's command schedule.
     *
     * @see https://laravel.com/docs/10.x/scheduling
     *
     * @author Laravel
     * @group unary
     *
     * @uses \Illuminate\Console\Scheduling\Event::daily
     * @uses \Illuminate\Console\Scheduling\Schedule::command
     */
    protected function schedule(Schedule $schedule): void
    {
        $schedule->command('telescope:prune --hours=168')->daily();
    }
}
