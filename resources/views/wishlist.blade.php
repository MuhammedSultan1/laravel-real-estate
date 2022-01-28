@extends('layouts.default')

@section('content')

<section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-wrap w-full mb-20 flex-col items-center text-center">
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">Your Wishlist</h1>
      <p class="lg:w-1/2 w-full leading-relaxed text-gray-500">The properties that you save will be shown here.</p>
    </div>
    <div class="flex flex-wrap -m-4">
      @foreach($properties as $property)
       <div class="max-w-sm mx-auto overflow-hidden bg-white rounded-lg shadow-lg dark:bg-gray-800">
            <img class="object-cover object-center w-full h-56" src="{{ $property->image ?? 'images/img-not-available.jpeg' }}" alt="avatar">

            <div class="px-6 py-4">
                <h1 class="text-xl font-semibold text-gray-800 dark:text-white">${{ $property->price ?? 'No information available' }}</h1>

                <p class="py-2 text-gray-700 dark:text-gray-400">{{  Str::limit($property->description, 180) ?? 'No information available' }}</p>
                
                <div class="flex items-center mt-4 text-gray-700 dark:text-gray-200">
                    <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16.2721 10.2721C16.2721 12.4813 14.4813 14.2721 12.2721 14.2721C10.063 14.2721 8.27214 12.4813 8.27214 10.2721C8.27214 8.063 10.063 6.27214 12.2721 6.27214C14.4813 6.27214 16.2721 8.063 16.2721 10.2721ZM14.2721 10.2721C14.2721 11.3767 13.3767 12.2721 12.2721 12.2721C11.1676 12.2721 10.2721 11.3767 10.2721 10.2721C10.2721 9.16757 11.1676 8.27214 12.2721 8.27214C13.3767 8.27214 14.2721 9.16757 14.2721 10.2721Z"/><path fill-rule="evenodd" clip-rule="evenodd" d="M5.79417 16.5183C2.19424 13.0909 2.05438 7.3941 5.48178 3.79418C8.90918 0.194258 14.6059 0.0543983 18.2059 3.48179C21.8058 6.90919 21.9457 12.606 18.5183 16.2059L12.3124 22.7241L5.79417 16.5183ZM17.0698 14.8268L12.243 19.8965L7.17324 15.0698C4.3733 12.404 4.26452 7.9732 6.93028 5.17326C9.59603 2.37332 14.0268 2.26454 16.8268 4.93029C19.6267 7.59604 19.7355 12.0269 17.0698 14.8268Z"/>
                    </svg>

                    <h1 class="px-2 text-sm">{{ $property->address ?? 'Address not available'}}</h1>
                </div>

                <div class="flex items-center mt-4 text-gray-700 dark:text-gray-200">
                        <img src="https://img.icons8.com/external-kiranshastry-lineal-kiranshastry/32/000000/external-bathtub-hygiene-kiranshastry-lineal-kiranshastry-2.png"/>
                    <h1 class="px-2 text-sm">Baths: {{ $property->baths ?? 'No info available' }}</h1>
                </div>

                <div class="flex items-center mt-4 text-gray-700 dark:text-gray-200">
                        <img src="https://img.icons8.com/ios/32/000000/empty-bed.png"/>
                    <h1 class="px-2 text-sm">Beds: {{ $property->beds ?? 'No info available' }}</h1>
                </div>
                <div class="my-4">
                    <a href="/remove_from_wishlist/{{ $property->id }}">
                      <button type="button" class="px-8 py-3 font-semibold text-gray-50 rounded-full bg-purple-600 hover:bg-purple-800">Remove from wishlist</button>
                    </a>
                </div>
            </div>
        </div>      
        @endforeach
    </div>
    <button class="flex mx-auto mt-16 text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Button</button>
  </div>
</section>
@endsection
    