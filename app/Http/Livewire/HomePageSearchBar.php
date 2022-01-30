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
        $cities = [];
        $addresses = [];
        $zipcodes = [];

        if(strlen($this->search) >= 2){
            $cities = Http::withHeaders([
            'x-rapidapi-host' => 'autocomplete-usa.p.rapidapi.com',
            'x-rapidapi-key' => env('RAPID_API_KEY'),
            ])->get('https://autocomplete-usa.p.rapidapi.com/marketplace/autocomplete/usa/cities/'.$this->search, [
            ])->json()['Result'];
        }

        if(strlen($this->search) >= 2){
            $addresses = Http::withHeaders([
            'x-rapidapi-host' => 'autocomplete-usa.p.rapidapi.com',
            'x-rapidapi-key' => env('RAPID_API_KEY'),
            ])->get('https://autocomplete-usa.p.rapidapi.com/marketplace/autocomplete/usa/addresses/'.$this->search, [
            ])->json()['Result'];
        }

        if(strlen($this->search) >= 2){
            $zipcodes = Http::withHeaders([
            'x-rapidapi-host' => 'autocomplete-usa.p.rapidapi.com',
            'x-rapidapi-key' => env('RAPID_API_KEY'),
            ])->get('https://autocomplete-usa.p.rapidapi.com/marketplace/autocomplete/usa/zipcodes/lite/'.$this->search, [
            ])->json()['Result'];
        }



        return view('livewire.home-page-search-bar',[
            'cities' => collect($cities)->take(5),
            'addresses' => collect($addresses)->take(2),
            'zipcodes' => collect($zipcodes)->take(2),
        ]);
    }
}