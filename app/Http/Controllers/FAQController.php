<?php

namespace App\Http\Controllers;

use App\Models\FAQ;
use Illuminate\Http\Request;

class FAQController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $topslider= FAQ::all();
        return view('viewfaq',['topslider'=>$topslider]);
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
     * @param  \App\Http\Requests\StoreFAQRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->isMethod('get')){
            return view('addfaq');
        }
        if($request->isMethod('post')){

            $request->validate([
                   
                'name' => 'required',
              
                'description'=> 'required',
               
            ]);
            
            
            
            $top_slider= new FAQ;  
            
            $top_slider->title=$request->get('name');
            $top_slider->description=$request->get('description');
            
            $top_slider->save();
            return response()->json([
            'message' => 'FAQ Added successfully.',
            ], 200);
            
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FAQ  $fAQ
     * @return \Illuminate\Http\Response
     */
    public function show(FAQ $fAQ)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FAQ  $fAQ
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $package=FAQ::find($id);
        return view('updatefaq',['package'=>$package]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFAQRequest  $request
     * @param  \App\Models\FAQ  $fAQ
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $top_slider= FAQ::find($request->get('id'));
        $top_slider->title=$request->get('name');
        $top_slider->description=$request->get('description');

        $top_slider->update();
        return response()->json([
            'message' => 'FAQ Updated successfully.',
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FAQ  $fAQ
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del= FAQ::find($id);
        $del->delete();
        return response()->json([
            'message' => 'FAQ Deleted successfully.',
        ], 200);
    }
}
