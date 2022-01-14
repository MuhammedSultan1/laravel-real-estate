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

                'gallery' => 'https://photos.zillowstatic.com/fp/85b1ad957a4ce459578f553e896101c6-cc_ft_1536.webp',

                'lat' => '30.209939',

                'lon' => '-81.722008',

                'slug' => 'property-1'

            ],

            [

                'price' => '2300000',

                'address' => '2563 Sofkee Cir, Lizella, GA 31052',

                'beds' => '5',

                'baths' => '1',

                'sqft' => '3,651',

                'year' => '2003',

                'details' => 'This beautiful house in Georgia has 5 beds and 1 bathroom. It is on a hill',

                'gallery' => 'https://photos.zillowstatic.com/fp/86762f324f621fd36f4dd7764e5c5ace-cc_ft_1536.webp',

                'lat' => '32.8108505',

                'lon' => '-83.8151658016814',

                'slug' => 'property-2'

            ],

            [

                'price' => '580000',

                'address' => '3610 SE 20th St, Ankeny, IA 50021',

                'beds' => '6',

                'baths' => '2',

                'sqft' => '2,080',

                'year' => '2007',

                'details' => 'This beautiful house in Iowa has 6 beds and 2 bathrooms. It has many rooms.',

                'gallery' => 'https://photos.zillowstatic.com/fp/52131e6e81e328aec6d6ff9da0938d8e-cc_ft_1536.webp',

                'lat' => '41.710647572151395',

                'lon' => '-93.55382427036444',

                'slug' => 'property-3'

            ],

            [

                'price' => '900000',

                'address' => '3963 Old Milton Hwy, Walla Walla, WA 99362',

                'beds' => '3',

                'baths' => '6',

                'sqft' => '2,412',

                'year' => '2001',

                'details' => 'This beautiful house in Washington has 3 beds and 6 bathrooms. It has a big yard and many rooms.',

                'gallery' => 'https://photos.zillowstatic.com/fp/27c7d58742b6a0177dd4b5cf27cd46cf-cc_ft_1536.webp',

                'lat' => '46.0065512471295',

                'lon' => '-118.404330540561',

                'slug' => 'property-4'

             ]

         ]);
    }
}