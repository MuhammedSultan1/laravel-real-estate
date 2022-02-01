@extends('layouts.default')

@section('content')

<section class="text-gray-600 body-font">
           <div class="container mx-auto flex flex-col lg:w-4/6 relative flex flex-wrap rounded shadow-md rounded-lg w-full h-full overflow-hidden">
            <div id="map"></div>
          </div>
</section>
<section class="dark:bg-coolGray-800 dark:text-coolGray-100">
  <p class="text-2xl font-normal leading-5 ml-20 mt-8 text-gray-900">Properties listed by the admin</p>
	<div class="container flex flex-col-reverse mx-auto lg:flex-row">
    <div class="container mx-auto grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4 pt-6 gap-8">
             @include('layouts.includes.adminListings')
          </div>
	    </div>
</section>
<section class="dark:bg-coolGray-800 dark:text-coolGray-100">
  <p class="text-2xl font-normal leading-5 ml-20 mt-8 text-gray-900">Properties that are for sale</p>
	<div class="container flex flex-col-reverse mx-auto lg:flex-row">
    <div class="container mx-auto grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4 pt-6 gap-8">
     @include('layouts.includes.forSaleProperties')
    </div>
	</div>
</section>
<section class="dark:bg-coolGray-800 dark:text-coolGray-100">
  <p class="text-2xl font-normal leading-5 ml-20 mt-8 text-gray-900">Properties that are for rent</p>
	<div class="container flex flex-col-reverse mx-auto lg:flex-row">
    <div class="container mx-auto grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4 pt-6 gap-8">
     @include('layouts.includes.forRentProperties')
    </div>
	</div>
</section>


 <script type="text/javascript">

  var propertyInfo ={!! json_encode($combined->toArray()) !!};
  console.log(propertyInfo); 

  const accessToken = "L4CAeBg0RDqXjqnZCEiNwJHsPbB8lyCt5EgxPDYHrJsymhFb9m7gQuW5H4dhJlCP";
  const map = new maplibregl.Map({
      container: "map",
      style: `https://api.jawg.io/styles/jawg-terrain.json?access-token=${accessToken}`,
      zoom: 10,
      center: [propertyInfo.lon[1], propertyInfo.lat[1]],
  }).addControl(new maplibregl.NavigationControl(), "top-right");
  // This plugin is used for right to left languages
  maplibregl.setRTLTextPlugin(
      "https://unpkg.com/@mapbox/mapbox-gl-rtl-text@0.2.3/mapbox-gl-rtl-text.min.js"
  );

  // This add a marker with the default icon
  //for every longitude key-value pair, display a marker
   for(var i = 0; i < propertyInfo.lon.length; i++){
      new maplibregl.Marker().setLngLat([propertyInfo.lon[i], propertyInfo.lat[i]]).addTo(map);
      let msg = 'Price: '+ propertyInfo.price[i] + ' Beds: ' + propertyInfo.beds[i] + ' Baths: ' + propertyInfo.baths[i] + ' Sqft: ' + propertyInfo.sqft[i];

    // Adding a popup
    // Popup definition before binding it to a marker
    const markerPopup = new maplibregl.Popup({
        closeOnClick: true
      })
      .setHTML(msg);
    // Connect the popup to a new marker
    new maplibregl.Marker()
      .setLngLat([propertyInfo.lon[i], propertyInfo.lat[i]])
      .setPopup(markerPopup)
      .addTo(map);
    }

    </script> 
              
@endsection

