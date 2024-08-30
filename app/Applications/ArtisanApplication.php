<?php

namespace App\Applications;

use App\Enums\Hosts;
use App\Facades\Host;
use Illuminate\Contracts\Console\Kernel;

/**
 * DO NOT IMPLEMENT THESE METHODS HERE:
 * \Illuminate\Contracts\Foundation\Application::runningUnitTests.
 *
 *
 */
class ArtisanApplication extends BaseApplication
{
    /**
     * Constructor.
     *
     * DO NOT    $app->bootstrapKernel() here.
     *
     *
     * @group mutator
     * @group nonary
     *
     * @uses \App\Facades\Host::bind
     * @uses \Illuminate\Foundation\Application::__construct
     * @uses \Illuminate\Support\Facades\Facade::setFacadeApplication
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();

        Host::setFacadeApplication($this);
        Host::bind(Hosts::CLI);
    }

    /**
     *
     * @group nonary
     */
    public function bootRouting(): void {}

    /**
     * Returns the kernel that needs tbo be bootstrapped for the application.
     *
     *
     * @implements \App\Applications\BaseApplication
     * @group nonary
     *
     * @uses \Illuminate\Foundation\Application::make
     */
    public function getKernel(): object
    {
        return $this->make(Kernel::class);
    }

    /**
     * Returns whether the application is running in the console.
     *
     *
     * @implements \Illuminate\Contracts\Foundation\Application::runningInConsole
     * @group nonary
     *
     * @return bool
     */
    public function runningInConsole()
    {
        return true;
    }
}
