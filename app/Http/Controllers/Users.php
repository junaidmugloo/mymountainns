<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
class Users extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $topslider = User::all()->where('email','!=','admin@joy.com')->where('google_id',null);
      
        return view('viewstaff',['topslider'=>$topslider]);
    }
    
    public function login(Request $request)
    { 
        if(Session::has('admin')){
            return redirect('/admin');
        }
        
        if($request->isMethod('post'))
        {
            $credentials =  $request->validate([
                'email'=>'required|email',
                'password'=>'required'
            ]);

            if (Auth::attempt($credentials)) {
                $user = Auth::user();

                // Check if the user has a specific role
                if ($user->is_admin==1) {
                Session::put('admin',$request->get('email'));
                Session::put('staff',$request->get('email'));
                return response()->json(['message'=>"success"],200);
                } 
                else if($user->is_admin==0 ) {
                    Session::forget('admin');
                    Session::put('staff',$request->get('email'));
                    return response()->json(['message'=>"success1"],200);
                }
                else{
                    return response()->json(['message'=>"No Access For Customers"], 422);
           
                }
            }
            else{
            return response()->json(['message'=>"Wrong email or password"], 422);
            }
        }
        
        
        
        
        
        
        
        if($request->isMethod('get'))
        {
        return view('login');
        }
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->isMethod('post')){
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email',  // Ensure email is unique in the 'users' table
            'password' => 'required|min:8|max:20',  // Example: status must be either 'active' or 'inactive'
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->is_admin = 0;
        $user->password = Hash::make($request->password);
        $user->save();
        return response()->json(['message'=>"Staff Added Success"], 200);
    }
    else
    {
        return view('addstaff');
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
        $user = User::find($id);
        return view('updatestaff', compact('user'));
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
        //
        $user = User::find($request->id);
        $user->name = $request->name;
        $user->email = $request->email;
        if(isset($request->password)){
        $user->password = Hash::make($request->password);
        }
        $user->save();
        return response()->json(['message'=>"Staff Updated Success"], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $user = User::find($id);
        $user->delete();
        return response()->json(['message'=>"Staff Deleted Success"], 200);
    }
    public function logout(){
        Session::flush();
        Session::forget('admin');
        Session::forget('staff');
        Auth::logout();
        return Redirect::to('/login');
    }
}
