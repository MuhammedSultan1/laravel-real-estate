<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Property;



class RentalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function forRent()
    {
        $forRent = Http::withHeaders([
        'x-rapidapi-host' => 'realty-in-us.p.rapidapi.com',
        'x-rapidapi-key' => env('RAPID_API_KEY'),
        ])->get('https://realty-in-us.p.rapidapi.com/properties/list-for-rent', [
            'postal_code' => '32244',
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
        ]);
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