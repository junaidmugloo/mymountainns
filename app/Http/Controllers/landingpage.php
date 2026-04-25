<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use App\Models\CategoryModel;
use App\Models\Gallery;
use App\Models\TopSlider;
use App\Models\FAQ;
use App\Models\Hotel;
use App\Models\MySEO;
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
        // Consolidate all homepage data into a single cache record for better performance
        $homepageData = Cache::remember('homepage_data_v1', 3600, function () {
            return [
                'packages' => PackagesModel::where('category', 'Kashmir Tour Packages')->latest('id')->take(10)->get(),
                'packages1' => PackagesModel::where('category', 'Ladakh Tour Packages')->latest('id')->take(10)->get(),
                'packages2' => PackagesModel::where('category', 'Prilgimage Packages')->latest('id')->take(10)->get(),
                'honeymoon' => PackagesModel::where('category', 'Honeymoon Special')->latest('id')->take(10)->get(),
                'premium' => PackagesModel::where('category', 'Premium')->latest('id')->take(10)->get(),
                'banner' => TopSlider::latest('id')->take(5)->get(),
                'faq' => FAQ::latest('id')->take(10)->get(),
                'offer' => Offer::latest('id')->take(5)->get(),
                'tagline' => CategoryModel::where('name', 'tagline')->first(),
                'images' => Gallery::latest('id')->take(20)->get(),
                'blogs' => Blogs::latest('id')->take(6)->get(),
                'category' => CategoryModel::where('name', '!=', 'tagline')->get(),
            ];
        });

        $seo = Cache::remember('seo_home', 3600, function () {
            return MySEO::where('og_image', 'home')->first();
        });

        return view('frontend.index', array_merge($homepageData, ['seo' => $seo]));
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
        $seo=MySEO::where('og_image','about-us')->first();
        return view('about',compact('seo'));
    }
    public function contact(){  

    $seo=MySEO::where('og_image','contact-us')->first();
    return view('location',compact('seo'));

    }

    public function kashmir(){
        $packages= PackagesModel::all()->where('category','Kashmir Tour Packages');
        $packages1= PackagesModel::all()->where('category','Ladakh Tour Packages');
        $packages2= PackagesModel::all()->where('category','Prilgimage Packages');
        $premium= PackagesModel::all()->where('category','Premium');
        $banner= TopSlider::all();
        $faq= FAQ::all();
        $offer= Offer::all();
        $seo=MySEO::where('og_image','kashmir')->first();
        return view('kashmir',['packages'=>$packages,
        'packages1'=>$packages1,
        'packages2'=>$packages2,
        'premium'=>$premium,
        'faq'=>$faq,
        'offer'=>$offer,
        'banner'=>$banner,
        'seo'=>$seo
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
        $seo=MySEO::where('og_image','ladakh')->first();
        return view('ladakh',['packages'=>$packages,
        'packages1'=>$packages1,
        'packages2'=>$packages2,
        'premium'=>$premium,
        'faq'=>$faq,
        'offer'=>$offer,
        'banner'=>$banner,
        'seo'=>$seo
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
