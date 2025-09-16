<?php

use App\Http\Controllers\AI;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\Booking;
use App\Http\Controllers\Category;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\hotel_Controller;
use App\Http\Controllers\landingpage;
use App\Http\Controllers\MailController;
use App\Http\Controllers\meal_Controller;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\Packages;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\Top_Slider;
use App\Http\Controllers\Users;
use App\Http\Controllers\vehicle_Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MySEOController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//send verify email//
Route::get('/youtube',function(){
    return view('youtube');
});



Route::get('verify-email', [LoginController::class, 'verifyEmail'])->name('verify-email');

Route::post('/user-signup', [LoginController::class, 'Signup'])->name('user-signup');
Route::post('/user-login', [LoginController::class, 'UserLogin'])->name('user-login');


Route::get('verify/{token}',[LoginController::class, 'Verify']);


// phone pe
Route::get('/phonepe/payment',[PaymentController::class,'makePhonePePayment'])->name('phonepe.payment');
Route::post('/phonepe/payment/callback',[PaymentController::class,'phonePeCallback'])->name('phonepe.payment.callback');

// google



Route::get('auth/google', [LoginController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [LoginController::class, 'handleGoogleCallback']);
// google end
Route::post('auth/logout', function () {
    Auth::logout();
    return redirect('/');  // Redirect to home page after logout
})->name('auth_logout');

Route::get('ai',[AI::class,'index']);


Route::get('/feedback', function () {
    return view('feedback');
});

Route::get('/terms', function () {
    return view('terms');
});

Route::get('/policy', function () {
    return view('policy');
});

Route::get('/car', function () {
    return view('car');
});

// Route::get('/kashmir', function () {
//     return view('kashmir');
// });

Route::get('/location', function () {
    return view('location');
});


// Route::get('/blogs/tulip-festival', function () {
//     return view('tulip');
// });

Route::get('nav', function () {
    return view('nav');
});



// booking start //
route::get('/booking', [Booking::class, 'index']);


// booking end //

route::get('/explore', [Booking::class, 'booking_filter']);
// route::get('/exp2', [Booking::class, 'booking_filter2']);



Route::get('/blogs/{slug}',[BlogsController::class,'detail']);       
Route::get('/blogs',[BlogsController::class,'blogs']);  
Route::match(['get', 'post'], 'updateblog',[BlogsController::class,'update']); 

Route::match(['get', 'post'], 'updateblog/{id}',[BlogsController::class,'edit']); 

Route::get('/',[landingpage::class,'index']);
Route::get('/about',[landingpage::class,'about']);
Route::get('ladakh',[landingpage::class,'ladakh']);
Route::get('kashmir',[landingpage::class,'kashmir']);

Route::any('search',[landingpage::class,'search']);
Route::any('searchfl',[landingpage::class,'searchfl']);
Route::get('/details2/{id}',[landingpage::class,'detail']);
Route::get('/details/{id}',[landingpage::class,'detail2']);
Route::get('/it/{id}',[landingpage::class,'generatePDF']);
Route::post('/sendmail',[MailController::class,'index']);
Route::post('/sendmail2',[MailController::class,'index2']);
Route::post('/sendmail3',[MailController::class,'index3']);












Route::get('/settings', function () {
    return view('settings');
});


Route::get('/login',[Users::class,'login']);
Route::post('/login',[Users::class,'login']);


Route::middleware(['staff_guard'])->group(function () {
    Route::get('/logout',[Users::class,'logout']);
    Route::post('/customer',[ClientController::class,'store']);
    Route::get('/customer',[ClientController::class,'store']);
    Route::delete('/customer/{id}',[ClientController::class,'destroy']);
    Route::get('/viewcustomer',[ClientController::class,'index']);
    Route::get('/editcustomer/{id}',[ClientController::class,'edit']);
    Route::post('/updatecustomer',[ClientController::class,'update']);

    
    Route::get('/addhotel',[hotel_Controller::class,'index']);
    Route::post('/addhotel',[hotel_Controller::class,'create']);
    Route::post('/edithotel/{id}', [hotel_Controller::class, 'update']);
    Route::delete('/addhotel/{id}',[hotel_Controller::class,'destroy']);

    Route::get('/addmeal',[meal_Controller::class,'index']);
    Route::post('/addmeal',[meal_Controller::class,'create']);
    Route::put('/addmeal',[meal_Controller::class,'update']);
    Route::delete('/addmeal/{id}',[meal_Controller::class,'destroy']);

    Route::get('/addvehicles',[vehicle_Controller::class,'index']);
    Route::post('/addvehicles',[vehicle_Controller::class,'create']);
    Route::put('/addvehicles',[vehicle_Controller::class,'update']);
    Route::delete('/addvehicles/{id}',[vehicle_Controller::class,'destroy']);


    Route::get('/addpackages',[Packages::class,'store']);
    Route::post('/addpackages',[Packages::class,'store']);
    Route::get('/editpackages/{id}',[Packages::class,'edit']);
    Route::post('/updatepackages',[Packages::class,'update']);
    Route::get('/viewpackages',[Packages::class,'index']);
    Route::delete('/viewpackages/{id}',[Packages::class,'destroy']);
    Route::get('/viewdetails/{id}',[Packages::class,'viewdetails']);


});

Route::middleware(['admin_guard'])->group(function () {


// myseo

Route::match(['get', 'post'], '/addseo',[MySEOController::class,'index']);
 
Route::get('/logout',[Users::class,'logout']);
    
// client Data//
// Route::get('/customer',[ClientController::class,'index']);
// Route::post('/customer',[ClientController::class,'store']);
// Route::get('/customer',[ClientController::class,'store']);
// Route::delete('/customer/{id}',[ClientController::class,'destroy']);


// Route::get('/viewcustomer',[ClientController::class,'index']);

    

//Client end//

// Staff//
Route::post('/staff',[Users::class,'store']);
Route::get('/staff',[Users::class,'store']);
Route::delete('/staff/{id}',[Users::class,'destroy']);
Route::get('/editstaff/{id}', [Users::class, 'edit']);
Route::post('/updatestaff', [Users::class, 'update']);
Route::get('/viewstaff',[Users::class,'index']);



//Staff End//

// blog start //
Route::match(['get', 'post'], '/addblog',[BlogsController::class,'store'] );
Route::get('/viewblog',[BlogsController::class,'index']);
Route::delete('/viewblog/{id}',[BlogsController::class,'destroy']);

//Top banner routing//

Route::get('/addbanner',[Top_Slider::class,'index']);
Route::post('/addbanner',[Top_Slider::class,'store']);
Route::get('/top_banner_preview',[Top_Slider::class,'top_banner_preview']);

Route::get('/editbanner/{id}',[Top_Slider::class,'edit']);
Route::post('/updatebanner',[Top_Slider::class,'update']);


Route::get('/viewbanner',[Top_Slider::class,'viewbanner']);
Route::delete('/viewbanner/{id}',[Top_Slider::class,'destroy']);

//Top banner routing end//


//Category Routing start//

Route::get('/addcategory',[Category::class,'store']);
Route::post('/addcategory',[Category::class,'store']);

Route::get('/editcategory/{id}',[Category::class,'edit']);
Route::post('/updatecategory',[Category::class,'update']);


Route::get('/viewcategory',[Category::class,'index']);
Route::delete('/viewcategory/{id}',[Category::class,'destroy']);

//Category Routing end//


//Packages Routing start//
Route::get('/admin',[Packages::class,'welcome']);
// Route::get('/addpackages',[Packages::class,'store']);
// Route::post('/addpackages',[Packages::class,'store']);

// Route::get('/editpackages/{id}',[Packages::class,'edit']);
// Route::post('/updatepackages',[Packages::class,'update']);


// Route::get('/viewpackages',[Packages::class,'index']);
// Route::delete('/viewpackages/{id}',[Packages::class,'destroy']);

//Packages Routing end//


//Gallery Routing start//

Route::get('/addgallery',[GalleryController::class,'store']);
Route::post('/addgallery',[GalleryController::class,'store']);

Route::get('/editgallery/{id}',[GalleryController::class,'edit']);
Route::post('/updategallery',[GalleryController::class,'update']);


Route::get('/viewgallery',[GalleryController::class,'index']);
Route::delete('/viewgallery/{id}',[GalleryController::class,'destroy']);


//Gallery Routing end//



//Offer Routing start//

Route::get('/addoffer',[OfferController::class,'store']);
Route::post('/addoffer',[OfferController::class,'store']);

Route::get('/editoffer/{id}',[OfferController::class,'edit']);
Route::post('/updateoffer',[OfferController::class,'update']);


Route::get('/viewoffer',[OfferController::class,'index']);
Route::delete('/viewoffer/{id}',[OfferController::class,'destroy']);


//Offer Routing end//


//Offer FAQ start//

Route::get('/addfaq',[FAQController ::class,'store']);
Route::post('/addfaq',[FAQController::class,'store']);

Route::get('/editfaq/{id}',[FAQController::class,'edit']);
Route::post('/updatefaq',[FAQController::class,'update']);


Route::get('/viewfaq',[FAQController::class,'index']);
Route::delete('/viewfaq/{id}',[FAQController::class,'destroy']);



//Offer FAQ end//

});