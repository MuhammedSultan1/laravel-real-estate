@extends('layouts.default')

@section('content')

<section class="text-gray-600 body-font">
           <div class="container mx-auto flex flex-col lg:w-4/6 relative flex flex-wrap rounded shadow-md rounded-lg w-full h-full overflow-hidden">
            <div id="map"></div>
          </div>
</section>
<section class="dark:bg-coolGray-800 dark:text-coolGray-100">
	<div class="container flex flex-col-reverse mx-auto lg:flex-row">
    <div class="container mx-auto grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4 pt-6 gap-8">
      @foreach ($forRent as $saleProperty)
      <div class="max-w-sm mx-auto overflow-hidden bg-white rounded shadow-lg">
          <a href="{{ route('forRent.show', $saleProperty['property_id']) }}">
            <img class="object-cover object-center w-full h-56 rounded" src="{{ $saleProperty['photo'] ?? asset('public/images/img-not-available.jpeg') }}" alt="Property">
            <div class="px-6 py-4">
                <h1 class="text-xl font-semibold text-gray-800">{{ $saleProperty['price'] ?? ''}}</h1>
                <p class="py-2 text-gray-700">{{ $saleProperty['beds'] ?? ''}} beds, {{ $saleProperty['baths'] ?? ''}} baths, {{ $saleProperty['sqft'] ?? ''}}</p>
                <div class="flex items-center mt-4 text-gray-700">
                    <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16.2721 10.2721C16.2721 12.4813 14.4813 14.2721 12.2721 14.2721C10.063 14.2721 8.27214 12.4813 8.27214 10.2721C8.27214 8.063 10.063 6.27214 12.2721 6.27214C14.4813 6.27214 16.2721 8.063 16.2721 10.2721ZM14.2721 10.2721C14.2721 11.3767 13.3767 12.2721 12.2721 12.2721C11.1676 12.2721 10.2721 11.3767 10.2721 10.2721C10.2721 9.16757 11.1676 8.27214 12.2721 8.27214C13.3767 8.27214 14.2721 9.16757 14.2721 10.2721Z"/><path fill-rule="evenodd" clip-rule="evenodd" d="M5.79417 16.5183C2.19424 13.0909 2.05438 7.3941 5.48178 3.79418C8.90918 0.194258 14.6059 0.0543983 18.2059 3.48179C21.8058 6.90919 21.9457 12.606 18.5183 16.2059L12.3124 22.7241L5.79417 16.5183ZM17.0698 14.8268L12.243 19.8965L7.17324 15.0698C4.3733 12.404 4.26452 7.9732 6.93028 5.17326C9.59603 2.37332 14.0268 2.26454 16.8268 4.93029C19.6267 7.59604 19.7355 12.0269 17.0698 14.8268Z"/>
                    </svg>
                    <h1 class="px-2 text-sm">{{ $saleProperty['address'] ?? ''}}</h1>
                </div>
            </div>
          </a>
        </div>
          @endforeach
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
      zoom: 7,
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

