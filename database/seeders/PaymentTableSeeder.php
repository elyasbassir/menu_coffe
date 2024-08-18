<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PaymentTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('payment')->delete();
        
        \DB::table('payment')->insert(array (
            0 => 
            array (
                'id' => 11,
                'payment_id' => 'dc283e61dda806916c43d82e64d55ed3',
                'user_id' => '0d2683abd95b6795df3a90c1dafb70da',
                'price' => 300,
                'payed' => 0,
                'time' => '2024-08-10 18:06:58',
                'referenceid' => '',
                'days' => 90,
            ),
            1 => 
            array (
                'id' => 12,
                'payment_id' => '26253f526d54f2bd43c133097f0a35aa',
                'user_id' => '0d2683abd95b6795df3a90c1dafb70da',
                'price' => 500,
                'payed' => 0,
                'time' => '2024-08-10 18:07:02',
                'referenceid' => '',
                'days' => 90,
            ),
            2 => 
            array (
                'id' => 13,
                'payment_id' => '1be12f5999421aea1d9e0ab38d9c1bd5',
                'user_id' => '0d2683abd95b6795df3a90c1dafb70da',
                'price' => 500,
                'payed' => 0,
                'time' => '2024-08-10 18:07:06',
                'referenceid' => '',
                'days' => 90,
            ),
            3 => 
            array (
                'id' => 14,
                'payment_id' => 'de3442096cd4ad3ae609307aa5ea2379',
                'user_id' => '0d2683abd95b6795df3a90c1dafb70da',
                'price' => 1000,
                'payed' => 0,
                'time' => '2024-08-10 18:07:12',
                'referenceid' => '',
                'days' => 90,
            ),
            4 => 
            array (
                'id' => 15,
                'payment_id' => '782e25798551fd150cae71f73224ffec',
                'user_id' => '0d2683abd95b6795df3a90c1dafb70da',
                'price' => 1000,
                'payed' => 1,
                'time' => '2024-08-10 18:12:31',
                'referenceid' => '56616373801',
                'days' => 90,
            ),
            5 => 
            array (
                'id' => 16,
                'payment_id' => 'd8a940dea9a2cbc5fda24609792ad0b1',
                'user_id' => '0d2683abd95b6795df3a90c1dafb70da',
                'price' => 1000,
                'payed' => 1,
                'time' => '2024-08-10 18:14:02',
                'referenceid' => '56616415601',
                'days' => 90,
            ),
        ));
        
        
    }
}