<input wire:model.debounce.500ms="search"
          placeholder="Enter a zipcode"
          required=""
          name="postal"
          id="postal"
          type="text"
          class="bg-gray-50 text-sm rounded-full w-full h-12 px-4 pl-8 py-1 mb-3 focus:outline-none focus:shadow-outline"
        />
        @if (strlen($search) >= 2)
            <div class="absolute bg-slate-100 rounded w-10/12 mt-14">
                @if($searchResults->count() > 0)
                <ul>
                    @foreach($searchResults as $location)
                    <li class="border-b border-gray-700">
                        {{-- <a href="{{ route('#') }}" class="block hover:bg-purple-200 px-3 py-3 ">{{ $location['city'] }}</a> --}}
                            <p>
                            {{ $location['0'] }}
                            </p>
                    </li>
                    @endforeach
                </ul>
                @else
                <div class="py-3 px-3">
                    No results for {{ $search }}
                </div>
                @endif
            </div>
        @endif