<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use File;
class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $topslider= Gallery::all();
        return view('viewgallery',['topslider'=>$topslider]);
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
     * @param  \App\Http\Requests\StoreGalleryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->isMethod('get')){
            return view('addgallery');
        }
        if($request->isMethod('post')){


            $request->validate([
                
                'gallery_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            
            ]);
            
            
            
            $top_slider= new Gallery;  
            
            $filename = time() . '.' . $request->gallery_image->extension();
                $request->gallery_image->move(public_path('gallery_images'), $filename);
            $top_slider->image= $filename;
            
            $top_slider->save();
            return response()->json([
            'message' => 'Gallery Added successfully.',
            ], 200);
            
            
            
            
            
                    }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slider= Gallery::find($id);
        return view("updategallery",['slider'=>$slider]);  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGalleryRequest  $request
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $top_slider= Gallery::find($request->get('id'));
        if($request->category_image!=""){
            $image_path = public_path("gallery_images/".$top_slider->image);  // Value is not URL but directory file path
            if(File ::exists($image_path)) {
             File::delete($image_path);
            

            $filename = time() . '.' . $request->category_image->extension();
            $request->category_image->move(public_path('gallery_images'), $filename);
            $top_slider->image= $filename;
            }
        
            }
      
        $top_slider->update();
        return response()->json([
            'message' => 'Banner Updated successfully.',
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gal= Gallery::find($id);

        $image_path = public_path("gallery_images/".$gal->image);  // Value is not URL but directory file path
        if(File ::exists($image_path)) {
         File::delete($image_path);
        }
        $gal->delete();
        return response()->json([
            'message' => 'Gallery Image Deleted successfully.',
        ], 200);
    }
}
