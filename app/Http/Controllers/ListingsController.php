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
    public function forSale(Request $request)
    {
        //get adminProperty details
        $adminProperties = Property::all();

        $postal = $request->postal;

        $forSale = Http::withHeaders([
        'x-rapidapi-host' => 'realty-in-us.p.rapidapi.com',
        'x-rapidapi-key' => env('RAPID_API_KEY'),
        ])->get('https://realty-in-us.p.rapidapi.com/properties/list-for-sale', [
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

          $combined->all();
        
        return view('forSale.forSale',[
            'adminProperties' => $adminProperties,
            'postal' => $postal,
            'forSale' => $forSale,
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
        //  $details = Property::where('slug', $slug)->firstOrFail();
        //  $adminProperties = Property::all();

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
            'limit' => '20',
	        'prop_status' => 'for_sale'
        ])->json()['results']['similar_homes']['properties'];

        
        return view('forSale.show',[
            'property' => $property,
            'combined' => $combined,
            'similarProperties' => $similarProperties,
            //'adminProperties' => $adminProperties,
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
        //$userId = Session::get('user')['id'];
        
        //get everything from the cart
         $properties = DB::table('wishlists')
         ->select('wishlists.*')
         ->get();


        //for every property_id in the user's database, make an api call which takes the property_ids and places them in the api call
        //and gets the products details
        // foreach($properties as $property):
        //     $propertyDetails = Http::withHeaders([
        //     'x-rapidapi-host' => 'realty-in-us.p.rapidapi.com',
        //     'x-rapidapi-key' => env('RAPID_API_KEY'),
        //     ])->get('https://realty-in-us.p.rapidapi.com/properties/v2/detail', [
        //         'property_id' => $property_id,
        //     ])->json()['properties']['0'];
        // endforeach;

        //$propertyDescription = Str::limit($propertyDetails['description'], 180);
        
         return view('wishlist',
        [
        'properties' => $properties,
        //'property' => $property,
        //'propertyDescription' => $propertyDescription,
        ]);
    }

    //  /**
    //  * Display the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function similarProperties($id)
    // {


    //     return view('show',[

    //     ]);
    // }

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