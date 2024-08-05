<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('products')->delete();
        
        \DB::table('products')->insert(array (
            0 => 
            array (
                'id' => 3,
                'coffee_code' => 'd86c4b86cd4d0ac169a854ef4d81c07c',
                'name_product' => 'قهوه اسپرسو',
                'image_names' => '88fa627d9804e56abf7a4645e61ca78e.jpg,82b13912c08338b29c961b7734ae28f3.jpg',
                'description_product' => 'قهوه اسپرسو با کافئین بالا برای شما',
                'updated_at' => '2024-08-03 15:21:18',
                'created_at' => '2024-08-03 15:21:18',
                'availability' => NULL,
                'price' => 30000,
                'video_name' => NULL,
            ),
            1 => 
            array (
                'id' => 4,
                'coffee_code' => 'd86c4b86cd4d0ac169a854ef4d81c07c',
                'name_product' => 'هات چاکلت',
                'image_names' => '1f75a3c9ab4319ab86ddc57495260f8d.jpg,6427b96ada5b3fe17b5d405d1f367eb8.jpg',
                'description_product' => 'هات چاکلت خوشمزه برای ایرانیان به به',
                'updated_at' => '2024-08-03 15:33:44',
                'created_at' => '2024-08-03 15:33:44',
                'availability' => NULL,
                'price' => 50000,
                'video_name' => NULL,
            ),
        ));
        
        
    }
}