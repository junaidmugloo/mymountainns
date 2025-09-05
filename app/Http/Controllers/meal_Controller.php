<?php

namespace App\Http\Controllers;

use App\Models\Meal;
use Illuminate\Http\Request;

class meal_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $meals = Meal::all();

        return view('Hotels/add_meal',compact('meals'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'price' => 'required|numeric|min:0',
        ]);

        $hotel = new Meal();
        $hotel->name = $request->name;
        $hotel->price = $request->price;
        $hotel->save();
        return response()->json([
            'message' => 'Meal Added successfully.',
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
        $meal = Meal::find($id);
        if ($meal) {
            $meal->delete();
            return response()->json([
                'message' => 'Meal deleted successfully.',
                ], 200);
        } else {
            return response()->json([
                'message' => 'Meal not found.',
                ], 404);
        }
    }
}
