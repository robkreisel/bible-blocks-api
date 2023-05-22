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
            "testament" => "old",
            'category' => 'history',
            'hebrew_category' => 'torah',
            'year' => '1430 BC',
            'era' => 'creation',
            'author' => 'Moses',
            'order' => 1,
            'hebrew_order' => 1,
        ]);
        Book::factory()->create([
            'name' => 'Exodus',
            'symbol' => 'Ex',
            "testament" => "old",
            'category' => 'history',
            'hebrew_category' => 'torah',
            'year' => '1400 BC',
            'era' => 'exodus',
            'author' => 'Moses',
            'order' => 1,
            'hebrew_order' => 2,
        ]);
        Book::factory()->create([
            'name' => 'Leviticus',
            'symbol' => 'Lv',
            "testament" => "old",
            'category' => 'history',
            'hebrew_category' => 'torah',
            'year' => '1445 BC',
            'era' => 'exodus',
            'author' => 'Moses',
            'order' => 1,
            'hebrew_order' => 3,
        ]);
        Book::factory()->create([
            'name' => 'Numbers',
            'symbol' => 'Nu',
            "testament" => "old",
            'category' => 'history',
            'hebrew_category' => 'torah',
            'year' => '1400 BC',
            'era' => 'exodus',
            'author' => 'Moses',
            'order' => 1,
            'hebrew_order' => 4,
        ]);
        Book::factory()->create([
            'name' => 'Deuteronomy',
            'symbol' => 'Dt',
            "testament" => "old",
            'category' => 'history',
            'hebrew_category' => 'torah',
            'year' => '1400 BC',
            'era' => 'exodus',
            'author' => 'Moses',
            'order' => 1,
            'hebrew_order' => 5,
        ]);
        Book::factory()->create([
            "name" => "Joshua",
            "symbol" => "Js",
            "testament" => "old",
            "category" => "history",
            "hebrew_category" => "prophets",
            "year" => "1375 BC",
            "era" => "conquest",
            "author" => "Joshua",
            "order" => 1,
            'hebrew_order' => 6,
        ]);
        Book::factory()->create([
            "name" => "Judges",
            "symbol" => "Jg",
            "testament" => "old",
            "hebrew_category" => "prophets",
            "year" => "1050 BC",
            "era" => "judges",
            "author" => "Samuel",
            "order" => 1,
            'hebrew_order' => 7,
        ]);
        Book::factory()->create([
            "name" => "Ruth",
            "symbol" => "Ru",
            "testament" => "old",
            "category" => "history",
            "hebrew_category" => "writings",
            "year" => "1050-1000 BC",
            "era" => "judges",
            "author" => "Samuel",
            "order" => 1,
            'hebrew_order' => 31,
        ]);
        Book::factory()->create([
            "name" => "1 Samuel",
            "symbol" => "1Sa",
            "testament" => "old",
            "category" => "history",
            "hebrew_category" => "prophets",
            "year" => "900 BC",
            "era" => "kingdom",
            "author" => "Samuel",
            "order" => 1,
            'hebrew_order' => 8,
        ]);
        Book::factory()->create([
            "name" => "2 Samuel",
            "symbol" => "2Sa",
            "testament" => "old",
            "category" => "history",
            "hebrew_category" => "prophets",
            "year" => "900 BC",
            "era" => "kingdom",
            "author" => "Samuel",
            "order" => 1,
            'hebrew_order' => 9,
        ]);
        Book::factory()->create([
            "name" => "1 Kings",
            "symbol" => "1Ki",
            "testament" => "old",
            "category" => "history",
            "hebrew_category" => "prophets",
            "year" => "550 BC",
            "era" => "kingdom",
            "author" => "Unknown",
            "order" => 1,
            'hebrew_order' => 10,
        ]);
        Book::factory()->create([
            "name" => "2 Kings",
            "symbol" => "2Ki",
            "testament" => "old",
            "category" => "history",
            "hebrew_category" => "prophets",
            "year" => "550 BC",
            "era" => "kingdom",
            "author" => "Unknown",
            "order" => 1,
            'hebrew_order' => 11,
        ]);
        Book::factory()->create([
            "name" => "1 Chronicles",
            "symbol" => "1Ch",
            "testament" => "old",
            "category" => "history",
            "hebrew_category" => "writings",
            "year" => "450 BC",
            "era" => "kingdom",
            "author" => "Unknown",
            "order" => 1,
            'hebrew_order' => 38,
        ]);
        Book::factory()->create([
            "name" => "2 Chronicles",
            "symbol" => "2Ch",
            "testament" => "old",
            "category" => "history",
            "hebrew_category" => "writings",
            "year" => "340 BC",
            "era" => "kingdom",
            "author" => "Unknown",
            "order" => 1,
            'hebrew_order' => 39,
        ]);
        Book::factory()->create([
            "name" => "Ezra",
            "symbol" => "Er",
            "testament" => "old",
            "category" => "history",
            "hebrew_category" => "writings",
            "year" => "450 BC",
            "era" => "return",
            "author" => "Ezra",
            "order" => 1,
            'hebrew_order' => 36,
        ]);
        Book::factory()->create([
            "name" => "Nehemiah",
            "symbol" => "Ne",
            "testament" => "old",
            "category" => "history",
            "hebrew_category" => "writings",
            "year" => "425-400 BC",
            "era" => "return",
            "author" => "Nehemiah",
            "order" => 1,
            'hebrew_order' => 37,
        ]);
        Book::factory()->create([
            "name" => "Esther",
            "symbol" => "Es",
            "testament" => "old",
            "category" => "history",
            "hebrew_category" => "writings",
            "year" => "450 BC",
            "era" => "return",
            "author" => "Unknown",
            "order" => 1,
            'hebrew_order' => 34,
        ]);
        Book::factory()->create([
            "name" => "Job",
            "symbol" => "Jb",
            "testament" => "old",
            "category" => "writing",
            "hebrew_category" => "writings",
            "year" => "1900 BC",
            "era" => "patriarch",
            "author" => "Unknown",
            "order" => 1,
            'hebrew_order' => 29,
        ]);
        Book::factory()->create([
            "name" => "Psalms",
            "symbol" => "Ps",
            "testament" => "old",
            "category" => "writing",
            "hebrew_category" => "writings",
            "year" => "1400-450 BC",
            "era" => "kingdom",
            "author" => "Various",
            "order" => 1,
            'hebrew_order' => 27,
        ]);
        Book::factory()->create([
            "name" => "Proverbs",
            "symbol" => "Pr",
            "testament" => "old",
            "category" => "writing",
            "hebrew_category" => "writings",
            "year" => "970-675 BC",
            "era" => "kingdom",
            "author" => "Solomon",
            "order" => 1,
            'hebrew_order' => 28,
        ]);
        Book::factory()->create([
            "name" => "Ecclesiastes",
            "symbol" => "Ec",
            "testament" => "old",
            "category" => "writing",
            "hebrew_category" => "writings",
            "year" => "940-931 BC",
            "era" => "kingdom",
            "author" => "Solomon",
            "order" => 1,
            'hebrew_order' => 33,
        ]);
        Book::factory()->create([
            "name" => "Song of Songs",
            "symbol" => "Ss",
            "testament" => "old",
            "category" => "writing",
            "hebrew_category" => "writings",
            "year" => "970-950 BC",
            "era" => "kingdom",
            "author" => "Solomon",
            "order" => 1,
            'hebrew_order' => 30,
        ]);
        Book::factory()->create([
            "name" => "Isaiah",
            "symbol" => "Is",
            "testament" => "old",
            "category" => "prophecy",
            "hebrew_category" => "prophets",
            "year" => "700-680 BC",
            "era" => "kingdom",
            "author" => "Isaiah",
            "order" => 1,
            'hebrew_order' => 12,
        ]);
        Book::factory()->create([
            "name" => "Jeremiah",
            "symbol" => "Je",
            "testament" => "old",
            "category" => "prophecy",
            "hebrew_category" => "prophets",
            "year" => "585-570 BC",
            "era" => "exile",
            "author" => "Jeremiah",
            "order" => 1,
            'hebrew_order' => 13,
        ]);
        Book::factory()->create([
            "name" => "Lamentations",
            "symbol" => "La",
            "testament" => "old",
            "category" => "prophecy",
            "hebrew_category" => "writings",
            "year" => "585 BC",
            "era" => "exile",
            "author" => "Jeremiah",
            "order" => 1,
            'hebrew_order' => 32,
        ]);
        Book::factory()->create([
            "name" => "Ezekiel",
            "symbol" => "Ez",
            "testament" => "old",
            "category" => "prophecy",
            "hebrew_category" => "prophets",
            "year" => "590-570 BC",
            "era" => "exile",
            "author" => "Ezekiel",
            "order" => 1,
            'hebrew_order' => 14,
        ]);
        Book::factory()->create([
            "name" => "Daniel",
            "symbol" => "Da",
            "testament" => "old",
            "category" => "prophecy",
            "hebrew_category" => "writings",
            "year" => "536-530 BC",
            "era" => "exile",
            "author" => "Daniel",
            "order" => 1,
            'hebrew_order' => 35,
        ]);
        Book::factory()->create([
            "name" => "Hosea",
            "symbol" => "Ho",
            "testament" => "old",
            "category" => "prophecy",
            "hebrew_category" => "prophets",
            "year" => "750-710 BC",
            "era" => "kingdom",
            "author" => "Hosea",
            "order" => 1,
            'hebrew_order' => 15,
        ]);
        Book::factory()->create([
            "name" => "Joel",
            "symbol" => "Jo",
            "testament" => "old",
            "category" => "prophecy",
            "hebrew_category" => "prophets",
            "year" => "Unknown",
            "era" => "kingdom",
            "author" => "Joel",
            "order" => 1,
            'hebrew_order' => 16,
        ]);
        Book::factory()->create([
            "name" => "Amos",
            "symbol" => "Am",
            "testament" => "old",
            "category" => "prophecy",
            "hebrew_category" => "prophets",
            "year" => "750 BC",
            "era" => "kingdom",
            "author" => "Amos",
            "order" => 1,
            'hebrew_order' => 17,
        ]);
        Book::factory()->create([
            "name" => "Obadiah",
            "symbol" => "Ob",
            "testament" => "old",
            "category" => "prophecy",
            "hebrew_category" => "prophets",
            "year" => "Unknown",
            "era" => "kingdom",
            "author" => "Obadiah",
            "order" => 1,
            'hebrew_order' => 18,
        ]);
        Book::factory()->create([
            "name" => "Jonah",
            "symbol" => "Jh",
            "testament" => "old",
            "category" => "prophecy",
            "hebrew_category" => "prophets",
            "year" => "772-754 BC",
            "era" => "kingdom",
            "author" => "Jonah",
            "order" => 1,
            'hebrew_order' => 19,
        ]);
        Book::factory()->create([
            "name" => "Micah",
            "symbol" => "Mi",
            "testament" => "old",
            "category" => "prophecy",
            "hebrew_category" => "prophets",
            "year" => "735-710 BC",
            "era" => "kingdom",
            "author" => "Micah",
            "order" => 1,
            'hebrew_order' => 20,
        ]);
        Book::factory()->create([
            "name" => "Nahum",
            "symbol" => "Na",
            "testament" => "old",
            "category" => "prophecy",
            "hebrew_category" => "prophets",
            "year" => "650 BC",
            "era" => "kingdom",
            "author" => "Nahum",
            "order" => 1,
            'hebrew_order' => 21,
        ]);
        Book::factory()->create([
            "name" => "Habbakuk",
            "symbol" => "Ha",
            "testament" => "old",
            "category" => "prophecy",
            "hebrew_category" => "prophets",
            "year" => "640 BC",
            "era" => "kingdom",
            "author" => "Habbakuk",
            "order" => 1,
            'hebrew_order' => 22,
        ]);
        Book::factory()->create([
            "name" => "Zephaniah",
            "symbol" => "Zp",
            "testament" => "old",
            "category" => "prophecy",
            "hebrew_category" => "prophets",
            "year" => "635-625 BC",
            "era" => "kingdom",
            "author" => "Zephaniah",
            "order" => 1,
            'hebrew_order' => 23,
        ]);
        Book::factory()->create([
            "name" => "Haggai",
            "symbol" => "Hg",
            "testament" => "old",
            "category" => "prophecy",
            "hebrew_category" => "prophets",
            "year" => "526 BC",
            "era" => "kingdom",
            "author" => "Haggai",
            "order" => 1,
            'hebrew_order' => 24,
        ]);
        Book::factory()->create([
            "name" => "Zechariah",
            "symbol" => "Zc",
            "testament" => "old",
            "category" => "prophecy",
            "hebrew_category" => "prophets",
            "year" => "520-484 BC",
            "era" => "kingdom",
            "author" => "Zechariah",
            "order" => 1,
            'hebrew_order' => 25,
        ]);
        Book::factory()->create([
            "name" => "Malachi",
            "symbol" => "Ma",
            "testament" => "old",
            "category" => "prophecy",
            "hebrew_category" => "prophets",
            "year" => "433-424 BC",
            "era" => "kingdom",
            "author" => "Malachi",
            "order" => 1,
            'hebrew_order' => 26,
        ]);
        Book::factory()->create([
            "name" => "Matthew",
            "symbol" => "Mt",
            "testament" => "new",
            "category" => "history",
            "year" => "60-65 AD",
            "era" => "gospel",
            "author" => "Matthew",
            "order" => 1
        ]);
        Book::factory()->create([
            "name" => "Mark",
            "symbol" => "Mk",
            "testament" => "new",
            "category" => "history",
            "year" => "50-60 AD",
            "era" => "gospel",
            "author" => "John Mark",
            "order" => 1
        ]);
        Book::factory()->create([
            "name" => "Luke",
            "symbol" => "Lk",
            "testament" => "new",
            "category" => "history",
            "year" => "60-61 AD",
            "era" => "gospel",
            "author" => "Luke",
            "order" => 1
        ]);
        Book::factory()->create([
            "name" => "John",
            "symbol" => "Jn",
            "testament" => "new",
            "category" => "history",
            "year" => "80-90 AD",
            "era" => "gospel",
            "author" => "John",
            "order" => 1
        ]);
        Book::factory()->create([
            "name" => "Acts",
            "symbol" => "Ac",
            "testament" => "new",
            "category" => "history",
            "year" => "62 AD",
            "era" => "church",
            "author" => "Luke",
            "order" => 1
        ]);
        Book::factory()->create([
            "name" => "Romans",
            "symbol" => "Ro",
            "testament" => "new",
            "category" => "paulsLetter",
            "year" => "56 AD",
            "era" => "mission",
            "author" => "Paul",
            "order" => 1
        ]);
        Book::factory()->create([
            "name" => "1 Corinthians",
            "symbol" => "1Co",
            "testament" => "new",
            "category" => "paulsLetter",
            "year" => "55 AD",
            "era" => "mission",
            "author" => "Paul",
            "order" => 1
        ]);
        Book::factory()->create([
            "name" => "2 Corinthians",
            "symbol" => "2Co",
            "testament" => "new",
            "category" => "paulsLetter",
            "year" => "55-56 AD",
            "era" => "mission",
            "author" => "Paul",
            "order" => 1
        ]);
        Book::factory()->create([
            "name" => "Galatians",
            "symbol" => "Ga",
            "testament" => "new",
            "category" => "paulsLetter",
            "year" => "49-50 AD",
            "era" => "mission",
            "author" => "Paul",
            "order" => 1
        ]);
        Book::factory()->create([
            "name" => "Ephesians",
            "symbol" => "Ep",
            "testament" => "new",
            "category" => "paulsLetter",
            "year" => "60-62 AD",
            "era" => "mission",
            "author" => "Paul",
            "order" => 1
        ]);
        Book::factory()->create([
            "name" => "Philippians",
            "symbol" => "Ph",
            "testament" => "new",
            "category" => "paulsLetter",
            "year" => "60-62 AD",
            "era" => "mission",
            "author" => "Paul",
            "order" => 1
        ]);
        Book::factory()->create([
            "name" => "Colossians",
            "symbol" => "Cs",
            "testament" => "new",
            "category" => "paulsLetter",
            "year" => "60-62 AD",
            "era" => "mission",
            "author" => "Paul",
            "order" => 1
        ]);
        Book::factory()->create([
            "name" => "1 Thessalonians",
            "symbol" => "1Th",
            "testament" => "new",
            "category" => "paulsLetter",
            "year" => "51 AD",
            "era" => "mission",
            "author" => "Paul",
            "order" => 1
        ]);
        Book::factory()->create([
            "name" => "2 Thessalonians",
            "symbol" => "2Th",
            "testament" => "new",
            "category" => "paulsLetter",
            "year" => "51-52 AD",
            "era" => "mission",
            "author" => "Paul",
            "order" => 1
        ]);
        Book::factory()->create([
            "name" => "1 Timothy",
            "symbol" => "1Ti",
            "testament" => "new",
            "category" => "paulsLetter",
            "year" => "62-64 AD",
            "era" => "mission",
            "author" => "Paul",
            "order" => 1
        ]);
        Book::factory()->create([
            "name" => "2 Timothy",
            "symbol" => "2Ti",
            "testament" => "new",
            "category" => "paulsLetter",
            "year" => "66-67 AD",
            "era" => "mission",
            "author" => "Paul",
            "order" => 1
        ]);
        Book::factory()->create([
            "name" => "Titus",
            "symbol" => "Tt",
            "testament" => "new",
            "category" => "paulsLetter",
            "year" => "63 AD",
            "era" => "mission",
            "author" => "Paul",
            "order" => 1
        ]);
        Book::factory()->create([
            "name" => "Philemon",
            "symbol" => "Pl",
            "testament" => "new",
            "category" => "paulsLetter",
            "year" => "60 or 61 AD",
            "era" => "mission",
            "author" => "Paul",
            "order" => 1
        ]);
        Book::factory()->create([
            "name" => "Hebrews",
            "symbol" => "He",
            "testament" => "new",
            "category" => "generalLetter",
            "year" => "67-69 AD",
            "era" => "mission",
            "author" => "Unknown",
            "order" => 1
        ]);
        Book::factory()->create([
            "name" => "James",
            "symbol" => "Ja",
            "testament" => "new",
            "category" => "generalLetter",
            "year" => "44-49 AD",
            "era" => "mission",
            "author" => "James",
            "order" => 1
        ]);
        Book::factory()->create([
            "name" => "1 Peter",
            "symbol" => "1Pe",
            "testament" => "new",
            "category" => "generalLetter",
            "year" => "64 AD",
            "era" => "mission",
            "author" => "Peter",
            "order" => 1
        ]);
        Book::factory()->create([
            "name" => "2 Peter",
            "symbol" => "2Pe",
            "testament" => "new",
            "category" => "generalLetter",
            "year" => "67 AD",
            "era" => "mission",
            "author" => "Peter",
            "order" => 1
        ]);
        Book::factory()->create([
            "name" => "1 John",
            "symbol" => "1Jn",
            "testament" => "new",
            "category" => "generalLetter",
            "year" => "90-95 AD",
            "era" => "mission",
            "author" => "John",
            "order" => 1
        ]);
        Book::factory()->create([
            "name" => "2 John",
            "symbol" => "2Jn",
            "testament" => "new",
            "category" => "generalLetter",
            "year" => "90-95 AD",
            "era" => "mission",
            "author" => "John",
            "order" => 1
        ]);
        Book::factory()->create([
            "name" => "3 John",
            "symbol" => "3Jn",
            "testament" => "new",
            "category" => "generalLetter",
            "year" => "90-95 AD",
            "era" => "mission",
            "author" => "John",
            "order" => 1
        ]);
        Book::factory()->create([
            "name" => "Jude",
            "symbol" => "Ju",
            "testament" => "new",
            "category" => "generalLetter",
            "year" => "75 AD",
            "era" => "mission",
            "author" => "Jude",
            "order" => 1
        ]);
        Book::factory()->create([
            "name" => "Revelation",
            "symbol" => "Re",
            "testament" => "new",
            "category" => "prophecy",
            "year" => "90-95 AD",
            "era" => "mission",
            "author" => "John",
            "order" => 1
        ]);
    }
}
