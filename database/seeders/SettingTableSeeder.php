<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SettingTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('setting')->delete();
        
        \DB::table('setting')->insert(array (
            0 => 
            array (
                'id' => 1,
                'coffee_code' => '8010d0c9b75f2aaa745ba9db586cff4b',
                'template_id' => NULL,
                'theme_id' => NULL,
                'updated_at' => '2024-08-05 11:47:57',
                'created_at' => '2024-07-30 14:18:04',
                'custom_css' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'coffee_code' => 'c68d7c358513912dccb2d53dc13fa970',
                'template_id' => NULL,
                'theme_id' => NULL,
                'updated_at' => '2024-08-05 11:47:57',
                'created_at' => '2024-08-02 11:22:38',
                'custom_css' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'coffee_code' => 'd86c4b86cd4d0ac169a854ef4d81c07c',
                'template_id' => 'a851d95305795502404962ad45f69a5a',
                'theme_id' => 'df933f9afa16c6229429bdf652a95f53',
                'updated_at' => '2024-08-05 12:00:26',
                'created_at' => '2024-08-02 11:30:30',
                'custom_css' => NULL,
            ),
        ));
        
        
    }
}