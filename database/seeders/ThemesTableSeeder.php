<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ThemesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('themes')->delete();
        
        \DB::table('themes')->insert(array (
            0 => 
            array (
                'id' => 9,
                'theme_name' => 'تم تیره - کافه - فرتا',
                'template_id' => 'a851d95305795502404962ad45f69a5a',
                'style_name' => 'e260a1de487244b14ea6976e0a82aa55.css',
                'script_name' => '706a678419cc3d2146a275f0807eca4b.js',
                'updated_at' => '2024-08-05 12:00:13',
                'created_at' => '2024-08-05 12:00:13',
                'theme_id' => 'df933f9afa16c6229429bdf652a95f53',
            ),
        ));
        
        
    }
}