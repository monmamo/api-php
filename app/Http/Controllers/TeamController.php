<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTeamRequest;
use App\Http\Requests\UpdateTeamRequest;
use App\Models\Team;

class TeamController extends Controller
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
    public function destroy(Team $team): void
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Team $team): void
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
    public function show(Team $team): void
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTeamRequest $request): void
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTeamRequest $request, Team $team): void
    {
    }
}
