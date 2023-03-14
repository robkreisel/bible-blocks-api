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
        // Genesis
        $genesis = [31, 25, 24, 26, 32, 22, 24, 22, 29, 32, 32, 20, 18, 24, 21, 16, 27, 33, 38, 18, 34, 24, 20, 67, 34,
            35, 46, 22, 35, 43, 55, 32, 20, 31, 29, 43, 36, 30, 23, 23, 57, 38, 34, 34, 28, 34, 31, 22, 33, 26];
        for ($i = 1; $i <= count($genesis); $i++) {
            Chapter::factory()->create(['book_id' => 1, 'chapter' => $i, 'number_verses' => $genesis[$i - 1]]);
        }

        // Exodus
        $exodus = [22, 25, 22, 31, 23, 30, 25, 32, 35, 29, 10, 51, 22, 31, 27, 36, 16, 27, 25, 26, 36, 31, 33, 18, 40,
            37, 21, 43, 46, 38, 18, 35, 23, 35, 35, 38, 29, 31, 43, 38];
        for ($i = 1; $i <= count($exodus); $i++) {
            Chapter::factory()->create(['book_id' => 2, 'chapter' => $i, 'number_verses' => $exodus[$i - 1]]);
        }

        // Leviticus
        $leviticus = [17, 16, 17, 35, 19, 30, 38, 36, 24, 20, 47, 8, 59, 57, 33, 34, 16, 30, 37, 27, 24, 33, 44, 23, 55,
            46, 34];
        for ($i = 1; $i <= count($leviticus); $i++) {
            Chapter::factory()->create(['book_id' => 3, 'chapter' => $i, 'number_verses' => $leviticus[$i - 1]]);
        }

        // Numbers
        $numbers = [54, 34, 51, 49, 31, 27, 89, 26, 23, 36, 35, 16, 33, 45, 41, 50, 13, 32, 22, 29, 35, 41, 30, 25, 18,
            65, 23, 31, 40, 16, 54, 42, 56, 29, 34, 13];
        for ($i = 1; $i <= count($numbers); $i++) {
            Chapter::factory()->create(['book_id' => 4, 'chapter' => $i, 'number_verses' => $numbers[$i - 1]]);
        }

        // Deuteronomy
        $deuteronomy = [46, 37, 29, 49, 33, 25, 26, 20, 29, 22, 32, 32, 18, 29, 23, 22, 20, 22, 21, 20, 23, 30, 25, 22,
            19, 19, 26, 68, 29, 20, 30, 52, 29, 12];
        for ($i = 1; $i <= count($deuteronomy); $i++) {
            Chapter::factory()->create(['book_id' => 5, 'chapter' => $i, 'number_verses' => $deuteronomy[$i - 1]]);
        }
    }
}
