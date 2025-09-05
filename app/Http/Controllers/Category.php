<?php

namespace App\Http\Controllers;

use App\Models\CategoryModel;
use Illuminate\Http\Request;
use File;
class Category extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category= CategoryModel::all();
        return view('viewcategory',['category'=>$category]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
            return view("addcategory");
        }
        if($request->isMethod('post')){
        $request->validate([
            'name' => 'required',
            'description'=> 'required',
            'category_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    
        ]);

    

       $top_slider= new CategoryModel;  
       $top_slider->name=$request->get('name');
       $top_slider->description=$request->get('description');
       $filename = time() . '.' . $request->category_image->extension();
       $request->category_image->move(public_path('category_images'), $filename);
       $top_slider->image= $filename;
       $top_slider->save();
       return response()->json([
        'message' => 'Category Added successfully.',
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
        $slider= CategoryModel::find($id);
        return view("updatecategory",['slider'=>$slider]);
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
        $top_slider= CategoryModel::find($request->get('id'));

        if($request->category_image!=""){
            $image_path = public_path("category_images/".$top_slider->image);  // Value is not URL but directory file path
            if(File ::exists($image_path)) {
             File::delete($image_path);
            

            $filename = time() . '.' . $request->category_image->extension();
            $request->category_image->move(public_path('category_images'), $filename);
            $top_slider->image= $filename;
            }
        
            }
        $top_slider->name=$request->get('name');
        $top_slider->description=$request->get('description');
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
        $slider= CategoryModel::find($id);
         
        $image_path = public_path("category_images/".$slider->image);  // Value is not URL but directory file path
      if(File ::exists($image_path)) {
       File::delete($image_path);
      }
       $slider->delete();
        return response()->json([
          'message' => 'Category Deleted successfully.',
      ], 200);
    }
}
