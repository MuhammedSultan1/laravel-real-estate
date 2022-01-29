<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Collection;

class HomePageSearchBar extends Component
{
    public $search = '';

    public function render()
    {        
        $searchResults = [];

        if(strlen($this->search) >= 2 ){
            $searchResults = Http::withHeaders([
        	'x-rapidapi-host' => 'autocomplete-usa.p.rapidapi.com',
            'x-rapidapi-key' => env('RAPID_API_KEY'),
            ])->get('https://autocomplete-usa.p.rapidapi.com/marketplace/autocomplete/usa/cities/'.$this->search)
              ->json()['Result'];
        }
       // dump($searchResults);

        return view('livewire.home-page-search-bar',[
            'searchResults' => collect($searchResults)->take(7),
        ]);   
    }
}