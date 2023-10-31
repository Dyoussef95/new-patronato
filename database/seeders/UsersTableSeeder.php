<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        DB::table('users')->insert(array (         
            0 => 
            array (
                'name' => 'dyoussef',
                'email' => 'dyoussef@gmail.com',
                'password' => Hash::make('123456'),
                'habilitado' => true,
                'rol_id' => 1,
            ),
            1 => 
            array (
                'name' => 'mferreyra',
                'email' => 'mferreyra@gmail.com',
                'password' => Hash::make('123456'),
                'habilitado' => true,
                'rol_id' => 3,
            ), 
            
        ));

        


            
            
    }
}
