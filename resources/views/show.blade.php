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
{{-- Photos section begins--}}


<section class="text-gray-600 body-font mb-8">
  <div class="container px-5 py-24 mx-auto">
    <h2 class="uppercase tracking-wider text-gray-600 text-lg font-semibold mb-4">Property Photos</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-8 flex flex-wrap -m-4">
        @foreach ($property['photos'] as $photo)
        <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
        <a class="block relative h-48 rounded overflow-hidden">
          <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="{{ $photo['href'] ?? asset('public/images/img-not-available.jpeg') }}">
        </a>
      </div>
       @endforeach
    </div>
  </div>
</section>

{{-- Photos section ends--}}

{{-- Similar homes section begins --}}
          
        {{-- <section class="md:overflow-x-scroll">
            <div class="container p-5 py-12 mx-auto md:p-20 max-w-7xl">
                <div class="flex flex-wrap mx-auto md:flex-nowrap">
                    @foreach ($similarProperties as $similarProperty)
                    <a href="">
                    <div class="flex w-full">
                      <div class="relative flex flex-col items-start m-1 transition duration-300 ease-in-out delay-150 transform bg-white shadow-2xl rounded-xl md:w-80 md:hover:-translate-x-16 md:hover:-translate-y-8">
                        <img class="object-cover object-center w-full rounded-t-xl lg:h-48 md:h-36" src="{{ $similarProperty['primary_photo']['href'] ?? asset('public/images/img-not-available.jpeg') }}" alt="blog">
                        <div class="px-6 py-8">
                          <h4 class="mt-4 text-2xl font-semibold text-neutral-600">
                            <span class="">${{ $similarProperty['list_price'] ?? 'Price not available' }}
                          </span></h4>
                          <p class="mt-4 text-base font-normal text-gray-500 leading-relax"> {{ $similarProperty['location']['address']['line'] }}, {{ $similarProperty['location']['address']['city'] }}, {{ $similarProperty['location']['address']['state_code'] }}, {{ $similarProperty['location']['address']['postal_code'] }} </p>
                          <p class="mt-4 text-base font-normal text-gray-500 leading-relax">Beds {{ $similarProperty['description']['beds'] }} </p>
                          <p class="mt-4 text-base font-normal text-gray-500 leading-relax">Baths {{ $similarProperty['description']['baths'] }} </p>
                          <p class="mt-4 text-base font-normal text-gray-500 leading-relax">Sqft {{ $similarProperty['description']['sqft'] }} </p>
                        </div>
                      </div>
                    </div>
                </a>
                @endforeach
                </div>
            </div>
            </section> --}}
	{{-- <div class="container flex flex-col-reverse mx-auto lg:flex-row">
        <div class="container mx-auto grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4 pt-6 gap-8">
            @foreach ($similarProperties as $similarProperty)
            <a href="#" class="flex flex-col items-center bg-white rounded-lg border shadow-md md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                <img class="object-cover w-full h-96 rounded-t-lg md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="{{ $similarProperty['primary_photo']['href'] ?? asset('public/images/img-not-available.jpeg') }}" alt="">
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">${{ $similarProperty['list_price'] ?? 'Price not available' }}</h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $similarProperty['location']['address']['line'] }}, {{ $similarProperty['location']['address']['city'] }}, {{ $similarProperty['location']['address']['state_code'] }}, {{ $similarProperty['location']['address']['postal_code'] }}</p>
                        <p class="mt-4 text-base font-normal text-gray-500 leading-relax">Beds {{ $similarProperty['description']['beds'] }} </p>
                        <p class="mt-4 text-base font-normal text-gray-500 leading-relax">Baths {{ $similarProperty['description']['baths'] }} </p>
                        <p class="mt-4 text-base font-normal text-gray-500 leading-relax">Sqft {{ $similarProperty['description']['sqft'] }} </p>
                    </div>
            </a>
            @endforeach
        </div>
    </div> --}}

{{-- <div class="container flex flex-col-reverse mx-auto lg:flex-row">
        <div class="container mx-auto grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4 pt-6 gap-8">
            @foreach ($similarProperties as $similarProperty)
            <div class="max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="rounded-t-lg" src="{{ $similarProperty['primary_photo']['href'] ?? asset('public/images/img-not-available.jpeg') }}" alt="" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">${{ $similarProperty['list_price'] ?? 'Price not available' }}</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $similarProperty['location']['address']['line'] }}, {{ $similarProperty['location']['address']['city'] }}, {{ $similarProperty['location']['address']['state_code'] }}, {{ $similarProperty['location']['address']['postal_code'] }}</p>
                <p class="mt-4 text-base font-normal text-gray-500 leading-relax">Beds {{ $similarProperty['description']['beds'] }} </p>
                <p class="mt-4 text-base font-normal text-gray-500 leading-relax">Baths {{ $similarProperty['description']['baths'] }} </p>
                <p class="mt-4 text-base font-normal text-gray-500 leading-relax">Sqft {{ $similarProperty['description']['sqft'] }} </p>
                <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Read more
                    <svg class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </a>
            </div>
        </div>
        @endforeach
    </div>
</div> --}}

<section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-wrap w-full mb-20">
      <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">Similar Properties</h1>
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