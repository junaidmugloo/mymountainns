<?php

namespace App\Http\Controllers;

use App\Models\TopSlider;
use Illuminate\Http\Request;
use File;
class Top_Slider extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('add_banner');
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
    public function top_banner_preview(){
        $topslider= TopSlider::all();
        return view('top_banner_preview',['topslider'=>$topslider]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'heading' => 'required',
            'offer_line' => 'required',
            'price' => 'required|numeric',
            'discount_price' => 'required|numeric|different:price',
            'description'=> 'required',
            'banner_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'tag_line' =>'required',
    
        ]);

    

       $top_slider= new TopSlider;  
       $top_slider->heading=$request->get('heading');
       $top_slider->offer_line=$request->get('offer_line');
       $top_slider->price=$request->get('price');
       $top_slider->discount=$request->get('discount_price');
       $top_slider->description=$request->get('description');
       $filename = time() . '.' . $request->banner_image->extension();
       $request->banner_image->move(public_path('top_banner_images'), $filename);
       $top_slider->image= $filename;
       $top_slider->tag_line=$request->get('tag_line');
       $top_slider->save();
       return response()->json([
        'message' => 'Banner Added successfully.',
    ], 200);

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


    public function viewbanner(){
        $topslider= TopSlider::all();
        return view("viewbanner",['topslider'=>$topslider]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slider= TopSlider::find($id);
        return view("updatebanner",['slider'=>$slider]);

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
        $top_slider= TopSlider::find($request->get('id'));

        if($request->banner_image!=""){
            $image_path = public_path("top_banner_images/".$top_slider->image);  // Value is not URL but directory file path
            if(File ::exists($image_path)) {
             File::delete($image_path);
            

            $filename = time() . '.' . $request->banner_image->extension();
            $request->banner_image->move(public_path('top_banner_images'), $filename);
            $top_slider->image= $filename;
            }
        
            }
        $top_slider->heading=$request->get('heading');
        $top_slider->offer_line=$request->get('offer_line');
        $top_slider->price=$request->get('price');
        $top_slider->discount=$request->get('discount_price');
        $top_slider->description=$request->get('description');
        $top_slider->heading_color=$request->get('heading_color');
        $top_slider->offer_line_color=$request->get('offer_line_color');
        $top_slider->tag_line=$request->get('tag_line');
        $top_slider->update();
        return response()->json([
            'message' => 'Banner Updated successfully.',
        ], 200);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          $slider= TopSlider::find($id);
         
          $image_path = public_path("top_banner_images/".$slider->image);  // Value is not URL but directory file path
        if(File ::exists($image_path)) {
         File::delete($image_path);
        }
         $slider->delete();
          return response()->json([
            'message' => 'Banner Deleted successfully.',
        ], 200);

    }
}
