<?php

namespace App\Http\Controllers;

use App\Models\CategoryModel;
use App\Models\Hotel;
use App\Models\PackageDays;
use App\Models\PackageOptions;
use App\Models\PackagesModel;
use Illuminate\Http\Request;
use File;
class Packages extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $packages=PackagesModel::all();
       
        return view('viewpackages',['packages'=>$packages]);
        
      

    }

    public function welcome(){
        $packages= PackagesModel::all();
        return view('welcome',['packages'=>$packages]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->isMethod('get')){
            $category = CategoryModel::all();
            $hotels=Hotel::all();
           
            return view('addpackages',['category'=>$category ,'hotels'=>$hotels]);
        }
        if($request->isMethod('post')){


$request->validate([
    'D1'=>'required',
    'D2'=>'required',
    'D3'=>'required',
    'category'=>'required',
    'name' => 'required',
    'price' => 'required|numeric',
    'discount_price' => 'required|numeric|different:price',
    'day'=>'required|numeric',
    'night'=>'required|numeric',
    'contact'=>'required|numeric|digits:10',
    'include'=> 'required',
    'exclude'=>'required',
    'terms'=> 'required',
    'destination'=>'required',
    'description'=> 'required',
    'start'=> 'required',
    'end'=> 'required',
    'package_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    'tag_line'=>'required',
    'days.*.title' => 'required|string|max:255',
    'days.*.description' => 'required|string',
    'days.*.index' => 'required|integer|min:1',
    // 'hotel.*.*.checkin' => 'required',
    'hotel.*.*.nights' => 'required',
    'hotel.*.*.title' => 'required|exists:hotel,id',


]);



$top_slider = new PackagesModel;  

$top_slider->name = $request->get('name');
$top_slider->D1 = $request->get('D1');
$top_slider->D2 = $request->get('D2');
$top_slider->D3 = $request->get('D3');
$top_slider->category = $request->get('category');
$top_slider->description = $request->get('description');
$filename = time() . '.' . $request->package_image->extension();
$request->package_image->move(public_path('package_images'), $filename);
$top_slider->image = $filename;
$top_slider->day = $request->get('day');
$top_slider->night = $request->get('night');	
$top_slider->destination = $request->get('destination');	
$top_slider->price = $request->get('price');	
$top_slider->discount = $request->get('discount_price');	
$top_slider->contact = $request->get('contact');
$top_slider->start = $request->get('start');
$top_slider->end = $request->get('end');
$top_slider->tag_line = $request->get('tag_line');
$top_slider->end = $request->get('include');
$top_slider->exclude = $request->get('exclude');
$top_slider->terms = $request->get('terms');

// Save the package first to get the ID
$top_slider->save();

if ($request->has('days')) {
    foreach ($request->days as $dayData) {
        PackageDays::create([
            'package_id' => $top_slider->id,
            'title' => $dayData['title'],
            'days' => $dayData['description'],
            'day_index' => $dayData['index'],
        ]);
    }
}

$hotelData = $request->input('hotel');

foreach ($hotelData as $optionIndex => $hotels) {
    foreach ($hotels as $hotel) {
        PackageOptions::create([
            'option_index' => $optionIndex,
            'package_id' => $top_slider->id,
            'hotel_id' => $hotel['title'],
            'hotel_name' => $hotel['title'],
         
            'checkout' => $hotel['nights'],
        ]);
    }
}

$top_slider->save();

return response()->json([
'message' => 'Package Added successfully.',
], 200);





        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $package = PackagesModel::findOrFail($id);
        $category = CategoryModel::all();
        $hotels = Hotel::all();
        
        // Get existing days
        $days = PackageDays::where('package_id', $id)->get();
        $options = PackageOptions::where('package_id', $id)->get();
        
        // Format hotel options in the same way as viewdetails method
        $formattedOptions = [];
        foreach ($options as $option) {
            $hotel = Hotel::find($option->hotel_id);
            if ($hotel) {
                $formattedOptions[$option->option_index][] = [
                    'hotel_id' => $option->hotel_id,
                    'hotel_name' => $hotel->name,
                    'nights' => $option->checkout,
                    'option_index' => $option->option_index,
                ];
            }
        }
        
        return view('updatepackages', [
            'package' => $package,
            'category' => $category,
            'hotels' => $hotels,
            'days' => $days,
            'options' => $formattedOptions
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        try {
            // Validate the request data
            $validator = \Validator::make($request->all(), [
                'id' => 'required|exists:packages,id',
                'category' => 'required',
                'name' => 'required',
                'price' => 'required|numeric',
                'discount_price' => 'required|numeric',
                'day' => 'required|numeric',
                'night' => 'required|numeric',
                'contact' => 'required|numeric|digits:10',
                'include' => 'required',
                'exclude' => 'required',
                'terms' => 'required',
                'destination' => 'required',
                'description' => 'required',
                'start' => 'required',
                'end' => 'required',
                'package_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'tag_line' => 'required',
                'days.*.title' => 'required|string|max:255',
                'days.*.description' => 'required',
                'days.*.index' => 'required',
                // 'hotel.*.*.checkin' => 'required',
                'hotel.*.*.nights' => 'required',
                'hotel.*.*.hotel_id' => 'required',
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'message' => $validator->errors()->first(),
                    'errors' => $validator->errors(),
                ], 422);
            }

            $top_slider = PackagesModel::find($request->get('id'));
            
            if (!$top_slider) {
                return response()->json([
                    'message' => 'Package not found.',
                ], 404);
            }

            // Handle image upload
            if ($request->hasFile('package_image')) {
                $image_path = public_path("package_images/" . $top_slider->image);
                if (File::exists($image_path)) {
                    File::delete($image_path);
                }
                
                $filename = time() . '.' . $request->package_image->extension();
                $request->package_image->move(public_path('package_images'), $filename);
                $top_slider->image = $filename;
            }

            // Update package details
            $top_slider->category = $request->get('category');
            $top_slider->name = $request->get('name');
            $top_slider->price = $request->get('price');
            $top_slider->discount = $request->get('discount_price');
            $top_slider->description = $request->get('description');
            $top_slider->day = $request->get('day');
            $top_slider->night = $request->get('night');
            $top_slider->contact = $request->get('contact');
            $top_slider->destination = $request->get('destination');
            $top_slider->start = $request->get('start');
            $top_slider->end = $request->get('end');
            $top_slider->D1 = $request->get('D1');
            $top_slider->D2 = $request->get('D2');
            $top_slider->D3 = $request->get('D3');
            $top_slider->tag_line = $request->get('tag_line');
            $top_slider->include = $request->get('include');  
            $top_slider->exclude = $request->get('exclude');
            $top_slider->terms = $request->get('terms');
              
            
            
            // Update days
            $days = PackageDays::where('package_id', $top_slider->id)->get();
            foreach ($days as $day) {
                $day->delete();
            }
            
            if ($request->has('days')) {
                foreach ($request->days as $dayData) {
                    PackageDays::create([
                        'package_id' => $top_slider->id,
                        'title' => $dayData['title'],
                        'days' => $dayData['description'],
                        'day_index' => $dayData['index'],
                    ]);
                }
            }

            // Delete existing package options
            PackageOptions::where('package_id', $top_slider->id)->delete();


            // Create new package options if hotel data exists
            if ($request->has('hotel')) {
                $hotelData = $request->input('hotel');
                
                collect($hotelData)->each(function ($hotels, $optionIndex) use ($top_slider) {
                    collect($hotels)->each(function ($hotel) use ($optionIndex, $top_slider) {
                        PackageOptions::create([
                            'option_index' => $optionIndex,
                            'package_id' => $top_slider->id,
                            'hotel_id' => $hotel['hotel_id'],
                            'hotel_name' => $hotel['hotel_id'], 
                            'checkout' => $hotel['nights']
                        ]);
                    });
                });
            }

            $top_slider->update();
            
            return response()->json([
                'message' => 'Package Updated successfully.',
            ], 200);
            
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'An error occurred while updating the package.',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function viewdetails($id){
        $package=PackagesModel::find($id);
        $days=PackageDays::where('package_id', $id)->get();
        $options=PackageOptions::where('package_id', $id)->get();
        // stor in array
        $hotels = [];
   foreach ($options as $option) {
        $hotel = Hotel::find($option->hotel_id);
        if ($hotel) {
            $hotels[$option->option_index][] = [
                'hotel_id' => $option->hotel_id,
                'hotel_name' => $hotel->name,
                'checkin' => $option->checkin,
                'checkout' => $option->checkout,
            ];
        }
    }

        return view('viewpackagedetails',['package'=>$package,'days'=>$days,'options'=>$hotels]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider= PackagesModel::find($id);
         
          $image_path = public_path("package_images/".$slider->image);  // Value is not URL but directory file path
        if(File ::exists($image_path)) {
           File::delete($image_path);

        }
        $days = PackageDays::where('package_id', $slider->id)->get();
        foreach ($days as $day) {
            $day->delete();
        } 
        $options = PackageOptions::where('package_id', $slider->id)->get();
        foreach ($options as $option) {
            $option->delete();
        }
         $slider->delete();
          return response()->json([
            'message' => 'Banner Deleted successfully.',
        ], 200);
    }
}
