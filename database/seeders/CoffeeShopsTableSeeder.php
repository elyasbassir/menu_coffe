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
                'id' => 9,
                'coffee_code' => 'c68d7c358513912dccb2d53dc13fa970',
                'name_coffee_shop' => 'رستوران اعیان',
                'address_coffee_shop' => 'فلکه زعفران - به سمت چهار راه شهربانی',
                'updated_at' => '2024-08-02 11:22:38',
                'created_at' => '2024-08-05 11:22:38',
                'expire_subscription' => '2025-09-13 09:40:15',
            ),
            1 => 
            array (
                'id' => 8,
                'coffee_code' => '8010d0c9b75f2aaa745ba9db586cff4b',
                'name_coffee_shop' => 'علی کافه',
                'address_coffee_shop' => 'خیابان فردوس - بعثت -فلکه انار',
                'updated_at' => '2024-07-30 14:18:03',
                'created_at' => '2024-07-30 14:18:03',
                'expire_subscription' => '2024-08-12 09:40:15',
            ),
            2 => 
            array (
                'id' => 10,
                'coffee_code' => 'd86c4b86cd4d0ac169a854ef4d81c07c',
                'name_coffee_shop' => 'کافه جمهوری',
                'address_coffee_shop' => 'خیابان بعثت',
                'updated_at' => '2024-08-10 18:14:31',
                'created_at' => '2024-08-02 11:30:29',
                'expire_subscription' => '2025-01-01 18:14:31',
            ),
        ));
        
        
    }
}