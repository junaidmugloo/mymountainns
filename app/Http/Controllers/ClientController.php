<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
           
            // Use pagination for better performance
            // $topslider = Client::paginate(10); // Adjust the number of items per page as needed
            $topslider = Client::all(); 
            // Return the view with the paginated results
            return view('viewclient', ['topslider' => $topslider]);
    
        } catch (\Exception $e) {
            // Handle any errors during data retrieval
            return redirect()->back()->with('error', 'Failed to retrieve data. Please try again later.');
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
        if($request->isMethod('post')){

            try {
                // Validate input
                $request->validate([
                    'name' => 'required|string|max:255',
                    // 'email' => 'required|email|max:255',
                    'contact' => 'required|string|regex:/^[0-9]{10,15}$/',  // Adjust the pattern for your specific use case
                    // 'address' => 'required|string|max:500',
                    // 'Date_of_Travel'=>'required',
                    // 'Agent_Name'=>'required|string|max:100',
                    // 'Source'=>'required|string|max:500',
                    // 'AltNumber'=>'required|string|regex:/^[0-9]{10,15}$/',
                    // 'status' => 'required|in:active,inactive',  // Example: status must be either 'active' or 'inactive'
                    // 'status' => 'required|max:255',
                ]);
        
                
               
                // Create new Offer
                Client::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'phone' => $request->contact,
                    'address' => $request->address,
                    'status' => $request->status,
                    'Date_of_Travel'=>$request->Date_of_Travel,
                    'Agent_Name'=>$request->Agent_Name,
                    'Source'=>$request->Source,
                    'AltNumber'=>$request->AltNumber,

                ]);
        
                return response()->json(['message' => 'Customer data added successfully.'], 200);
        
            } catch (\Exception $e) {
                return response()->json(['message' => $e->getMessage()], 500);
            }
           
            
        }
        else{
            return view('addclient');
        }
            
            
            
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
        $package=Client::find($id);
        return view('updateclient',['package'=>$package]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $top_slider=Client::find($request->get('id'));
       
      
             $top_slider->name = $request->get('name');
             $top_slider->email = $request->get('email');
             $top_slider->phone = $request->get('contact');
             $top_slider->address = $request->get('address');
             $top_slider->status = $request->get('status');
             $top_slider->Date_of_Travel=$request->get('Date_of_Travel');
             $top_slider->Agent_Name=$request->get('Agent_Name');
             $top_slider->Source=$request->get('Source');
             $top_slider->AltNumber=$request->get('AltNumber');
             $top_slider->update();
        
        return response()->json([
            'message' => 'Updated successfully.',
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Client::find($id)->delete();
        return response()->json([
            'message' => 'Deleted successfully.',
        ], 200);
    }
}
