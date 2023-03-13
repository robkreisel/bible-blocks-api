<?php

namespace Database\Seeders;

use App\Models\Chapter;
use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChapterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Chapter::factory()->create([
            'book_id' => 1, // Genesis
            'chapter' => 1,
            'number_verses' => 31
        ]);
        Chapter::factory()->create([
            'book_id' => 1, // Genesis
            'chapter' => 2,
            'number_verses' => 25
        ]);
        Chapter::factory()->create([
            'book_id' => 1, // Genesis
            'chapter' => 3,
            'number_verses' => 24
        ]);
        Chapter::factory()->create([
            'book_id' => 2, // Exodus
            'chapter' => 1,
            'number_verses' => 22
        ]);
        Chapter::factory()->create([
            'book_id' => 2, // Exodus
            'chapter' => 2,
            'number_verses' => 25
        ]);
        Chapter::factory()->create([
            'book_id' => 2, // Exodus
            'chapter' => 3,
            'number_verses' => 22
        ]);
    }
}
