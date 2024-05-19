<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trip;
use App\Models\Country;
use App\Http\Requests\StoreTripRequest;
use App\Http\Requests\UpdateTripRequest;

class TripController extends Controller
{
    public function index()
    {
        $trips = Trip::all();
        return view('trips.index', [
            'trips' => $trips,
            'randomTrips' => $trips->random(4),
        ]);
    }

    public function show($id)
    {
        return view('trips.show', [
            'trip' => Trip::findOrFail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $trip = Trip::findOrFail($id);
        $countries = Country::all();
        return view('trips.edit', compact('trip', 'countries'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $trip = Trip::findOrFail($id);
        $trip->update($request->all());
        $request->validate([
            'name' => 'required|string|max:255','.$id',
            'continent' => 'required|string|max:255',
            'country_id' => 'required|exists:countries,id',
            'period' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0',
        ]);
        return redirect()->route('trips.index')->with('success', 'Trip updated successfully.');
    }
}
