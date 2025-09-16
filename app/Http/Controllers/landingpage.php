<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use App\Models\CategoryModel;
use App\Models\Gallery;
use App\Models\TopSlider;
use App\Models\FAQ;
use App\Models\Hotel;
use App\Models\Offer;
use App\Models\PackageDays;
use App\Models\PackageOptions;
use App\Models\PackagesModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Barryvdh\DomPDF\Facade\Pdf;
class landingpage extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
{
    // Kashmir Packages
    $packages = Cache::remember('packages', 300, function () {
        return PackagesModel::where('category', 'Kashmir Tour Packages')
            ->latest('id')   // latest records
            ->take(10)       // only 10
            ->get();
    });

    // Ladakh Packages
    $packages1 = Cache::remember('packages1', 300, function () {
        return PackagesModel::where('category', 'Ladakh Tour Packages')
            ->latest('id')
            ->take(10)
            ->get();
    });

    // Pilgrimage Packages
    $packages2 = Cache::remember('packages2', 300, function () {
        return PackagesModel::where('category', 'Prilgimage Packages')
            ->latest('id')
            ->take(10)
            ->get();
    });

    // Honeymoon Packages
    $honeymoon = Cache::remember('honeymoon', 300, function () {
        return PackagesModel::where('category', 'Honeymoon Special')
            ->latest('id')
            ->take(10)
            ->get();
    });

    // Premium Packages
    $premium = Cache::remember('premium', 300, function () {
        return PackagesModel::where('category', 'Premium')
            ->latest('id')
            ->take(10)
            ->get();
    });

    // Banner (only 5 banners to keep homepage light)
    $banner = Cache::remember('banner', 300, function () {
        return TopSlider::latest('id')->take(5)->get();
    });

    // FAQ (only 10 latest FAQs)
    $faq = Cache::remember('faq', 300, function () {
        return FAQ::latest('id')->take(10)->get();
    });

    // Offers (limit 5)
    $offer = Cache::remember('offer', 300, function () {
        return Offer::latest('id')->take(5)->get();
    });

    // Tagline (single record)
    $tagline = Cache::remember('tagline', 300, function () {
        return CategoryModel::where('name', 'tagline')->first();
    });

    // Gallery (latest 20 images only)
    $images = Cache::remember('images', 300, function () {
        return Gallery::latest('id')->take(20)->get();
    });
    $blogs = Cache::remember('blogs', 300, function () {
        return Blogs::latest('id')->take(6)->get();
    });

    return view('frontend.index', [
        'packages'  => $packages,
        'packages1' => $packages1,
        'packages2' => $packages2,
        'premium'   => $premium,
        'faq'       => $faq,
        'offer'     => $offer,
        'banner'    => $banner,
        'tagline'   => $tagline,
        'honeymoon' => $honeymoon,
        'images'    => $images,
        'blogs'     => $blogs,
    ]);
}
    public function generatePDF($id)
{
    $package = PackagesModel::findOrFail($id);

    $pdf = Pdf::loadView('it', compact('package'));
    return $pdf->download('itinerary.pdf');
}
    function search(Request $request){

         // Basic search
         if($request->isMethod('post')){

         $packages= PackagesModel::where('name', 'LIKE', "%$request->slug%")
                    ->orWhere('description', 'LIKE', "%$request->slug%")
                    ->orWhere('category', 'LIKE', "%$request->slug%")
                    ->orWhere('destination', 'LIKE', "%$request->slug%")
                    ->orWhere('price', 'LIKE', "%$request->slug%")
                    ->orWhere('discount', 'LIKE', "%$request->slug%")
                    ->get();

                    // return response()->json($packages);
         return view('search',['packages'=>$packages]);
         }
         if($request->isMethod('get')){
            return redirect()->to('/');
         }
    }


    function searchfl(Request $request){

        // Basic search
        if($request->isMethod('post')){

        $packages= PackagesModel::where('name', 'LIKE', "%$request->slug%")
                   ->orWhere('description', 'LIKE', "%$request->slug%")
                   ->orWhere('category', 'LIKE', "%$request->slug%")
                   ->orWhere('destination', 'LIKE', "%$request->slug%")
                   ->orWhere('price', 'LIKE', "%$request->slug%")
                   ->orWhere('discount', 'LIKE', "%$request->slug%")
                   ->get();

                   return response()->json($packages);
       // return view('search',['packages'=>$packages]);
        }
        if($request->isMethod('get')){
           return redirect()->to('/');
        }
   }

    public function detail($id)
    {
        $packages= PackagesModel::find($id);
        $faq= FAQ::all();
        $offer= Offer::all();
        return view('detail',['packages'=>$packages,
       
        'faq'=>$faq,
        'offer'=>$offer,
       
    ]);
    }

    public function detail2($id)
    {
        $package = PackagesModel::findOrFail($id);
        $category = CategoryModel::all();
        $hotels = Hotel::all();
        // four only 
        $other = PackagesModel::all()->where('category',$package->category)->take(4);
       
        
        // Get existing days
        $days = PackageDays::where('package_id', $id)->get();
        $options = PackageOptions::where('package_id', $id)->get();
        
        // Format hotel options in the same way as viewdetails method
        $formattedOptions = [];
        foreach ($options as $option) {
            $hotel = Hotel::find($option->hotel_id);
            if ($hotel) {
                $formattedOptions[$option->option_index][] = [
                    'hotel_id' => $option->hotel_id,
                    'hotel_name' => $hotel->name,
                    'nights' => $option->checkout,
                    'option_index' => $option->option_index,
                    'address' => $hotel->address,
                ];
            }
        }
        
        return view('frontend.detail', [
            'package' => $package,
            'category' => $category,
            'hotels' => $hotels,
            'days' => $days,
            'options' => $formattedOptions,
            'other'=>$other,
        ]);
    }


    public function about(){
        return view('about');
    }

    public function kashmir(){
        $packages= PackagesModel::all()->where('category','Kashmir Tour Packages');
        $packages1= PackagesModel::all()->where('category','Ladakh Tour Packages');
        $packages2= PackagesModel::all()->where('category','Prilgimage Packages');
        $premium= PackagesModel::all()->where('category','Premium');
        $banner= TopSlider::all();
        $faq= FAQ::all();
        $offer= Offer::all();
        return view('kashmir',['packages'=>$packages,
        'packages1'=>$packages1,
        'packages2'=>$packages2,
        'premium'=>$premium,
        'faq'=>$faq,
        'offer'=>$offer,
        'banner'=>$banner
    ]);
    }
    public function ladakh(){
        $packages= PackagesModel::all()->where('category','Kashmir Tour Packages');
        $packages1= PackagesModel::all()->where('category','Ladakh Tour Packages');
        $packages2= PackagesModel::all()->where('category','Prilgimage Packages');
        $premium= PackagesModel::all()->where('category','Premium');
        $banner= TopSlider::all();
        $faq= FAQ::all();
        $offer= Offer::all();
        return view('ladakh',['packages'=>$packages,
        'packages1'=>$packages1,
        'packages2'=>$packages2,
        'premium'=>$premium,
        'faq'=>$faq,
        'offer'=>$offer,
        'banner'=>$banner
    ]);
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
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
    }
}
