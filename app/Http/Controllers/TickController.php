<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTickRequest;
use App\Http\Requests\UpdateTickRequest;
use App\Models\Tick;

class TickController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create(): void
    {
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tick $tick): void
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tick $tick): void
    {
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): void
    {
    }

    /**
     * Display the specified resource.
     */
    public function show(Tick $tick): void
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTickRequest $request): void
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTickRequest $request, Tick $tick): void
    {
    }
}
