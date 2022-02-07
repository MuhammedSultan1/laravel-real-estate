<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class NormalUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('normal_users')->insert([
    [
            'name' => 'Frank Stevenson',
            'email' => 'frankstevenson@gmail.com',
            'password' => Hash::make('12345')
    ],
    [
            'name' => 'John Doe',
            'email' => 'johndoe@gmail.com',
            'password' => Hash::make('12345')
    ],
    [
            'name' => 'Jane Williams',
            'email' => 'janewilliams@gmail.com',
            'password' => Hash::make('12345')
    ]]);
    }
}