@extends('layouts.default')

@section('content')
{{-- TOP SECTION --}}
<div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
  <div class="max-w-xl sm:mx-auto lg:max-w-2xl">
    <div class="flex flex-col mb-16 sm:text-center sm:mb-0">
      <a href="/" class="mb-6 sm:mx-auto">
        <div class="flex items-center justify-center w-12 h-12 rounded-full bg-indigo-50">
          <svg class="w-10 h-10 text-purple-800" stroke="currentColor" viewBox="0 0 52 52">
            <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
          </svg>
        </div>
      </a>
      <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
        <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
          Let us help you find the perfect home.
        </h2>
        <p class="text-base text-gray-700 md:text-lg">
            Enter a zipcode or a city and state code in the field below and click search.
        </p>
        <p class="text-base text-gray-700 md:text-lg">
            We will take care of the rest.
        </p>
      </div>
        <livewire:home-page-search-bar>
    </div>
  </div>
</div>           
{{-- END OF TOP SECTION --}}
{{-- WHITE SPACE --}}

                <div class="container mx-auto grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 pt-6 gap-8">
                    <div class="rounded h-24"></div>
                    <div class="rounded h-24"></div>
                </div>
            
{{-- END OF WHITE SPACE --}}
{{-- WHY CHOOSE US SECTION BEGINS --}}
<div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
  <div class="flex flex-col lg:flex-row">
    <div class="max-w-xl pr-16 mx-auto mb-10">
      <h5 class="mb-6 text-3xl font-extrabold leading-none">
        Why should you choose Property Experts?
      </h5>
      <p class="mb-6 text-gray-900">
        We want to help you find the best home that we possibly can, while also making sure that you don't spend too much money on a home. Our website shows you the best listings so that you can find the right place to live.
      </p>
      <div class="flex items-center">
          <a href="/">
              <button
              type="submit"
              class="inline-flex items-center justify-center h-12 px-6 mr-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-purple-700  hover:bg-purple-700  focus:shadow-outline focus:outline-none"
              >
              Get started
            </button>
        </a>
        <a href="/about" aria-label="" class="inline-flex items-center font-semibold transition-colors duration-200 text-purple-700 text-purple-700 ">Learn more</a>
      </div>
    </div>
    <div class="grid gap-5 row-gap-5 sm:grid-cols-2">
      <div class="max-w-md">
        <div class="flex items-center justify-center w-16 h-16 mb-4 rounded-full bg-indigo-50">
          <svg class="w-12 h-12 text-purple-700" stroke="currentColor" viewBox="0 0 52 52">
            <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
          </svg>
        </div>
        <h6 class="mb-2 font-semibold leading-5">Our Strategy</h6>
        <p class="text-sm text-gray-700">
            We take the best possible listings that we can find, and we give them to you free of charge.
        </p>
      </div>
      <div class="max-w-md">
        <div class="flex items-center justify-center w-16 h-16 mb-4 rounded-full bg-indigo-50">
          <svg class="w-12 h-12 text-purple-700" stroke="currentColor" viewBox="0 0 52 52">
            <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
          </svg>
        </div>
        <h6 class="mb-2 font-semibold leading-5">Satisfaction</h6>
        <p class="text-sm text-gray-700">
            We won't disappoint you. Our team is ready to make sure that you are completely satisfied with your purchase.
        </p>
      </div>
      <div class="max-w-md">
        <div class="flex items-center justify-center w-16 h-16 mb-4 rounded-full bg-indigo-50">
          <svg class="w-12 h-12 text-purple-700" stroke="currentColor" viewBox="0 0 52 52">
            <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
          </svg>
        </div>
        <h6 class="mb-2 font-semibold leading-5">Award-Winning</h6>
        <p class="text-sm text-gray-700">
            We are one of the best real estate websites on the internet. We think that is proof that you should work with us!
        </p>
      </div>
      <div class="max-w-md">
        <div class="flex items-center justify-center w-16 h-16 mb-4 rounded-full bg-indigo-50">
          <svg class="w-12 h-12 text-purple-700" stroke="currentColor" viewBox="0 0 52 52">
            <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
          </svg>
        </div>
        <h6 class="mb-2 font-semibold leading-5">We're easy to work with.</h6>
        <p class="text-sm text-gray-700">
            We won't make you jump over hurdles in order to achieve your goal. We're very straightforward with our process.
        </p>
      </div>
    </div>
  </div>
</div>
{{-- WHY CHOOSE US SECTION ENDS --}}
{{-- STATISTICS SECTION BEGINS --}}
<div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
  <div class="grid gap-10 row-gap-8 lg:grid-cols-3">
    <div>
      <div class="flex">
        <h6 class="mr-2 text-4xl font-bold md:text-5xl text-purple-700">
          15
        </h6>
        <div class="flex items-center justify-center rounded-full bg-teal-400 w-7 h-7">
          <svg class="text-teal-900 w-7 h-7" stroke="currentColor" viewBox="0 0 52 52">
            <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
          </svg>
        </div>
      </div>
      <p class="mb-2 font-bold md:text-lg">Awards</p>
      <p class="text-gray-700">
        We have won over 15 awards and we have also been listed as one of the top real estate websites.
      </p>
    </div>
    <div>
      <div class="flex">
        <h6 class="mr-2 text-4xl font-bold md:text-5xl text-purple-700">
          143.2K
        </h6>
        <div class="flex items-center justify-center rounded-full bg-teal-400 w-7 h-7">
          <svg class="text-teal-900 w-7 h-7" stroke="currentColor" viewBox="0 0 52 52">
            <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
          </svg>
        </div>
      </div>
      <p class="mb-2 font-bold md:text-lg">Users</p>
      <p class="text-gray-700">
        With over 143K users we can say that we must be doing something right.
      </p>
    </div>
    <div>
      <div class="flex">
        <h6 class="mr-2 text-4xl font-bold md:text-5xl text-purple-700">
          91,248
        </h6>
        <div class="flex items-center justify-center rounded-full bg-teal-400 w-7 h-7">
          <svg class="text-teal-900 w-7 h-7" stroke="currentColor" viewBox="0 0 52 52">
            <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
          </svg>
        </div>
      </div>
      <p class="mb-2 font-bold md:text-lg">Purchases</p>
      <p class="text-gray-700">
        Over 90K purchases have been made through our website.
      </p>
    </div>
  </div>
</div>
{{-- STATISTICS SECTION ENDS --}}
{{-- PICTURES AND CONTENTS SECTION BEGINS --}}
{{-- CONTENT AND IMAGE 1 MINI SECTION BEGINS --}}
<div class="relative flex flex-col-reverse py-16 lg:py-0 lg:flex-col">
  <div class="w-full max-w-xl px-4 mx-auto md:px-0 lg:px-8 lg:py-20 lg:max-w-screen-xl">
    <div class="mb-0 lg:max-w-lg lg:pr-8 xl:pr-6">
      <h2 class="mb-5 font-sans text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:leading-none md:text-center">
        The quick, brown fox<br class="hidden md:block" />
        jumps over a lazy dog
      </h2>
      <p class="mb-5 text-base text-gray-700 md:text-lg md:text-center">
        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae. explicabo.
      </p>
      <div class="mb-10 text-center md:mb-16 lg:mb-20">
        <a
          href="/"
          class="inline-flex items-center justify-center w-full h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md md:w-auto bg-purple-600 hover:bg-purple-800 focus:shadow-outline focus:outline-none"
        >
          Learn more
        </a>
      </div>
    </div>
  </div>
  <div class="inset-y-0 top-0 right-0 w-full max-w-xl px-4 mx-auto mb-6 md:px-0 lg:pl-8 lg:pr-0 lg:mb-0 lg:mx-0 lg:w-1/2 lg:max-w-full lg:absolute xl:px-0">
    <img
      class="object-cover w-full h-56 rounded shadow-lg lg:rounded-none lg:shadow-none md:h-96 lg:h-full"
      src="{{ asset('images/house.jpg') }}"
      alt=""
    />
  </div>
</div>
{{-- CONTENT AND IMAGE 1 MINI SECTION ENDS --}}

{{-- CONTENT AND IMAGE 2 MINI SECTION BEGINS --}}
<div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
  <div class="mx-auto sm:text-center lg:max-w-2xl">
    <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
      <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
        <span class="relative inline-block">
          <svg viewBox="0 0 52 24" fill="currentColor" class="absolute top-0 left-0 z-0 hidden w-32 -mt-8 -ml-20 text-blue-gray-100 lg:w-32 lg:-ml-28 lg:-mt-10 sm:block">
            <defs>
              <pattern id="5dc90b42-5ed4-45a6-8e63-2d78ca9d3d95" x="0" y="0" width=".135" height=".30">
                <circle cx="1" cy="1" r=".7"></circle>
              </pattern>
            </defs>
            <rect fill="url(#5dc90b42-5ed4-45a6-8e63-2d78ca9d3d95)" width="52" height="24"></rect>
          </svg>
          <span class="relative">The</span>
        </span>
        quick, brown fox jumps over a lazy dog
      </h2>
      <p class="text-base text-gray-700 md:text-lg">
        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque rem aperiam, eaque ipsa quae.
      </p>
    </div>
    <div class="mb-4 transition-shadow duration-300 hover:shadow-xl lg:mb-6">
      <img class="object-cover w-full h-56 rounded shadow-lg sm:h-64 md:h-80 lg:h-96" src="{{ asset('images/manWithLaptop.jpg') }}" alt="" />
    </div>
    <p class="max-w-xl mb-4 text-base text-gray-700 sm:mx-auto">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud ullamco laboris aliquip ex ea.
    </p>
    <a href="/" aria-label="" class="inline-flex items-center font-semibold transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800">
      Learn more
      <svg class="inline-block w-3 ml-2" fill="currentColor" viewBox="0 0 12 12">
        <path d="M9.707,5.293l-5-5A1,1,0,0,0,3.293,1.707L7.586,6,3.293,10.293a1,1,0,1,0,1.414,1.414l5-5A1,1,0,0,0,9.707,5.293Z"></path>
      </svg>
    </a>
  </div>
</div>
{{-- CONTENT AND IMAGE 2 MINI SECTION ENDS --}}
{{-- PICTURES AND CONTENTS SECTION ENDS --}}

{{-- BUY, RENT, OR BROWSE HOMES SECTION BEGINS--}}
<div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
  <div class="grid gap-8 lg:grid-cols-3 sm:max-w-sm sm:mx-auto lg:max-w-full">
    <div class="overflow-hidden transition-shadow duration-300 bg-white rounded shadow-sm">
      <img src="{{ asset('images/buy.jpg') }}" class="object-cover w-full h-64" alt="" />
      <div class="p-5 border border-t-0">
        <a href="/" aria-label="Category" title="Buy a home" class="inline-block mb-3 text-2xl font-bold leading-5 transition-colors duration-200 hover:text-deep-purple-accent-700">Buy a home</a>
        <p class="mb-2 text-gray-700">
            There are plenty of homes that are for sale on our website. Click below to look for homes.
        </p>
           <a href="/">
              <button
              type="submit"
              class="inline-flex items-center justify-center h-12 px-6 mr-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-purple-700  hover:bg-purple-700  focus:shadow-outline focus:outline-none"
              >
              Search Homes
            </button>
        </a>
      </div>
    </div>
    <div class="overflow-hidden transition-shadow duration-300 bg-white rounded shadow-sm">
      <img src="{{ asset('images/rent.jpg') }}" class="object-cover w-full h-64" alt="" />
      <div class="p-5 border border-t-0">
        <a href="/" aria-label="Category" title="Rent a home" class="inline-block mb-3 text-2xl font-bold leading-5 transition-colors duration-200 hover:text-deep-purple-accent-700">Rent a home</a>
        <p class="mb-2 text-gray-700">
            There are plenty of homes that are for rent on our website. Click below to look for homes.
        </p>
           <a href="/">
              <button
              type="submit"
              class="inline-flex items-center justify-center h-12 px-6 mr-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-purple-700  hover:bg-purple-700  focus:shadow-outline focus:outline-none"
              >
              Search Rental Properties
            </button>
        </a>
      </div>
    </div>
    <div class="overflow-hidden transition-shadow duration-300 bg-white rounded shadow-sm">
      <img src="{{ asset('images/browse.jpg') }}" class="object-cover w-full h-64" alt="" />
      <div class="p-5 border border-t-0">
        <a href="/" aria-label="Category" title="Browse homes" class="inline-block mb-3 text-2xl font-bold leading-5 transition-colors duration-200 hover:text-deep-purple-accent-700">Browse homes</a>
        <p class="mb-2 text-gray-700">
            Want to look at homes but don't have money to buy one? Click below to go window shopping and add homes to your wishlist.
        </p>
           <a href="/">
              <button
              type="submit"
              class="inline-flex items-center justify-center h-12 px-6 mr-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-purple-700  hover:bg-purple-700  focus:shadow-outline focus:outline-none"
              >
              Browse Listings
            </button>
        </a>
      </div>
    </div>
  </div>
</div>
{{-- BUY, SELL, OR BROWSE HOMES SECTION ENDS--}}
@endsection