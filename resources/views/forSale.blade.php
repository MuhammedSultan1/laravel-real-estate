@extends('layouts.default')

@section('content')

        {{-- <section class="text-gray-600 body-font relative">
  <div class="container px-5 py-24 mx-auto flex sm:flex-nowrap flex-wrap">
    <div class="lg:w-2/3 md:w-1/2 bg-gray-300 rounded-lg overflow-hidden sm:mr-10 p-10 flex items-end justify-start relative">
      <iframe class="absolute inset-0" frameborder="0" title="map" marginheight="0" marginwidth="0" scrolling="no" src="https://maps.google.com/maps?width=100%&height=600&hl=en&q=%C4%B0zmir+(My%20Business%20Name)&ie=UTF8&t=&z=14&iwloc=B&output=embed" style="filter: grayscale(1) contrast(1.2) opacity(0.4);"></iframe>
      <div class="bg-white relative flex flex-wrap py-6 rounded shadow-md">
       <div id='map'></div>
      </div>
    </div>
<div class="container mx-auto grid sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-2 xl:grid-cols-2 pt-6 gap-8">
        <h3 class="uppercase tracking-wider text-gray-600 text-lg font-semibold">For Sale</h3>
          @foreach ($forSale as $saleProperty)
        <div class="max-w-sm mx-auto overflow-hidden bg-white rounded shadow-lg">
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
        </div>
          @endforeach
      </div>     
  </div>
</section> --}}
	{{-- <div class="lg:w-1/2 xl:w-3/5 dark:bg-coolGray-800">
			<div class="flex items-center justify-center p-4 md:p-8 lg:p-12">
				 <div class="lg:w-2/3 md:w-1/2 bg-gray-300 rounded-lg overflow-hidden sm:mr-10 p-10 flex items-end justify-start relative">
      <iframe class="absolute inset-0" frameborder="0" title="map" marginheight="0" marginwidth="0" scrolling="no" src="https://maps.google.com/maps?width=100%&height=600&hl=en&q=%C4%B0zmir+(My%20Business%20Name)&ie=UTF8&t=&z=14&iwloc=B&output=embed" style="filter: grayscale(1) contrast(1.2) opacity(0.4);"></iframe>
      <div class="bg-white relative flex flex-wrap py-6 rounded shadow-md">
       <div id='map'></div>
      </div>
    </div>
			</div>
		</div> --}}

<section class="text-gray-600 body-font">
           <div class="container mx-auto flex flex-col lg:w-4/6 relative flex flex-wrap rounded shadow-md rounded-lg w-full h-full overflow-hidden">
            <div id='map'></div>
          </div>
</section>
<section class="dark:bg-coolGray-800 dark:text-coolGray-100">
	<div class="container flex flex-col-reverse mx-auto lg:flex-row">
    <div class="container mx-auto grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4 pt-6 gap-8">
      @foreach ($forSale as $saleProperty)
        <div class="max-w-sm mx-auto overflow-hidden bg-white rounded shadow-lg">
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
        </div>
          @endforeach
    </div>
	</div>
</section>
<script>    
    let coordinates = {!! json_encode($coordinates ?? '',  JSON_HEX_TAG) !!};
    mapboxgl.accessToken =
    "pk.eyJ1IjoibXJzd2VldHMiLCJhIjoiY2t4Y3VqcjNqMWQyeTJ3cGZhMHN6N3F2dyJ9.qf4Ckg7Y8JtW9HzpGRiVOA";
const map = new mapboxgl.Map({
    container: "map", // container ID
    style: "mapbox://styles/mapbox/streets-v11", // style URL
    center: [-81.6557, 30.3322], // starting position [lng, lat]
    zoom: 12, // starting zoom
});
// Set options
const addMarker = () =>{
  let marker = new mapboxgl.Marker();
  marker.setLngLat([coordinates])
  marker.addTo(map)
}
map.on("load", addMarker);
    // .setLngLat([addresses])
    // .addTo(map);

</script>
              
@endsection

