<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Property;

class adminPropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Get everything form the Property Model
        $adminProperties = Property::all();
        dump($adminProperties);


         return view('adminProperties.adminProperty',[
             'adminProperties' => $adminProperties,
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
        // $adminProperties = Property::all();

        // $address = $adminProperties['address'];

        //  //get latitude and longitude
        // $lon = $adminProperties['lon'];
        // $lat = $adminProperties['lat'];
          
        //  //combine latitude and longitude
        // $collection = collect(['lon', 'lat']);

        // $combined = $collection->combine([$lon, $lat]);

        // $combined->all();
        

        // return view('adminProperties.show',[
        //     'adminProperty' => $adminProperty,
        //     'combined' => $combined,
        // ]);
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



 /* <script>
    var coordinates ={!! json_encode($combined ?? ''->toArray()) !!};
    console.log(coordinates);
  
const accessToken = "L4CAeBg0RDqXjqnZCEiNwJHsPbB8lyCt5EgxPDYHrJsymhFb9m7gQuW5H4dhJlCP";
const map = new maplibregl.Map({
      container: "propertyMap",
      style: `https://api.jawg.io/styles/jawg-terrain.json?access-token=${accessToken}`,
      zoom: 11,
      center: [coordinates.lon, coordinates.lat],
  }).addControl(new maplibregl.NavigationControl(), "top-right");
  // This plugin is used for right to left languages
  maplibregl.setRTLTextPlugin(
      "https://unpkg.com/@mapbox/mapbox-gl-rtl-text@0.2.3/mapbox-gl-rtl-text.min.js"
  );

    new maplibregl.Marker().setLngLat([coordinates.lon, coordinates.lat]).addTo(map);

  </script> */