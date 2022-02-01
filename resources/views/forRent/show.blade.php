@extends('layouts.default')
@section('content')
<section class="body-font my-24">
    <div class="grid grid-row-2 mx-0">
            <div class="sm:grid-cols-1 lg:grid-cols-2 flex justify-center items-center">
                <div id="propertyMap"></div>
            </div>
    </div>
</section>
<section class="text-gray-600 body-font">
   <div class="flex flex-col mb-10 lg:items-start items-center px-24">
     <form action="/add_to_wishlist" method="POST">
       @csrf
       <input type="hidden" name="property_id" value="{{ $property['property_id'] ?? 'No Info' }}">
       <input type="hidden" name="image" value="{{ $property['photos']['0']['href'] ?? asset('public/images/img-not-available.jpeg') }}">
       <input type="hidden" name="price" value="{{ $property['price'] ?? 'No Info' }}">
       <input type="hidden" name="description" value="{{ $property['description'] ?? 'No Info' }}">
       <input type="hidden" name="address" value="{{ $property['address']['line'] ?? 'No Info' }}{{ $property['address']['city'] ?? 'No Info' }}{{ $property['address']['state_code'] ?? 'No Info' }}{{ $property['address']['postal_code'] ?? 'No Info' }}">
       <input type="hidden" name="baths" value="{{ $property['baths'] ?? 'No Info' }}">
       <input type="hidden" name="beds" value="{{ $property['beds'] ?? 'No Info' }}">
       <input type="hidden" name="sqft" value="{{ $property['building_size']['size'] ?? 'No Info' }}">
       <button class="px-8 py-3 ml-12 font-semibold text-gray-50 rounded-full bg-purple-700 hover:bg-purple-800">Add to wishlist</button>
     </form>
        <div class="flex-grow">
            <h1 class="text-gray-900 text-lg title-font font-medium my-6 ml-12">
            {{ $property['address']['line'] }}, {{ $property['address']['city'] }}, {{ $property['address']['state'] }}, {{ $property['address']['postal_code'] }}
            </h1>
          <h2 class="text-gray-900 text-lg title-font font-medium mb-3 ml-12">Overview</h2>
          <p class="leading-relaxed text-base ml-12">{{ $property['description'] ?? '' }}</p>
        </div>
      </div>
      <div class="flex flex-col mb-10 lg:items-start items-center">
        <div class="flex-grow">
          <h2 class="text-gray-900 text-lg title-font font-medium mb-3 ml-72">Features</h2>
           <div class="container mx-auto grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 pt-6 gap-8 ml-72">
                    <div class="rounded border-gray-300 h-24">
                        <div class="flex space-x-2 sm:space-x-4">
                        <div class="space-y-2">
                            <img src="https://img.icons8.com/ios/50/000000/bed.png"/>
                            <p class="text-lg font-medium leading-snug">Beds</p>
                            <p class="leading-snug">{{ $property['beds'] ?? 'No data available' }}</p>
                        </div>
                    </div>
                    </div>
                    <div class="rounded border-gray-300 h-24">
                        <div class="flex space-x-2 sm:space-x-4">
                        <div class="space-y-2">
                            <img src="https://img.icons8.com/external-flatart-icons-outline-flatarticons/64/000000/external-bathroom-hygiene-routine-flatart-icons-outline-flatarticons-1.png"/>
                            <p class="text-lg font-medium leading-snug">Baths</p>
                            <p class="leading-snug">{{ $property['baths_full'] ?? 'No data available' }}</p>
                        </div>
                    </div>
                    </div>
                    <div class="rounded border-gray-300 h-24">
                        <div class="flex space-x-2 sm:space-x-4">
                        <div class="space-y-2">
                            <img src="https://img.icons8.com/ios/50/000000/price-tag-euro.png"/>
                            <p class="text-lg font-medium leading-snug">Price</p>
                            <p class="leading-snug">${{ $property['price'] ?? 'No data available' }}</p>
                        </div>
                    </div>
                    </div>
                     <div class="rounded border-gray-300 h-24">
                        <div class="flex space-x-2 sm:space-x-4">
                        <div class="space-y-2">
                            <img src="https://img.icons8.com/external-justicon-lineal-justicon/64/000000/external-ruler-construction-justicon-lineal-justicon.png"/>
                            <p class="text-lg font-medium leading-snug">Square Feet</p>
                            <p class="leading-snug">{{ $property['building_size']['size'] ?? 'No data available'}}</p>
                        </div>
                    </div>
                    </div>
                    <div class="rounded border-gray-300 h-24">
                        <div class="flex space-x-2 sm:space-x-4">
                        <div class="space-y-2">
                            <img src="https://img.icons8.com/pastel-glyph/64/000000/clock--v1.png"/>
                            <p class="text-lg font-medium leading-snug">Year Built</p>
                            <p class="leading-snug">{{ $property['year_built'] ?? 'No info' }}</p>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
</section>
{{-- Photos section begins--}}


<section class="text-gray-600 body-font mb-8">
  <div class="container px-5 py-24 mx-auto">
    <h2 class="uppercase tracking-wider text-gray-600 text-lg font-semibold mb-8 mr-2">Property Photos</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-8 flex flex-wrap -m-4">
        @foreach ($property['photos'] as $photo)
        <div class="relative bg-red-500 pb-2/3 rounded">
        <a class="block relative h-48 rounded overflow-hidden">
            <img alt="ecommerce" class="absolute h-full w-full object-cover" src="{{ $photo['href'] ?? asset('public/images/img-not-available.jpeg') }}">
        </a>
      </div>
       @endforeach
    </div>
  </div>
</section>

{{-- Photos section ends--}}

{{-- Similar homes section begins --}}
          
<section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-wrap w-full mb-8 ml-6">
      <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
        <h1 class="sm:text-3xl text-lg mb-2 text-gray-900">Similar Properties</h4>
      </div>
    </div>
    <div class="flex flex-wrap grid grid-cols-1 sm:grid-cols-1 md:grid-cols-4 lg:grid-cols-4 xl:grid-cols-5">
        @foreach ($similarProperties as $similarProperty)
        <a href="{{ route('forSale.show', $similarProperty['property_id']) }}">
        <div class="bg-white p-6 rounded-lg">
          <img class="h-40 rounded w-full object-cover object-center mb-6" src="{{ $similarProperty['primary_photo']['href'] ?? asset('public/images/img-not-available.jpeg') }}" alt="property image">
          <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">{{ $similarProperty['location']['address']['line'] }}, {{ $similarProperty['location']['address']['city'] }}, {{ $similarProperty['location']['address']['state_code'] }}, {{ $similarProperty['location']['address']['postal_code'] }}</h3>
          <h2 class="text-lg text-gray-900 font-medium title-font mb-4">${{ $similarProperty['list_price'] ?? 'Price not available' }}</h2>
          <p class="leading-relaxed text-base">Beds {{ $similarProperty['description']['beds'] }}</p>
          <p class="leading-relaxed text-base">Baths {{ $similarProperty['description']['baths'] }} </p>
          <p class="leading-relaxed text-base">Sqft {{ $similarProperty['description']['sqft'] }}</p>
        </div>
        </a>
        @endforeach
    </div>
  </div>
</section>
        {{-- Similar homes section ends --}}
               
            
@push('custom-scripts')
  <link href='https://unpkg.com/maplibre-gl@1.15.2/dist/maplibre-gl.css' rel='stylesheet' />
  <script src='https://unpkg.com/maplibre-gl@1.15.2/dist/maplibre-gl.js'></script>
  <style>
    #propertyMap {
      min-height: 500px;
      height: 20vh;
      width: 33vw;
    }
@media (min-width: 320px) { 
    #propertyMap {
      width: 100vw;
    }  

@media (min-width: 768px) { 
    #propertyMap {
      width: 100vw;
    }  
 }
    
  </style>
@endpush
 <script>
    var coordinates ={!! json_encode($combined->toArray()) !!};
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

  </script>

@endsection