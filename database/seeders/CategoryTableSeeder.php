<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('category')->delete();
        
        \DB::table('category')->insert(array (
            0 => 
            array (
                'id' => 3,
                'user_id' => 'a89f9ba3226ed1c5c190ce7430b72ba3',
                'category_id' => '4873850bb7c392a9d6dde12100989eb3',
                'image_category' => '67118ac6702c1.JPG',
                'category_name' => '1111',
                'updated_at' => '2024-10-17 22:08:06',
                'created_at' => '2024-10-17 22:08:06',
            ),
            1 => 
            array (
                'id' => 4,
                'user_id' => 'a89f9ba3226ed1c5c190ce7430b72ba3',
                'category_id' => '606d4d9af270d27513b504cc27c5e646',
                'image_category' => '67118b11b328b.JPG',
                'category_name' => '112',
                'updated_at' => '2024-10-17 22:09:21',
                'created_at' => '2024-10-17 22:09:21',
            ),
            2 => 
            array (
                'id' => 5,
                'user_id' => 'a89f9ba3226ed1c5c190ce7430b72ba3',
                'category_id' => '9cb1336c492abcf89cf686a4cbbd8f8b',
                'image_category' => '67118b88cc890.JPG',
                'category_name' => 'خوراکی',
                'updated_at' => '2024-10-17 22:11:20',
                'created_at' => '2024-10-17 22:11:20',
            ),
            3 => 
            array (
                'id' => 7,
                'user_id' => '0d2683abd95b6795df3a90c1dafb70da',
                'category_id' => 'e98a04d1c1d57d8f4a9595fda05579c1',
                'image_category' => '6716a0c796e67.JPG',
                'category_name' => 'نوشیدنی',
                'updated_at' => '2024-10-21 18:43:19',
                'created_at' => '2024-10-21 18:43:19',
            ),
            4 => 
            array (
                'id' => 8,
                'user_id' => '0d2683abd95b6795df3a90c1dafb70da',
                'category_id' => '95013340d06daaa9650a085423607dbb',
                'image_category' => '6716a1071e79d.JPG',
                'category_name' => 'شسییسش',
                'updated_at' => '2024-10-21 18:44:23',
                'created_at' => '2024-10-21 18:44:23',
            ),
            5 => 
            array (
                'id' => 9,
                'user_id' => '0d2683abd95b6795df3a90c1dafb70da',
                'category_id' => '921613ac9fe0a685bb2426645e1ead98',
                'image_category' => '6716a10c6aaa3.JPG',
                'category_name' => 'یسشیشسیسش',
                'updated_at' => '2024-10-21 18:44:28',
                'created_at' => '2024-10-21 18:44:28',
            ),
            6 => 
            array (
                'id' => 10,
                'user_id' => '0d2683abd95b6795df3a90c1dafb70da',
                'category_id' => 'f635465880e362e17f633e544bd2dc57',
                'image_category' => '6716a11089fa3.JPG',
                'category_name' => 'شسییسشیسش',
                'updated_at' => '2024-10-21 18:44:32',
                'created_at' => '2024-10-21 18:44:32',
            ),
        ));
        
        
    }
}