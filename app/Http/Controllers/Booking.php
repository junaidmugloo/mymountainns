<?php

namespace App\Http\Controllers;

use App\Models\CategoryModel;
use App\Models\MySEO;
use App\Models\PackagesModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
class Booking extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      
        return view('Booking/booking');
    }
    public function booking_filter(Request $request){

        // Cache categories for 60 minutes
        if(isset($request->budget)){
           
            $budget = $request->budget;

            // Cache categories for 60 minutes
            $category = Cache::remember('categories', 0, function () {
                return CategoryModel::all();
            });
    
            // Cache packages for 60 minutes and apply filter based on budget
            $packages =  PackagesModel::paginate(5);
    
            // Return view with categories and filtered packages
            return view('filter', compact('category', 'packages'));
        }
        else{

    $category = Cache::remember('categories', 0, function () {
        return CategoryModel::all();
    });

    // Cache packages for 60 minutes
    $packages =  PackagesModel::paginate(5);
    $seo=MySEO::where('og_image','tour')->first();

    return view('filter', compact('category', 'packages','seo'));
        }    
}




    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
