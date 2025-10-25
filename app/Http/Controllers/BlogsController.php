<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use App\Models\MySEO;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $blogs = Blogs::paginate(5);
        $blogs = Blogs::all();
        
        return view('blogs.viewblogs', compact('blogs'));
    }

    public function blogs(){
         $seo=MySEO::where('og_image','blog')->first();
        $blogs = Blogs::all();
        return view('blogs', compact('blogs','seo'));
    }

    public function detail($slug){
        $blog = Blogs::where('slug', $slug)->first();
        return view('blogs.details', compact('blog'));
    }





    public function update(Request $request){
        $blog = Blogs::find($request->id);
        if($request->isMethod('POST')){
            // Validate input

                // Validate input
                $request->validate([
                    'title' => 'required|string|max:255',
                    'content' => 'required|string',
                    // 'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                ]);

                // Upload image
                if ($request->hasFile('image')) {
                    // delete old image
                    $oldImagePath = public_path('blog_images/' . $blog->image);
                    if (File::exists($oldImagePath)) {
                        File::delete($oldImagePath);
                        $image = $request->file('image');
                        $imageName = time() . '.' . $image->getClientOriginalExtension();
                        $image->move(public_path('blog_images'), $imageName);
                        $blog->image = $imageName;
                        $blog->title = $request->title;
                        $blog->content = $request->content;
                        $blog->slug = Str::slug($request->title);
                        $blog->save();
                        return response()->json(['message' => 'Blog updated successfully'], 201);
                    }
                }
                else{ 

                // Store blog in database
                $blog->slug = Str::slug($request->title); // Fix slug assignment
                $blog->title = $request->title;
                $blog->content = $request->content;
                $blog->save();

                return response()->json(['message' => 'Blog updated successfully'], 201);
            }
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
        if($request->isMethod('POST')){
            // Validate input
           
                // Validate input
                $request->validate([
                    'title' => 'required|string|max:255',
                    'content' => 'required|string',
                    'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                ]);
            
                // Upload image
                if ($request->hasFile('image')) {
                    $image = $request->file('image');
                    $imageName = time() . '.' . $image->getClientOriginalExtension();
                    $image->move(public_path('blog_images'), $imageName);
                } else {
                    return back()->with('error', 'Image upload failed.');
                }
            
                // Store blog in database
                $blog = new Blogs(); // Ensure you are using the correct model name
                $blog->slug = Str::slug($request->title); // Fix slug assignment
                $blog->title = $request->title;
                $blog->content = $request->content;
                $blog->image = $imageName;
                $blog->save();
            
                return response()->json(['message' => 'Blog added successfully'], 201);
            }
        else{
            return view('blogs.addblogs');
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
        $blog = Blogs::where('id', $id)->first();
        return view('blogs.update', compact('blog'));

    }

    /**
     * Update the specified resource in storage.
     */
   

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $blog = Blogs::find($id);

    if (!$blog) {
        return response()->json(['message' => 'Blog not found'], 404);
    }

    // Delete the image file if it exists
    $imagePath = public_path('blog_images/' . $blog->image);
    if (File::exists($imagePath)) {
        File::delete($imagePath);
    }

    // Delete blog from database
    $blog->delete();

    return response()->json(['message' => 'Blog deleted successfully'], 200);

    }
}
