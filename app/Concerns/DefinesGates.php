<?php

namespace App\Concerns;

use App\Facades\Gate;
use Illuminate\Auth\Access\Response;

trait DefinesGates
{
    /**
     * Returns whether the given ability should be granted for the current user.
     *
     * @group variadic
     * @group sugar
     *
     * @uses \Illuminate\Support\Facades\Gate::allows
     */
    public function allowed(...$arguments): bool
    {
        return Gate::allows($this->name, $arguments);
    }

    /**
     * Returns whether the given ability should be granted for the current user.
     *
     * @group variadic
     * @group sugar
     *
     * @uses \Illuminate\Support\Facades\Gate::authorize
     *
     * @return \Illuminate\Auth\Access\Response
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function authorize(...$arguments): void
    {
        Gate::authorize($this->name, $arguments);
    }

    /**
     * @group unary
     * @group functional
     *
     * @param callable $callable (Person)=>bool
     *
     * @uses \Illuminate\Support\Facades\Gate::define
     */
    public function defineGate(callable $callable): void
    {
        Gate::define($this->name, $callable);
    }

    /**
     * Returns whether the given ability should be denied for the current user.
     *
     * @group variadic
     * @group sugar
     *
     * @uses \Illuminate\Support\Facades\Gate::denies
     */
    public function denied(...$arguments): bool
    {
        return Gate::denies($this->name, $arguments);
    }

    /**
     * @group variadic
     *
     * @uses \App\Concerns\DefinesGates::allowed
     * @uses \App\Callables\run
     *
     * @throws \Throwable Any exception thrown out of \App\Callables\run.
     */
    public function ifAllowed(array $callables, array $gate_arguments = [], array $function_arguments = []): void
    {
        if ($this->allowed(...$gate_arguments)) {
            \App\Callables\run(
                callable: $callables,
                arguments_to_callable: $function_arguments,
            );
        }
    }

    /**
     * @group variadic
     *
     * @uses \App\Concerns\DefinesGates::denied
     * @uses \App\Callables\run
     *
     * @throws \Throwable Any exception thrown out of \App\Callables\run.
     */
    public function ifDenied(array $callables, array $gate_arguments = [], array $function_arguments = []): void
    {
        if ($this->denied(...$gate_arguments)) {
            \App\Callables\run(
                callable: $callables,
                arguments_to_callable: $function_arguments,
            );
        }
    }

    /**
     * @group variadic
     *
     * @uses \App\Concerns\DefinesGates::allowed
     * @uses \App\Callables\run
     *
     * @throws \Throwable Any exception thrown out of \App\Callables\run.
     */
    public function ifNotAllowed(array $callables, array $gate_arguments = [], array $function_arguments = []): void
    {
        if (!$this->allowed(...$gate_arguments)) {
            \App\Callables\run(
                callable: $callables,
                arguments_to_callable: $function_arguments,
            );
        }
    }

    /**
     * Inspect the user for the given ability.
     *
     * @group variadic
     * @group sugar
     *
     * @uses \Illuminate\Support\Facades\Gate::inspect
     */
    public function inspect(...$arguments): Response
    {
        return Gate::inspect($this->name, $arguments);
    }
}
