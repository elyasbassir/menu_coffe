<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TemplateTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('template')->delete();
        
        \DB::table('template')->insert(array (
            0 => 
            array (
                'id' => 7,
                'template_id' => 'a851d95305795502404962ad45f69a5a',
                'template_name' => 'قالب پیش فرض فرتا',
                'updated_at' => '2024-08-05 11:59:47',
                'created_at' => '2024-08-05 11:59:47',
                'template' => 'afa0d131100a68e81542a406330b2aec',
            ),
        ));
        
        
    }
}