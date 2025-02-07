<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\CategoryProgram;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategoryProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CategoryProgram::create([
            'name' => 'Ngopi',
            'slug' => 'ngopi',
            'color' => 'red'
        ]);
        CategoryProgram::create([
            'name' => 'Bengkulu Talk Show',
            'slug' => 'bengkulu-talk-show',
            'color' => 'green'
        ]);
        CategoryProgram::create([
            'name' => 'Ngobrol Prestasi',
            'slug' => 'ngobrol-prestasi',
            'color' => 'blue'
        ]);
        CategoryProgram::create([
            'name' => 'Menu Kito',
            'slug' => 'menu-kito',
            'color' => 'yellow'
        ]);
    }
}
