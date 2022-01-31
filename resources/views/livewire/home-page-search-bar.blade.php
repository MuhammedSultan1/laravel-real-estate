 <form class="flex relative mt-3 md:mt-0 items-center w-full"  method="POST" action="{{ route('forSale') }}">
        @csrf
<div class="relative mt-3 md:mt-0 w-10/12">
    <input wire:model.debounce.100ms="search" type="text" class="bg-gray-50 text-sm rounded-full w-10/12 h-12 px-4 pl-8 py-1 mb-3 focus:outline-none focus:shadow-outline" placeholder="Search">
    @if(strlen($search) >= 2)
    <div class="absolute bg-white text-sm rounded w-full mt-4">
        @if ($cities->count() > 0)
            <ul>
                @foreach ($cities as $result => $location)
                <li class="border-b border-gray-300">
                    <p class="block hover:text-purple-600 px-3 py-3 flex items-center">
                      {{-- <span class="ml-4"> {{ $location }} </span> --}}
                      @php
                      $state_code = Str::after($location, ' ');
                      $city = Str::before($location, ',')
                      @endphp
                        <a href="{{ route('forSale', ['state_code' => $state_code, 'city' => $city]) }}" class="block hover:bg-gray-50 flex items-center">
                            <span class="ml-4"> {{ $location }} </span>
                        </a>
                    </p>
                </li>
                @endforeach
            </ul>
        @endif
         @if ($zipcodes->count() > 0)
            <ul>
                @foreach ($zipcodes as $result => $location)
                <li class="border-b border-gray-300">
                    <p class="block hover:text-purple-600 px-3 py-3 flex items-center">
                      {{-- <span class="ml-4"> {{ $location }} </span> --}}
                      @php
                      $postal = Str::before($location, ',')
                      @endphp
                        <a href="{{ route('forSale', ['postal' => $postal]) }}" class="block hover:bg-gray-50 flex items-center">
                            <span class="ml-4"> {{ $location }} </span>
                        </a>
                    </p>
                </li>
                @endforeach
            </ul>
        @endif
    </div>
    @endif
</div>
     <button
        type="submit"
        class="inline-flex items-center justify-center h-12 mb-2 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-purple-700 hover:bg-purple-800 focus:shadow-outline focus:outline-none"
        >
        Search
      </button>
      </form>