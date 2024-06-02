<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePlaceRequest;
use App\Http\Requests\UpdatePlaceRequest;
use App\Models\Place;

class PlaceController extends Controller
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
    public function destroy(Place $place): void
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Place $place): void
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
    public function show(Place $place): void
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePlaceRequest $request): void
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePlaceRequest $request, Place $place): void
    {
    }
}
