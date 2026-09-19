<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = ['Fiksi', 'Non Fiksi', 'Sains', 'Novel'];

        foreach ($data as $categoryName) {
            Category::create(['name' => $categoryName]);
        }
    }
}
