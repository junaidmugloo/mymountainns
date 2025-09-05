<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;

class hotel_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hotels = Hotel::all();
        return view('Hotels/add_hotel',compact('hotels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'stars' => 'required|integer|min:2|max:5',
            'single_room'=> 'required|integer',
            'double_room'=> 'required|integer',
            'extra_bed'=> 'required|integer',
            'extra_child'=> 'required|integer',
            'MAP'=> 'required|integer',
            'CP'=> 'required|integer',
            'EP'=> 'required|integer',
            'address'=> 'required',
        ]);

        $hotel = new Hotel();
        $hotel->name = $request->name;
        $hotel->stars = $request->stars;
        $hotel->single_room = $request->single_room;
        $hotel->double_room = $request->double_room;
        $hotel->extra_bed = $request->extra_bed;
        $hotel->extra_child = $request->extra_child;
        $hotel->MAP = $request->MAP;
        $hotel->CP = $request->CP;
        $hotel->EP = $request->EP;
        $hotel->infant = $request->infant;
        $hotel->address = $request->address;
        $hotel->save();
        return response()->json([
            'message' => 'Hotel Added successfully.',
            ], 200);

        // return redirect()->route('hotels.index')->with('success', 'Hotel created successfully.');
    
        //
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
        $hotel = Hotel::findOrFail($id);
        $hotel->update($request->except('_token', 'id'));
        return response()->json(['success' => true]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $hotel = Hotel::findOrFail($id);
        $hotel->delete();
        return response()->json([
            'message' => 'Hotel deleted successfully.',
            ], 200);
    }
}
