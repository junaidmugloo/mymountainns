<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;

class vehicle_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vehicles = Vehicle::all();
        return view('Vehicles/add_vehicle', compact('vehicles'));
    }
        //
    

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $request->validate([
            'vehicle_type'=>'required|string',
            'vehicle_category'=>'required|string',
            'vehicle_seats'=>'required|string',
            'vehicle_price' => 'required|numeric|min:0',
        ]);

        $hotel = new Vehicle();
        $hotel->vehicle_type = $request->vehicle_type;
        $hotel->vehicle_category = $request->vehicle_category;
        $hotel->vehicle_seats = $request->vehicle_seats;
        $hotel->vehicle_price = $request->vehicle_price;
        $hotel->save();
        return response()->json([
            'message' => 'Vehicle Added successfully.',
            ], 200);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $vehicle = Vehicle::find($id);
        if (!$vehicle) {
            return response()->json(['message' => 'Vehicle not found'], 404);
        }
        $vehicle->delete();
        return response()->json(['message' => 'Vehicle deleted successfully'], 200);
    }
}
