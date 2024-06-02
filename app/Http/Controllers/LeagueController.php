<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLeagueRequest;
use App\Http\Requests\UpdateLeagueRequest;
use App\Models\League;

class LeagueController extends Controller
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
    public function destroy(League $league): void
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(League $league): void
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
    public function show(League $league): void
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLeagueRequest $request): void
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLeagueRequest $request, League $league): void
    {
    }
}
