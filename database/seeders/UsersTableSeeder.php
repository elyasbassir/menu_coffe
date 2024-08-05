<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'elyas',
                'last_name' => 'bassir',
                'user_id' => 'sadasdj15d3s13fas5313a5sf1as35fa1',
                'coffee_code' => NULL,
                'updated_at' => '2024-04-10 21:01:37',
                'created_at' => '2024-04-18 21:01:37',
                'password' => '$2y$12$RB/kDaEBUcUD/jZO/ebfvuTTgFqJnqlrLkjK3JiTH5LUAgmuuqA.i',
                'phone' => '09153359833',
                'level' => 0,
                'remember_token' => '87TCgVoizsaGvlD4hHSUX7oEodRR05WJJsuj4D3AVsDCt4FaQywrwvwrSEGM',
            ),
            1 => 
            array (
                'id' => 5,
                'name' => 'بهنام',
                'last_name' => 'عیدی',
                'user_id' => '14e09b8e311428c9548b0484c5dcdb35',
                'coffee_code' => '8010d0c9b75f2aaa745ba9db586cff4b',
                'updated_at' => '2024-07-30 14:18:04',
                'created_at' => '2024-07-30 14:18:04',
                'password' => '$2y$12$12cVjyOJadJV9/gpBpFQ4O9505gzhclzKYMxIhrXhM51IGWrDMkC6',
                'phone' => '09123456789',
                'level' => 1,
                'remember_token' => NULL,
            ),
            2 => 
            array (
                'id' => 6,
                'name' => 'الیاس',
                'last_name' => 'بصیر',
                'user_id' => 'a89f9ba3226ed1c5c190ce7430b72ba3',
                'coffee_code' => 'c68d7c358513912dccb2d53dc13fa970',
                'updated_at' => '2024-08-02 11:22:38',
                'created_at' => '2024-08-02 11:22:38',
                'password' => '$2y$12$OyNZ.A/MfhgZco9c/R2eHuRagLPQ/N0qNOLGO0HQ06vnwy5f1riY2',
                'phone' => '09999999999',
                'level' => 1,
                'remember_token' => NULL,
            ),
            3 => 
            array (
                'id' => 7,
                'name' => 'ناشناس',
                'last_name' => 'ناشناس',
                'user_id' => '0d2683abd95b6795df3a90c1dafb70da',
                'coffee_code' => 'd86c4b86cd4d0ac169a854ef4d81c07c',
                'updated_at' => '2024-08-02 11:30:30',
                'created_at' => '2024-08-02 11:30:30',
                'password' => '$2y$12$U08k0qbfE7yoj80xvG9h4u9/lINftTa/04gphCHxEsDLoN1xgTuey',
                'phone' => '09222222222',
                'level' => 1,
                'remember_token' => NULL,
            ),
        ));
        
        
    }
}