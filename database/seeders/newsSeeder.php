<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\News;

class NewsSeeder extends Seeder
{
    public function run(): void
    {
        // Tạo 50 tin tức giả
        News::factory()->count(15)->create();
    }
}
