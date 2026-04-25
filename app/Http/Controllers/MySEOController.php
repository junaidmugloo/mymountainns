<?php

namespace App\Http\Controllers;

use App\Models\MySEO;
use Illuminate\Http\Request;

class MySEOController extends Controller
{
    public function index(Request $request)
    {
       
        if ($request->isMethod('post')) {

            // validate for best seo practices

            
            $request->validate([
                'meta_title' => 'required |max:60 |min:10',
                'meta_description' => 'required |max:160 |min:50',
                'meta_keywords' => 'required |max:100 |min:10 ',
                'og_image' => 'required',
            ]);

            $meta_title = $request->input('meta_title');
            $meta_description = $request->input('meta_description');
            $meta_keywords = $request->input('meta_keywords');
            $og_image = $request->input('og_image');

            MySEO::create([
                'meta_title' => $meta_title,
                'meta_description' => $meta_description,
                'meta_keywords' => $meta_keywords,
                'og_image' => $og_image,
            ]);

            return response()->json(['status' => 'success', 'message' => 'SEO details added successfully.']);



        
        }

        return view('myseo.index');
    }

    public function viewseo()
    {
        $seo = MySEO::all();
        return view('myseo.view', compact('seo'));
    }

    public function edit($id)
    {
        $seo = MySEO::find($id);
        return view('myseo.edit', compact('seo'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'meta_title' => 'required |max:60 |min:10',
            'meta_description' => 'required |max:160 |min:50',
            'meta_keywords' => 'required |max:100 |min:10 ',
            'og_image' => 'required',
        ]);

        $seo = MySEO::find($request->id);
        $seo->meta_title = $request->meta_title;
        $seo->meta_description = $request->meta_description;
        $seo->meta_keywords = $request->meta_keywords;
        $seo->og_image = $request->og_image;
        $seo->save();

        return response()->json(['status' => 'success', 'message' => 'SEO details updated successfully.']);
    }

    public function destroy($id)
    {
        $seo = MySEO::find($id);
        $seo->delete();
        return response()->json(['status' => 'success', 'message' => 'SEO details deleted successfully.']);
    }
}
