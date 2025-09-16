<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MySEOController extends Controller
{
    public function index(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'title' => 'required',
                'description' => 'required',
                'keywords' => 'required',
            ]);

            $title = $request->input('title');
            $description = $request->input('description');
            $keywords = $request->input('keywords');

            $metaTags = [
                'title' => $title,
                'description' => $description,
                'keywords' => $keywords,
            ];

            return view('myseo.index', compact('metaTags'));
        }

        return view('myseo.index');
    }
}
