<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Property;
use App\Models\Wishlist;
use Session;
use Illuminate\Support\Facades\DB;




class RentalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function forRent(Request $request)
    {

         //get adminProperty details
        $adminProperties = Property::all();

        $state_code = $request->state_code;
        
        $city = $request->city;   

        $postal = $request->postal;

        $forRent = Http::withHeaders([
        'x-rapidapi-host' => 'realty-in-us.p.rapidapi.com',
        'x-rapidapi-key' => env('RAPID_API_KEY'),
        ])->get('https://realty-in-us.p.rapidapi.com/properties/list-for-rent', [
            'state_code' => $state_code,
	        'city' => $city,
            'postal_code' => $postal,
            'offset' => '0',
            'limit' => '52',
            'sort' => 'relevance'
        ])->json()['listings'];

        //below we get all the coordinates and property info that is needed from the forRent API call
     
        //collect number of sqft
        $sqftCollection = collect($forRent);

        $pluckedSqft = $sqftCollection->pluck('sqft');

        $pluckedSqft->all();

        //collect number of baths
        $bathsCollection = collect($forRent);

        $pluckedBaths = $bathsCollection->pluck('baths');

        $pluckedBaths->all();

        //collect number of beds
        $bedCollection = collect($forRent);

        $pluckedBeds = $bedCollection->pluck('beds');

        $pluckedBeds->all();

        //collect all prices
        $priceCollection = collect($forRent);

        $pluckedPrices = $priceCollection->pluck('price');

        $pluckedPrices->all();

        //collect all longitude
          $LonCollection = collect($forRent);

          $pluckedLon = $LonCollection->pluck('lon');

          $pluckedLon->all();
        //collect all latitude
          $LatCollection = collect($forRent);

          $pluckedLat = $LatCollection->pluck('lat');

          $pluckedLat->all();
        //combine latitude and longitude and all the other information
          $collection = collect(['lon', 'lat', 'price', 'beds', 'baths', 'sqft']);

          $combined = $collection->combine([$pluckedLon, $pluckedLat, $pluckedPrices, $pluckedBeds, $pluckedBaths, $pluckedSqft]);

          $combined->all();

          dump($combined);
        
        return view('forRent.forRent',[
            'adminProperties' => $adminProperties,
            'forRent' => $forRent,
            'pluckedLon' => $pluckedLon,
            'pluckedLat' => $pluckedLat,
            'combined' => $combined,
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
         $details = Property::where('slug', $slug)->firstOrFail();
         $adminProperties = Property::all();

        $property = Http::withHeaders([
        'x-rapidapi-host' => 'realty-in-us.p.rapidapi.com',
        'x-rapidapi-key' => env('RAPID_API_KEY'),
        ])->get('https://realty-in-us.p.rapidapi.com/properties/v2/detail', [
            'property_id' => $id
        ])->json()['properties']['0'];

        //get latitude and longitude
        $lon = $property['address']['lon'];
        $lat = $property['address']['lat'];
          
         //combine latitude and longitude
        $collection = collect(['lon', 'lat']);

        $combined = $collection->combine([$lon, $lat]);

        $combined->all();
        
        // make the api call for similar properties
        
        $similarProperties = Http::withHeaders([
        'x-rapidapi-host' => 'realty-in-us.p.rapidapi.com',
        'x-rapidapi-key' => env('RAPID_API_KEY'),
        ])->get('https://realty-in-us.p.rapidapi.com/properties/list-similarities', [
            'property_id' => $id,
            'limit' => '20'
        ])->json();

        dump($similarProperties);
        
        return view('forRent.show',[
            'property' => $property,
            'combined' => $combined,
            'similarProperties' => $similarProperties,
            'details' => $details,
            'adminProperties' => $adminProperties,
        ]);
    }


    function addToWishlist(Request $req){
        if($req->session()->has('user')){
            $wishlist = new Wishlist;
            $wishlist->user_id=$req->session()->get('user')['id'];
            $wishlist->property_id=$req->property_id;
            $wishlist->image=$req->image;
            $wishlist->price=$req->price;
            $wishlist->description=$req->description;
            $wishlist->address=$req->address;
            $wishlist->baths=$req->baths;
            $wishlist->beds=$req->beds;
            $wishlist->sqft=$req->sqft;
            $wishlist->save();
            return redirect('/');
        }
        else{
            return redirect('/login');
        }
    }

    static function wishlistItem(){
        $userId = Session::get('user')['id'];
        return Wishlist::where('user_id', $userId)->count();
    }

    function displayWishlist(){
        $userId = Session::get('user')['id'];
        //get everything from the cart
         $properties = DB::table('wishlists')
         ->where('wishlists.user_id', $userId)
         ->select('wishlists.*')
         ->get();
        
         return view('wishlist',
        [
        'userId' => $userId,
        'properties' => $properties,
        ]);
    }

    function removeFromWishlist(Request $req, $id){
        if($req->session()->has('user')){
            Wishlist::destroy($id);
            return redirect('/wishlist');
        };
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