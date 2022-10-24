<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
//hash used to encrypt password
use Illuminate\Support\Facades\Hash;

//use seeder to add fake data
class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'peter parker',
            'email'=>'peterparker@gmail.com',
            'password'=>Hash::make('12345')
        ]);
    }
}
