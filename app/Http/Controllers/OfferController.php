<?php

namespace App\Http\Controllers;
use App\Models\Offer;
use Illuminate\Http\Request;
use File;
class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $topslider= Offer::all();
        return view('viewoffer',['topslider'=>$topslider]);
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
     * @param  \App\Http\Requests\StoreOfferRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->isMethod('get')){
            return view('addoffer');
        }
       
            if($request->isMethod('post')){


                $request->validate([
                   
                    'heading' => 'required',
                    'link'=> 'required',
                    'description'=> 'required',
                    'banner_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                
                ]);
                
                
                
                $top_slider= new Offer;  
                
                $top_slider->heading=$request->get('heading');
                $top_slider->description=$request->get('description');
                $filename = time() . '.' . $request->banner_image->extension();
                $request->banner_image->move(public_path('offer_images'), $filename);
                $top_slider->image= $filename;
                $top_slider->link=$request->get('link');
                $top_slider->save();
                return response()->json([
                'message' => 'Offer Added successfully.',
                ], 200);
                
                
                
                
                
                        
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $package= Offer::find($id);
        return view('updateoffer',['package'=>$package]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOfferRequest  $request
     * @param  \App\Models\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $top_slider=Offer::find($request->get('id'));

        if($request->package_image!=""){
            $image_path = public_path("offer_images/".$top_slider->package_image);  // Value is not URL but directory file path
            if(File ::exists($image_path)) {
             File::delete($image_path);
            

            $filename = time() . '.' . $request->package_image->extension();
            $request->package_image->move(public_path('offer_images'), $filename);
            $top_slider->image= $filename;
            }
        
            }
      
        $top_slider->heading=$request->get('name');
        $top_slider->description=$request->get('description');
        $top_slider->link=$request->get('link');
        $top_slider->update();
        return response()->json([
            'message' => 'Offer Updated successfully.',
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gal= Offer::find($id);

        $image_path = public_path("offer_images/".$gal->image);  // Value is not URL but directory file path
        if(File ::exists($image_path)) {
         File::delete($image_path);
        }
        $gal->delete();
        return response()->json([
            'message' => 'Gallery Image Deleted successfully.',
        ], 200);
    }
}
