@extends('layouts.default')
@section('content')
<section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto flex flex-wrap">
    <div class="lg:w-1/2 w-full mb-10 lg:mb-0 rounded-lg overflow-hidden">
      <img alt="feature" class="object-cover object-center h-96 w-96" src="{{ $property['photos']['0']['href'] ?? asset('public/images/img-not-available.jpeg') }}">
    </div>
    <div class="flex flex-col flex-wrap lg:py-6 -mb-10 lg:w-1/2 lg:pl-12 lg:text-left text-center">
      <div class="flex flex-col mb-10 lg:items-start items-center">
        <div class="flex-grow">
            
        </div>
      </div>
      <div class="flex flex-col mb-10 lg:items-start items-center">
        <div class="flex-grow">
          <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Overview</h2>
          <p class="leading-relaxed text-base">{{ $property['description'] ?? '' }}</p>
        </div>
      </div>
      <div class="flex flex-col mb-10 lg:items-start items-center">
        <div class="flex-grow">
          <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Features</h2>
			<div class="flex space-x-2 sm:space-x-4">
			    <img src="{{ asset('public/images/bed.jpeg') }}" alt="" srcset="" class="flex-shrink-0 w-6 h-6">
				<div class="space-y-2">
					<p class="text-lg font-medium leading-snug">Beds</p>
					<p class="leading-snug">{{ $property['beds'] ?? '' }}</p>
				</div>
			</div>
			<div class="flex space-x-2 sm:space-x-4">
				<img src="{{ asset('public/images/bath.jpeg') }}" alt="" srcset="" class="flex-shrink-0 w-6 h-6">
				<div class="space-y-2">
					<p class="text-lg font-medium leading-snug">Baths</p>
					<p class="leading-snug">{{ $property['baths_full'] ?? '' }}</p>
				</div>
			</div>
            <div class="flex space-x-2 sm:space-x-4">
				<img src="{{ asset('public/images/price-tag.jpeg') }}" alt="" srcset="" class="flex-shrink-0 w-6 h-6">
				<div class="space-y-2">
					<p class="text-lg font-medium leading-snug">Price</p>
					<p class="leading-snug">${{ $property['price'] ?? '' }}</p>
				</div>
			</div>
			<div class="flex space-x-2 sm:space-x-4">
				<img src="{{ asset('public/images/clock.jpeg') }}" alt="" srcset="" class="flex-shrink-0 w-6 h-6">
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
{{-- @push('custom-scripts')
  <link href='https://unpkg.com/maplibre-gl@1.15.2/dist/maplibre-gl.css' rel='stylesheet' />
  <script src='https://unpkg.com/maplibre-gl@1.15.2/dist/maplibre-gl.js'></script>
  <style>
    body {
      margin: 0;
      padding: 0;
    }
    #map {
      min-height: 500px;
      height: 20vh;
      width: 33vh;
    }
  </style>
@endpush --}}
 {{-- <script>
    var coordinates ={!! json_encode($combined->toArray()) !!};
    // Don't forget to replace <YOUR_ACCESS_TOKEN> by your real access token ! 
    const accessToken = 'L4CAeBg0RDqXjqnZCEiNwJHsPbB8lyCt5EgxPDYHrJsymhFb9m7gQuW5H4dhJlCP';
    const map = new maplibregl.Map({
      container: 'map',
      style: `https://api.jawg.io/styles/jawg-sunny.json?access-token=${accessToken}`,
      zoom: 2,
      center: [coordinates.lon, coordinates.lat]
    }).addControl(new maplibregl.NavigationControl(), 'top-right');
    // This plugin is used for right to left languages
    maplibregl.setRTLTextPlugin('https://unpkg.com/@mapbox/mapbox-gl-rtl-text@0.2.3/mapbox-gl-rtl-text.min.js');
  </script> --}}
@endsection