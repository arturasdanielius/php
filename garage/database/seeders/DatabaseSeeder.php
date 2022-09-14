<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

            DB::table('users')->insert([
                'name' => 'bebras',
                'email' => 'bebras@bebras.lt',
                'password' => Hash::make('123'),
            ]);
            DB::table('users')->insert([
                'name' => 'briedis',
                'email' => 'briedis@briedis.lt',
                'password' => Hash::make('123'),
            ]);
        
    }
}
