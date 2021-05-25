<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'Ester Samuel',
            'email'=>'ester@gmail.com',
            'password'=>Hash::make('ester')
        ]);
        DB::table('users')->insert([
            'name'=>'Charles Ifeanyi',
            'email'=>'charles@gmail.com',
            'password'=>Hash::make('charles')
        ]);
    }
}
