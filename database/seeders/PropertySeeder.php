<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('properties')->insert([

            [

                'price' => '1200000',

                'address' => '5501 Bristol Bay Ln N, Jacksonville, FL 32244',

                'beds' => '4',

                'baths' => '3',

                'sqft' => '2,100',

                'year' => '1997',

                'details' => 'This beautiful house in Jacksonville has 4 beds and 3 bathrooms. It has a big yard.',

                'gallery' => 'https://media.gettyimages.com/photos/twilight-exterior-of-home-and-landscape-picture-id168325352?s=2048x2048',

                'lat' => '30.209939',

                'lon' => '-81.722008',

                'slug' => 'property-1'

            ],

            [

                'price' => '2300000',

                'address' => '2563 Sofkee Cir, Lizella, GA 31052',

                'beds' => '4',

                'baths' => '3',

                'sqft' => '3,651',

                'year' => '2003',

                'details' => 'This beautiful house in Georgia has 4 beds and 3 bathrooms. It is on a hill',

                'gallery' => 'https://www.gettyimages.com/detail/photo/modern-architecture-home-green-on-green-summer-royalty-free-image/1220909247?adppopup=true',

                'lat' => '32.8108505',

                'lon' => '-83.8151658016814',

                'slug' => 'property-2'

            ],

            [

                'price' => '580000',

                'address' => '3610 SE 20th St, Ankeny, IA 50021',

                'beds' => '4',

                'baths' => '3',

                'sqft' => '2,080',

                'year' => '2007',

                'details' => 'This beautiful house in Iowa has 4 beds and 3 bathrooms. It has many rooms.',

                'gallery' => 'https://www.gettyimages.com/detail/photo/aerial-view-of-a-modern-american-craftsman-style-royalty-free-image/1222428750',

                'lat' => '41.710647572151395',

                'lon' => '-93.55382427036444',

                'slug' => 'property-3'

            ],

            [

                'price' => '900000',

                'address' => '3963 Old Milton Hwy, Walla Walla, WA 99362',

                'beds' => '4',

                'baths' => '3',

                'sqft' => '2,412',

                'year' => '2001',

                'details' => 'This beautiful house in Washington has 4 beds and 3 bathrooms. It has a big yard and many rooms.',

                'gallery' => 'https://www.gettyimages.com/detail/photo/beautiful-country-house-and-garden-royalty-free-image/1275090412',

                'lat' => '46.0065512471295',

                'lon' => '-118.404330540561',

                'slug' => 'property-4'

             ]

         ]);
    }
}