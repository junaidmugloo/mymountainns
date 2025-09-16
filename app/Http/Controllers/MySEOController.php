<?php

namespace App\Http\Controllers;

use App\Models\MySEO;
use Illuminate\Http\Request;

class MySEOController extends Controller
{
    public function index(Request $request)
    {
       
        if ($request->isMethod('post')) {

            $request->validate([
                'meta_title' => [
                    'required',
                    'string',
                    'max:60', // Ideal: 50–60 characters
                ],
                'meta_description' => [
                    'required',
                    'string',
                    'max:160', // Ideal: 150–160 characters
                ],
                'meta_keywords' => [
                    'required',
                    'string',
                    'max:255', // Avoid stuffing; keep concise
                    function ($attribute, $value, $fail) {
                        // Optional: limit number of keywords
                        $keywords = explode(',', $value);
                        if (count($keywords) > 10) {
                            $fail('You should not use more than 10 keywords for better SEO.');
                        }
                    },
                ],
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
