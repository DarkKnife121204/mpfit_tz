<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run()
    {
        Category::factory()->count(3)->sequence(
            ['name' => 'easy'],
            ['name' => 'fragile'],
            ['name' => 'hard']
        )->create();
    }
}
