<?php

namespace App\Http\Controllers;
use App\Mail\VerifyEmail;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class LoginController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->stateless()->user();

            // Check if the user exists
            $existingUser = User::where('email', $user->getEmail())->first();

            if ($existingUser) {
                // Log in the existing user
                Auth::login($existingUser);
            } else {
                // Create a new user
                $newUser = User::create([
                    'name' => $user->getName(),
                    'email' => $user->getEmail(),
                    'google_id' => $user->getId(),
                    'password' => encrypt('password123'),
                    'is_admin'=>3 // You can generate a random password
                ]);

                Auth::login($newUser);
            }

            return redirect()->intended('dashboard');
        } catch (\Exception $e) {
            return redirect('login');
        }
    }


    public function Signup(Request $request){
        if($request->isMethod('post')){
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255|unique:users,email',  // Ensure email is unique in the 'users' table
                'password' => 'required|min:8|max:20', 
                'confirm_password' => 'required|same:password|min:8|max:20'
                 // Example: status must be either 'active' or 'inactive'
            ]);
            $token =Str::random(60);
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->is_admin = 2;
            $user->google_id = $token;
            $user->password = Hash::make($request->password);
           
// sending email
config([
    'mail.mailers.smtp' => [
        'transport' => 'smtp',
        'host' => 'smtp.hostinger.com',  // Hostinger SMTP server
        'port' => 465,
        'encryption' => 'ssl',
        'username' => 'verify@joytourandtravels.com',  // Replace with your Hostinger email
        'password' => 'Joytravels@123',        // Replace with your Hostinger email password
    ],
    'mail.from.address' => 'verify@joytourandtravels.com',  // Sender email
    'mail.from.name' => 'Joy Tour & Travels',         // Sender name
]);

$details = [
    'title' => 'Activate your account',
    'body' => 'Click Activate button to activate your account.https://joytourandtravels.com/verify/'.$token,
];

Mail::to($request->email)->send(new VerifyEmail($details));



$user->save();

            return response()->json(['message'=>"Verify your account by checking email inbox"], 200);
            
        
        }
        else
        {
            return view('signup');
        }

    }

    public function UserLogin(Request $request)
    {
        if ($request->isMethod('post')) {
            // Validate the incoming request
            $request->validate([
                'email' => 'required|email|max:255',
                'password' => 'required|min:8|max:20',
            ]);
    
            // Extract credentials from the request
            $credentials = $request->only('email', 'password');
    
            // Attempt to log in with provided credentials
            if (Auth::attempt($credentials)) {
                // Check if the authenticated user has is_admin == 3
                if (Auth::user()->is_admin == 3) {
                    return response()->json(['message' => 'Login successful', 'redirect' => 'dashboard'], 200);
                } else {
                    // Logout the user and return error if not is_admin == 3
                    Auth::logout();
                    return response()->json(['error' => 'Wrong email or password.'], 401); 
                }
            } else {
                // Invalid credentials
                return response()->json(['error' => 'Wrong email or password.'], 401); 
            }
        } else {
            // Return error for non-POST requests
            return response()->json(['error' => 'Invalid request method'], 405);
        }
    }
    

    public function Verify($token){
        $user = User::where('google_id', $token)->first();
        if($user){
              $user->is_admin = 3;
              $user->google_id = Str::random(60);
              $user->save();
           echo("<h4 style='text-align:center;'>Your account has been activated successfully<h4>");
        }
        else
        {
        echo("<h4 style='text-align:center;'>Activation link expired</h4>");
        }
    }
  
}
