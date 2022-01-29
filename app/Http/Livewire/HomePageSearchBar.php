<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HomePageSearchBar extends Component
{
    public $search = '5591 Nice street';

    public function render()
    {
        $forSale = Http::withHeaders([
        'x-rapidapi-host' => 'realty-in-us.p.rapidapi.com',
        'x-rapidapi-key' => env('RAPID_API_KEY'),
        ])->get('https://realty-in-us.p.rapidapi.com/properties/list-for-sale', [
            'city' => $city ?? '',
            'state_code' => $state_code ?? '',
            'postal_code' => $postal ?? '',
            'offset' => '0',
            'limit' => '52',
            'sort' => 'relevance'
        ])->json()['listings'];

        $forRent = Http::withHeaders([
        'x-rapidapi-host' => 'realty-in-us.p.rapidapi.com',
        'x-rapidapi-key' => env('RAPID_API_KEY'),
        ])->get('https://realty-in-us.p.rapidapi.com/properties/list-for-rent', [
            'city' => $city ?? '',
            'state_code' => $state_code ?? '',
            'postal_code' => $postal ?? '',
            'offset' => '0',
            'limit' => '52',
            'sort' => 'relevance'
        ])->json()['listings'];

        return view('livewire.home-page-search-bar');
    }
}