<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'elyas',
                'last_name' => 'bassir',
                'user_id' => 'sadasdj15d3s13fas5313a5sf1as35fa1',
                'coffee_code' => NULL,
                'updated_at' => '2024-04-10 21:01:37',
                'created_at' => '2024-04-18 21:01:37',
                'password' => '$2y$12$RB/kDaEBUcUD/jZO/ebfvuTTgFqJnqlrLkjK3JiTH5LUAgmuuqA.i',
                'phone' => '09153359833',
                'level' => 0,
                'remember_token' => 'Xnvpq8eFc6XLPSfub0sHIbgeyNoTsVOE0UPQQwLCip3MakbbfXSRC7IoFUHX',
            ),
            1 => 
            array (
                'id' => 3,
                'name' => 'الیاس',
                'last_name' => 'بصیر',
                'user_id' => '3ccc0b0adb5bd0b1d16efb9e5d4e926a',
                'coffee_code' => '29d8a611b50446e28b3a8b00ebc5bf3d',
                'updated_at' => '2024-04-20 10:17:50',
                'created_at' => '2024-04-20 10:17:50',
                'password' => '$2y$12$eN5YVuZfaEcOxs21X2WX1OyFr23P8d1rpamfKEmg8jv5O8LtW8GfS',
                'phone' => '09152655133',
                'level' => 1,
                'remember_token' => NULL,
            ),
            2 => 
            array (
                'id' => 4,
                'name' => 'بهنام',
                'last_name' => 'عیدی',
                'user_id' => '8e2b737149aeed138d13071362ef32e0',
                'coffee_code' => 'ea0de4ffb7a9e95bc47c30c21bb8cdaf',
                'updated_at' => '2024-04-25 06:32:22',
                'created_at' => '2024-04-25 06:32:22',
                'password' => '$2y$12$8Nphyog5mNGAA9HTfi4b2uj77B2DGvpGDJSc6aiC/L2g3lFL6RyTq',
                'phone' => '09123456789',
                'level' => 1,
                'remember_token' => NULL,
            ),
        ));
        
        
    }
}