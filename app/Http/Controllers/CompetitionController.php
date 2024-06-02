<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCompetitionRequest;
use App\Http\Requests\UpdateCompetitionRequest;
use App\Models\Competition;

class CompetitionController extends Controller
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
    public function destroy(Competition $competition): void
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Competition $competition): void
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
    public function show(Competition $competition): void
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCompetitionRequest $request): void
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCompetitionRequest $request, Competition $competition): void
    {
    }
}
