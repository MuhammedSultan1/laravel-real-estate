<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class ListingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function forSale()
    {
        $forSale = Http::withHeaders([
        'x-rapidapi-host' => 'realty-in-us.p.rapidapi.com',
        'x-rapidapi-key' => env('RAPID_API_KEY'),
        ])->get('https://realty-in-us.p.rapidapi.com/properties/list-for-sale', [
            'postal_code' => '32244',
            'offset' => '0',
            'limit' => '40',
            'sort' => 'relevance'
        ])->json()['listings'];

        //get all the addresses from the forSale API call

          $LonCollection = collect($forSale);

          $pluckedLon = $LonCollection->pluck('lon');

          $pluckedLon->all();

          $LatCollection = collect($forSale);

          $pluckedLat = $LatCollection->pluck('lat');

          $pluckedLat->all();

          $collection = collect(['lon', 'lat']);

          $combined = $collection->combine([$pluckedLon, $pluckedLat]);

          $combined->all();
          

        // foreach ($variable as $key) {
            
        // }
        


        //$requestURL = Http::get('https://api.mapbox.com/geocoding/v5/mapbox.places/'.$address.'.json?access_token='.env('MAPBOX_KEY'));

        //turn addresses into coordinates
        //for every address, turn it into coordinates
        //take an address from the array and turn it into coordinates

        //   $getCoordinates = Http::withHeaders([
        //   'x-rapidapi-host' => 'eec19846-geocoder-us-census-bureau-v1.p.rapidapi.com',
        //   'x-rapidapi-key' => env('RAPID_API_KEY'),
        //   ])->get('https://eec19846-geocoder-us-census-bureau-v1.p.rapidapi.com/locations/onelineaddress', [
        //       'benchmark' => 'Public_AR_Current',
        //       'address' => $plucked,
        //       'format' => 'json'
        //   ])->json()['result']['addressMatches']['0']['coordinates'];

        dump($combined);

        
        return view('forSale',[
            'forSale' => $forSale,
            'pluckedLon' => $pluckedLon,
            'pluckedLat' => $pluckedLat,
            'combined' => $combined,
            //'getCoordinates' => $getCoordinates,
            //'requestURL' => $requestURL,
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