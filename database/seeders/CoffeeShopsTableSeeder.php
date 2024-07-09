<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CoffeeShopsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('coffee_shops')->delete();
        
        \DB::table('coffee_shops')->insert(array (
            0 => 
            array (
                'id' => 7,
                'coffee_code' => 'ea0de4ffb7a9e95bc47c30c21bb8cdaf',
                'name_coffee_shop' => 'علی کافه',
                'address_coffee_shop' => 'شهرستان فردوس - فلکه انار - کنار افق کوروش',
                'updated_at' => '2024-04-25 06:32:22',
                'created_at' => '2024-04-25 06:32:22',
            ),
            1 => 
            array (
                'id' => 6,
                'coffee_code' => '29d8a611b50446e28b3a8b00ebc5bf3d',
                'name_coffee_shop' => 'کافه فرتا',
                'address_coffee_shop' => 'خیابان تست - تست -تست -تست -تست -تست',
                'updated_at' => '2024-04-20 10:17:50',
                'created_at' => '2024-04-20 10:17:50',
            ),
        ));
        
        
    }
}