<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMonsterRequest;
use App\Http\Requests\UpdateMonsterRequest;
use App\Models\Monster;

class MonsterController extends Controller
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
    public function destroy(Monster $monster): void
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Monster $monster): void
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
    public function show(Monster $monster): void
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMonsterRequest $request): void
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMonsterRequest $request, Monster $monster): void
    {
    }
}
