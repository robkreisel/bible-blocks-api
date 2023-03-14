<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::factory()->create([
            'name' => 'Genesis',
            'symbol' => 'Ge',
            'category' => 'history',
            'year' => '1430 BC',
            'era' => 'creation',
            'author' => 'Moses',
            'order' => 1
        ]);

        Book::factory()->create([
            'name' => 'Exodus',
            'symbol' => 'Ex',
            'category' => 'history',
            'year' => '1400 BC',
            'era' => 'exodus',
            'author' => 'Moses',
            'order' => 1
        ]);

        Book::factory()->create([
            'name' => 'Leviticus',
            'symbol' => 'Lv',
            'category' => 'history',
            'year' => '1445 BC',
            'era' => 'exodus',
            'author' => 'Moses',
            'order' => 1
        ]);

        Book::factory()->create([
            'name' => 'Numbers',
            'symbol' => 'Nu',
            'category' => 'history',
            'year' => '1400 BC',
            'era' => 'exodus',
            'author' => 'Moses',
            'order' => 1
        ]);

        Book::factory()->create([
            'name' => 'Deuteronomy',
            'symbol' => 'Dt',
            'category' => 'history',
            'year' => '1400 BC',
            'era' => 'exodus',
            'author' => 'Moses',
            'order' => 1
        ]);
    }
}
