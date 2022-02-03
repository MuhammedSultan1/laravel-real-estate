<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Property;
use App\Models\Wishlist;
use Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;




class ListingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //get adminProperty details
        $adminProperties = Property::all();

        
        $state_code = $request->state_code;
        
        $city = $request->city;   

        $postal = $request->postal;

        $forSale = Http::withHeaders([
        'x-rapidapi-host' => 'realty-in-us.p.rapidapi.com',
        'x-rapidapi-key' => env('RAPID_API_KEY'),
        ])->get('https://realty-in-us.p.rapidapi.com/properties/list-for-sale', [
            'state_code' => $state_code,
	        'city' => $city,
            'postal_code' => $postal,
            'offset' => '0',
            'limit' => '52',
            'sort' => 'relevance'
        ])->json()['listings'];

        //below we get all the coordinates and property info that is needed from the forSale API call
     
        //collect number of sqft
        $sqftCollection = collect($forSale);

        $pluckedSqft = $sqftCollection->pluck('sqft');

        $pluckedSqft->all();

        //collect number of baths
        $bathsCollection = collect($forSale);

        $pluckedBaths = $bathsCollection->pluck('baths');

        $pluckedBaths->all();

        //collect number of beds
        $bedCollection = collect($forSale);

        $pluckedBeds = $bedCollection->pluck('beds');

        $pluckedBeds->all();

        //collect all prices
        $priceCollection = collect($forSale);

        $pluckedPrices = $priceCollection->pluck('price');

        $pluckedPrices->all();

        //collect all longitude
          $LonCollection = collect($forSale);

          $pluckedLon = $LonCollection->pluck('lon');

          $pluckedLon->all();
        //collect all latitude
          $LatCollection = collect($forSale);

          $pluckedLat = $LatCollection->pluck('lat');

          $pluckedLat->all();
        //combine latitude and longitude and all the other information
          $collection = collect(['lon', 'lat', 'price', 'beds', 'baths', 'sqft']);

          $combined = $collection->combine([$pluckedLon, $pluckedLat, $pluckedPrices, $pluckedBeds, $pluckedBaths, $pluckedSqft]);



        //Rental home code below

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
        $rentalSqftCollection = collect($forRent);

        $pluckedRentalSqft = $rentalSqftCollection->pluck('sqft');

        $pluckedRentalSqft->all();

        //collect number of baths
        $rentalBathsCollection = collect($forRent);

        $pluckedRentalBaths = $rentalBathsCollection->pluck('baths');

        $pluckedRentalBaths->all();

        //collect number of beds
        $rentalBedCollection = collect($forRent);

        $pluckedRentalBeds = $rentalBedCollection->pluck('beds');

        $pluckedRentalBeds->all();

        //collect all prices
        $rentalPriceCollection = collect($forRent);

        $pluckedRentalPrices = $rentalPriceCollection->pluck('price');

        $pluckedRentalPrices->all();

        //collect all longitude
          $rentalLonCollection = collect($forRent);

          $pluckedRentalLon = $rentalLonCollection->pluck('lon');

          $pluckedRentalLon->all();
        //collect all latitude
          $rentalLatCollection = collect($forRent);

          $pluckedRentalLat = $rentalLatCollection->pluck('lat');

          $pluckedRentalLat->all();
        //combine latitude and longitude and all the other information
          $rentalCollection = collect(['lon', 'lat', 'price', 'beds', 'baths', 'sqft']);

          $combinedRental = $rentalCollection->combine([$pluckedRentalLon, $pluckedRentalLat, $pluckedRentalPrices, $pluckedRentalBeds, $pluckedRentalBaths, $pluckedRentalSqft]);

          $combinedRental->all();

          $jawgToken = env('JAWG_KEY');
        
        return view('homes.homes',[
            'adminProperties' => $adminProperties,
            'postal' => $postal,
            'forSale' => $forSale,
            'pluckedLon' => $pluckedLon,
            'pluckedLat' => $pluckedLat,
            'combined' => $combined,
            'combinedRental' => $combinedRental,
            'forRent' => $forRent,
            'jawgToken' => $jawgToken,
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
         //get adminProperty details
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

         $jawgToken = env('JAWG_KEY');
        
        
        return view('homes.show',[
            'property' => $property,
            'combined' => $combined,
            'adminProperties' => $adminProperties,
            'jawgToken' => $jawgToken,
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