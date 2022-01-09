@extends('layouts.default')
@section('content')
<section class="body-font my-24">
    <div class="grid grid-row-2 mx-0">
            <div class="sm:grid-cols-1 lg:grid-cols-2 object-cover object-center flex justify-center items-center">
                <img alt="Picture of the property" src="{{ $property['photos']['0']['href'] ?? asset('public/images/img-not-available.jpeg') }}">
            </div>
            <div class="sm:grid-cols-1 lg:grid-cols-2 flex justify-center items-center">
                <div id="propertyMap"></div>
            </div>
    </div>
</section>
<section class="text-gray-600 body-font">
   <div class="flex flex-col mb-10 lg:items-start items-center px-24">
        <div class="flex-grow">
            <h1 class="text-gray-900 text-lg title-font font-medium mb-3 ml-12">
            {{ $property['address']['line'] }}, {{ $property['address']['city'] }}, {{ $property['address']['state'] }}, {{ $property['address']['postal_code'] }}
            </h1>
          <h2 class="text-gray-900 text-lg title-font font-medium mb-3 ml-12">Overview</h2>
          <p class="leading-relaxed text-base ml-12">{{ $property['description'] ?? '' }}</p>
        </div>
      </div>
      <div class="flex flex-col mb-10 lg:items-start items-center">
        <div class="flex-grow">
          <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Features</h2>
           <div class="container mx-auto grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 pt-6 gap-8">
                    <div class="rounded border-gray-300 h-24">
                        <div class="flex space-x-2 sm:space-x-4">
                        <div class="space-y-2">
                            <p class="text-lg font-medium leading-snug">Beds</p>
                            <p class="leading-snug">{{ $property['beds'] ?? '' }}</p>
                        </div>
                    </div>
                    </div>
                    <div class="rounded border-gray-300 h-24">
                        <div class="flex space-x-2 sm:space-x-4">
                        <div class="space-y-2">
                            <p class="text-lg font-medium leading-snug">Baths</p>
                            <p class="leading-snug">{{ $property['baths_full'] ?? '' }}</p>
                        </div>
                    </div>
                    </div>
                    <div class="rounded border-gray-300 h-24">
                        <div class="flex space-x-2 sm:space-x-4">
                        <div class="space-y-2">
                            <p class="text-lg font-medium leading-snug">Price</p>
                            <p class="leading-snug">${{ $property['price'] ?? '' }}</p>
                        </div>
                    </div>
                    </div>
                    <div class="rounded border-gray-300 h-24">
                        <div class="flex space-x-2 sm:space-x-4">
                        <div class="space-y-2">
                            <p class="text-lg font-medium leading-snug">Year Built</p>
                            <p class="leading-snug">{{ $property['year_built'] ?? 'No info' }}</p>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<section class="">
    <div class="container mx-auto px-4 pt-16">
        <div class="Photos">
            <h2 class="uppercase tracking-wider text-lg font-semibold">Photos</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-8">
                    @foreach ($property['photos'] as $photo)
                        <div class="mt-8">
                            <img src="{{ $photo['href'] ?? asset('public/images/img-not-available.jpeg') }}" alt="" class="hover:opacity-75 object-none h-64 w-full rounded transition ease-in-out duration-150">
                        </div>
                    @endforeach
                </div>
        </div>
</div>
</section>
               
            
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