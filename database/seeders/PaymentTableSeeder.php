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
            6 => 
            array (
                'id' => 17,
                'payment_id' => '212f9234ec4d30ef1b94a35e13ada0cd',
                'user_id' => '0d2683abd95b6795df3a90c1dafb70da',
                'price' => 1010000,
                'payed' => 0,
                'time' => '2024-09-06 19:28:24',
                'referenceid' => '',
                'days' => 360,
            ),
            7 => 
            array (
                'id' => 18,
                'payment_id' => 'ffc5d441547ed70e76559c7ccefc793a',
                'user_id' => '0d2683abd95b6795df3a90c1dafb70da',
                'price' => 1010000,
                'payed' => 0,
                'time' => '2024-09-06 19:28:27',
                'referenceid' => '',
                'days' => 360,
            ),
            8 => 
            array (
                'id' => 19,
                'payment_id' => '847e4949604639e3d1288da985e31912',
                'user_id' => '0d2683abd95b6795df3a90c1dafb70da',
                'price' => 1010000,
                'payed' => 0,
                'time' => '2024-09-06 19:28:47',
                'referenceid' => '',
                'days' => 360,
            ),
            9 => 
            array (
                'id' => 20,
                'payment_id' => '2bda55a2d6ca35a6735ec2e46c409ed2',
                'user_id' => '0d2683abd95b6795df3a90c1dafb70da',
                'price' => 95000,
                'payed' => 0,
                'time' => '2024-09-28 15:05:23',
                'referenceid' => '',
                'days' => 30,
            ),
            10 => 
            array (
                'id' => 21,
                'payment_id' => 'f397b85ebbf3586d08fbcf74b1cdb954',
                'user_id' => '0d2683abd95b6795df3a90c1dafb70da',
                'price' => 1010000,
                'payed' => 0,
                'time' => '2024-09-28 15:06:31',
                'referenceid' => '',
                'days' => 360,
            ),
            11 => 
            array (
                'id' => 22,
                'payment_id' => '9e7d57f77ec07d8e5d9ecbd0649733d4',
                'user_id' => '0d2683abd95b6795df3a90c1dafb70da',
                'price' => 1010000,
                'payed' => 0,
                'time' => '2024-10-18 18:50:26',
                'referenceid' => '',
                'days' => 360,
            ),
            12 => 
            array (
                'id' => 23,
                'payment_id' => '2a12bd9c91c76654d45792231120cf00',
                'user_id' => '0d2683abd95b6795df3a90c1dafb70da',
                'price' => 95000,
                'payed' => 0,
                'time' => '2024-10-18 18:51:48',
                'referenceid' => '',
                'days' => 30,
            ),
        ));
        
        
    }
}