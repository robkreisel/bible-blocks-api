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
        $genesis = [31, 25, 24, 26, 32, 22, 24, 22, 29, 32, 32, 20, 18, 24, 21, 16, 27, 33, 38, 18, 34, 24, 20, 67, 34,
            35, 46, 22, 35, 43, 55, 32, 20, 31, 29, 43, 36, 30, 23, 23, 57, 38, 34, 34, 28, 34, 31, 22, 33, 26];

        $exodus = [22, 25, 22, 31, 23, 30, 25, 32, 35, 29, 10, 51, 22, 31, 27, 36, 16, 27, 25, 26, 36, 31, 33, 18, 40,
            37, 21, 43, 46, 38, 18, 35, 23, 35, 35, 38, 29, 31, 43, 38];

        $leviticus = [17, 16, 17, 35, 19, 30, 38, 36, 24, 20, 47, 8, 59, 57, 33, 34, 16, 30, 37, 27, 24, 33, 44, 23, 55,
            46, 34];

        $numbers = [54, 34, 51, 49, 31, 27, 89, 26, 23, 36, 35, 16, 33, 45, 41, 50, 13, 32, 22, 29, 35, 41, 30, 25, 18,
            65, 23, 31, 40, 16, 54, 42, 56, 29, 34, 13];

        $deuteronomy = [46, 37, 29, 49, 33, 25, 26, 20, 29, 22, 32, 32, 18, 29, 23, 22, 20, 22, 21, 20, 23, 30, 25, 22,
            19, 19, 26, 68, 29, 20, 30, 52, 29, 12];

        $joshua = [18, 24, 17, 24, 15, 27, 26, 35, 27, 43, 23, 24, 33, 15, 63, 10, 18, 28, 51, 9, 45, 34, 16, 33];

        $judges = [36, 23, 31, 24, 31, 40, 25, 35, 57, 18, 40, 15, 25, 20, 20, 31, 13, 31, 30, 48, 25];

        $ruth = [22, 23, 18, 22];

        $samuel1 = [28, 36, 21, 22, 12, 21, 17, 22, 27, 27, 15, 25, 23, 52, 35, 23, 58, 30, 24, 42, 15, 23, 29, 22, 44,
            25, 12, 25, 11, 31, 13];

        $samuel2 = [27, 32, 39, 12, 25, 23, 29, 18, 13, 19, 27, 31, 39, 33, 37, 23, 29, 33, 43, 26, 22, 51, 39, 25];

        $kings1 = [53, 46, 28, 34, 18, 38, 51, 66, 28, 29, 43, 33, 34, 31, 34, 34, 24, 46, 21, 43, 29, 53];

        $kings2 = [18, 25, 27, 44, 27, 33, 20, 29, 37, 36, 21, 21, 25, 29, 38, 20, 41, 37, 37, 21, 26, 20, 37, 20, 30];

        $chronicles1 = [54, 55, 24, 43, 26, 81, 40, 40, 44, 14, 47, 40, 14, 17, 29, 43, 27, 17, 19, 8, 30, 19, 32, 31,
            31, 32, 34, 21, 30];

        $chronicles2 = [17, 18, 17, 22, 14, 42, 22, 18, 31, 19, 23, 16, 22, 15, 19, 14, 19, 34, 11, 37, 20, 12, 21, 27,
            28, 23, 9, 27, 36, 27, 21, 33, 25, 33, 27, 23];

        $ezra = [11, 70, 13, 24, 17, 22, 28, 36, 15, 44];

        $nehemiah = [11, 20, 32, 23, 19, 19, 73, 18, 38, 39, 36, 47, 31];

        $esther = [22, 23, 15, 17, 14, 14, 10, 17, 32, 3];

        $this->createChaptersForBook($genesis, 1);
        $this->createChaptersForBook($exodus, 2);
        $this->createChaptersForBook($leviticus, 3);
        $this->createChaptersForBook($numbers, 4);
        $this->createChaptersForBook($deuteronomy, 5);
        $this->createChaptersForBook($joshua, 6);
        $this->createChaptersForBook($judges, 7);
        $this->createChaptersForBook($ruth, 8);
        $this->createChaptersForBook($samuel1, 9);
        $this->createChaptersForBook($samuel2, 10);
        $this->createChaptersForBook($kings1, 11);
        $this->createChaptersForBook($kings2, 12);
        $this->createChaptersForBook($chronicles1, 13);
        $this->createChaptersForBook($chronicles2, 13);
        $this->createChaptersForBook($ezra, 15);
        $this->createChaptersForBook($nehemiah, 16);
        $this->createChaptersForBook($esther, 17);
    }

    private function createChaptersForBook($versesArray, $bookId)
    {
        for ($chapter = 1; $chapter <= count($versesArray); $chapter++) {
            Chapter::factory()->create([
                'book_id' => $bookId,
                'chapter' => $chapter,
                'number_verses' => $versesArray[$chapter - 1]
            ]);
        }
    }
}
