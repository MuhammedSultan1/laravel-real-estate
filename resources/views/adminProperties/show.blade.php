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
  <div class="container mx-auto flex flex-col px-5 py-24 justify-center items-center">
    <img class="lg:w-2/6 md:w-3/6 w-5/6 mb-10 object-cover object-center rounded" alt="hero" src="{{ $details['gallery'] }}">
  </div>
</section>
  <form action="/add_to_wishlist" method="POST" class="ml-24">
       @csrf
       <input type="hidden" name="property_id" value="{{ $details['id'] ?? 'No Info' }}">
       <input type="hidden" name="image" value="{{ $details['gallery'] ?? asset('public/images/img-not-available.jpeg') }}">
       <input type="hidden" name="price" value="{{ $details['price'] ?? 'No Info' }}">
       <input type="hidden" name="description" value="{{ $details['details'] ?? 'No Info' }}">
       <input type="hidden" name="address" value="{{ $details['address'] ?? 'No Info' }}">
       <input type="hidden" name="baths" value="{{ $details['baths'] ?? 'No Info' }}">
       <input type="hidden" name="beds" value="{{ $details['beds'] ?? 'No Info' }}">
       <input type="hidden" name="sqft" value="{{ $details['sqft'] ?? 'No Info' }}">
       <button class="px-8 py-3 ml-12 font-semibold text-gray-50 rounded-full bg-purple-700 hover:bg-purple-800">Add to wishlist</button>
     </form>
<section class="text-gray-600 body-font">
   <div class="flex flex-col mb-10 lg:items-start items-center px-24">
        <div class="flex-grow">
            <h1 class="text-gray-900 text-2xl title-font font-medium my-6 ml-12">
            {{ $details['address'] }}
            </h1>
          <h2 class="text-gray-900 text-lg title-font font-medium mb-3 ml-12 mt-3">Overview</h2>
          <p class="leading-relaxed text-base ml-12">{!! $details['details'] !!}</p>
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
                            <p class="leading-snug">{{ $details['beds'] }}</p>
                        </div>
                    </div>
                    </div>
                    <div class="rounded border-gray-300 h-24">
                        <div class="flex space-x-2 sm:space-x-4">
                        <div class="space-y-2">
                            <img src="https://img.icons8.com/external-flatart-icons-outline-flatarticons/64/000000/external-bathroom-hygiene-routine-flatart-icons-outline-flatarticons-1.png"/>
                            <p class="text-lg font-medium leading-snug">Baths</p>
                            <p class="leading-snug">{{ $details['baths']}}</p>
                        </div>
                    </div>
                    </div>
                    <div class="rounded border-gray-300 h-24">
                        <div class="flex space-x-2 sm:space-x-4">
                        <div class="space-y-2">
                            <img src="https://img.icons8.com/ios/50/000000/price-tag-euro.png"/>
                            <p class="text-lg font-medium leading-snug">Price</p>
                            <p class="leading-snug">${{ $details['price'] }}</p>
                        </div>
                    </div>
                    </div>
                    <div class="rounded border-gray-300 h-24">
                        <div class="flex space-x-2 sm:space-x-4">
                        <div class="space-y-2">
                            <img src="https://img.icons8.com/external-justicon-lineal-justicon/64/000000/external-ruler-construction-justicon-lineal-justicon.png"/>
                            <p class="text-lg font-medium leading-snug">Square Feet</p>
                            <p class="leading-snug">{{ $details['sqft'] }}</p>
                        </div>
                    </div>
                    </div>
                    <div class="rounded border-gray-300 h-24">
                        <div class="flex space-x-2 sm:space-x-4">
                        <div class="space-y-2">
                            <img src="https://img.icons8.com/pastel-glyph/64/000000/clock--v1.png"/>
                            <p class="text-lg font-medium leading-snug">Year Built</p>
                            <p class="leading-snug">{{ $details['year'] }}</p>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
</section>
{{-- Similar homes section begins --}}
          
<section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-wrap w-full mb-20">
      <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">Similar Properties</h1>
      </div>
    </div>
    <div class="flex flex-wrap grid grid-cols-1 sm:grid-cols-1 md:grid-cols-4 lg:grid-cols-4 xl:grid-cols-5">
        @foreach ($adminProperties as $similarProperty)
        <a href="{{ route('adminProperty.show', $similarProperty['slug']) }}">
        <div class="bg-white p-6 rounded-lg">
          <img class="h-40 rounded w-full object-cover object-center mb-6" src="{{ $similarProperty['gallery'] ?? asset('public/images/img-not-available.jpeg') }}" alt="property image">
          <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">{{ $similarProperty['address'] }}</h3>
          <h2 class="text-lg text-gray-900 font-medium title-font mb-4">${{ $similarProperty['price'] ?? 'Price not available' }}</h2>
          <p class="leading-relaxed text-base">Beds {{ $similarProperty['beds'] }}</p>
          <p class="leading-relaxed text-base">Baths {{ $similarProperty['baths'] }} </p>
          <p class="leading-relaxed text-base">Sqft {{ $similarProperty['sqft'] }}</p>
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
    var coordinates ={!! json_encode($details->toArray()) !!};

  
const accessToken = '{{ env('JAWG_KEY') }}';
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