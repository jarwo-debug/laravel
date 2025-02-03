<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kategori::create([
            'nama' => 'Ngopi',
            'slug' => 'ngopi',
            'color' => 'red'
        ]);
        Kategori::create([
            'nama' => 'Bengkulu Talk Show',
            'slug' => 'bengkulu-talk-show',
            'color' => 'green'
        ]);
        Kategori::create([
            'nama' => 'Ngobrol Prestasi',
            'slug' => 'ngobrol-prestasi',
            'color' => 'blue'
        ]);
        Kategori::create([
            'nama' => 'Menu Kito',
            'slug' => 'menu-kito',
            'color' => 'yellow'
        ]);
    }
}
