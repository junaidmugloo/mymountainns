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
            ]);

            $meta_title = $request->input('meta_title');
            $meta_description = $request->input('meta_description');
            $meta_keywords = $request->input('meta_keywords');

            MySEO::create([
                'meta_title' => $meta_title,
                'meta_description' => $meta_description,
                'meta_keywords' => $meta_keywords,
                'og_image' => 'home', // Set to null or handle file upload if needed
            ]);

            return response()->json(['status' => 'success', 'message' => 'SEO details added successfully.']);



        
        }

        return view('myseo.index');
    }
}
