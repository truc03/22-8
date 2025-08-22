<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(ProjectSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(NewsSeeder::class); // ✅ đổi N viết hoa
        $this->call(ServiceSeeder::class);
        $this->call(UserSeeder::class);
    }
}
