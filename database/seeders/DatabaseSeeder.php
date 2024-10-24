<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();


        $this->call(UsersTableSeeder::class);
        $this->call(CoffeeShopsTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(SettingTableSeeder::class);
        $this->call(TemplateTableSeeder::class);
        $this->call(ThemesTableSeeder::class);
        $this->call(PaymentTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
    }
}
