<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLadderRequest;
use App\Http\Requests\UpdateLadderRequest;
use App\Models\Ladder;

class LadderController extends Controller
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
    public function destroy(Ladder $ladder): void
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ladder $ladder): void
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
    public function show(Ladder $ladder): void
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLadderRequest $request): void
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLadderRequest $request, Ladder $ladder): void
    {
    }
}
