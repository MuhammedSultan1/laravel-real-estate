<div class="relative mt-3 md:mt-0 w-10/12">
    <input wire:model.debounce.10ms="search" type="text" class="bg-gray-50 text-sm rounded-full w-10/12 h-12 px-4 pl-8 py-1 mb-3 focus:outline-none focus:shadow-outline" placeholder="Search">
    @if(strlen($search) >= 2)
    <div class="absolute bg-slate-200 text-sm rounded w-full mt-4">
        @if ($cities->count() > 0)
            <ul>
                @foreach ($cities as $result => $location)
                <li class="border-b border-gray-300">
                    <p class="block hover:bg-gray-50 px-3 py-3 flex items-center">
                      <span class="ml-4"> {{ $location }} </span>
                    </p>
                </li>
                @endforeach
            </ul>
        @endif
         @if ($addresses->count() > 0)
            <ul>
                @foreach ($addresses as $result => $location)
                <li class="border-b border-gray-300">
                    <p class="block hover:bg-gray-50 px-3 py-3 flex items-center">
                      <span class="ml-4"> {{ $location }} </span>
                    </p>
                </li>
                @endforeach
            </ul>
        @endif
         @if ($zipcodes->count() > 0)
            <ul>
                @foreach ($zipcodes as $result => $location)
                <li class="border-b border-gray-300">
                    <p class="block hover:bg-gray-50 px-3 py-3 flex items-center">
                      <span class="ml-4"> {{ $location }} </span>
                    </p>
                </li>
                @endforeach
            </ul>
        @endif
    </div>
    @endif
</div>