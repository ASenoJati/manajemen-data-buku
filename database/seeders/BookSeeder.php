<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $getFiksiCategory = Category::where('name', 'Fiksi')->first();
        $getNonFiksiCategory = Category::where('name', 'Non Fiksi')->first();
        $getSainsCategory = Category::where('name', 'Sains')->first();
        $getNovelCategory = Category::where('name', 'Novel')->first();

        Book::create([
            'category_id' => $getFiksiCategory->id,
            'title' => 'Bumi Manusia',
            'author' => 'Pramoedya Ananta Toer',
            'description' => 'Buku ini adalah novel sejarah yang menceritakan kehidupan masyarakat Indonesia pada masa kolonial Belanda.'
        ]);

        Book::create([
            'category_id' => $getNonFiksiCategory->id,
            'title' => 'Sapiens: A Brief History of Humankind',
            'author' => 'Yuval Noah Harari',
            'description' => 'Buku ini membahas sejarah umat manusia dari zaman purba hingga era modern, dengan fokus pada perkembangan budaya, politik, dan ekonomi.'
        ]);

        Book::create([
            'category_id' => $getSainsCategory->id,
            'title' => 'A Brief History of Time',
            'author' => 'Stephen Hawking',
            'description' => 'Buku ini menjelaskan konsep-konsep fisika modern, termasuk teori relativitas dan mekanika kuantum, dengan bahasa yang mudah dipahami.'
        ]);

        Book::create([
            'category_id' => $getNovelCategory->id,
            'title' => 'The Great Gatsby',
            'author' => 'F. Scott Fitzgerald',
            'description' => 'Novel ini menceritakan kisah Jay Gatsby, seorang pria kaya yang terkenal dengan pesta-pesta mewahnya, dan hubungannya dengan cinta dan ambisi di era Jazz Age.'
        ]);
    }
}
