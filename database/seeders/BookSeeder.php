<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Book::create([
        //     'judul'=> 'Kumpulan Sajak',
        //     'tanggal_terbit'=> date('Y-m-d'),
        //     'jumlah_halaman'=> 65,
        //     'cover' => 'cover.jpg',
        // ]);
        for ($i = 0; $i < 100; $i++) {
            book::create([
                'judul'=> 'Pantun Jenaka',
                'tanggal_terbit'=> date('Y-m-d'),
                'jumlah_halaman'=> 185,
                'cover' => 'c_Pantun.jpg',
            ]);
        }
    }
}
