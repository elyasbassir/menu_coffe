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
                'id' => 12,
                'coffee_code' => 'c68d7c358513912dccb2d53dc13fa970',
                'name_product' => 'قهوه',
                'image_names' => 'fdfa37ff8208db8651f4533d6ba0a767.JPG',
                'description_product' => 'شیسسشیشسی',
                'updated_at' => '2024-10-17 22:35:18',
                'created_at' => '2024-10-17 22:35:18',
                'availability' => NULL,
                'price' => 5000,
                'video_name' => NULL,
                'category_id' => '9cb1336c492abcf89cf686a4cbbd8f8b',
                'product_id' => 'asdasddsadsasaddsadsadsa',
            ),
            1 => 
            array (
                'id' => 17,
                'coffee_code' => 'd86c4b86cd4d0ac169a854ef4d81c07c',
                'name_product' => 'قهوه اسپرسو',
                'image_names' => '5fa74a578cd2a1e2ba9556e789e4458b.JPG,9bbced16db475ca948fb1397c37aa9af.JPG',
                'description_product' => 'یسشسشیسشی یی ش',
                'updated_at' => '2024-10-21 18:44:08',
                'created_at' => '2024-10-21 18:44:08',
                'availability' => NULL,
                'price' => 25000,
                'video_name' => '784ff45d1e78ee070042e0644cfd2a99.mp4',
                'category_id' => 'e98a04d1c1d57d8f4a9595fda05579c1',
                'product_id' => '6f5aaed7c50f1f7a25b33c71e310efb2',
            ),
        ));
        
        
    }
}