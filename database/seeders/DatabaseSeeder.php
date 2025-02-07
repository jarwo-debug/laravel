<?php

namespace Database\Seeders;

use App\Models\Post;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Category;
use App\Models\CategoryProgram;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name' => 'Jarwo',
            'username' => 'jarwoetc',
            'email' => 'jarwoshankz@gmail.com',
            'password' => bcrypt('password')
        ]);

        $this->call([CategorySeeder::class, UserSeeder::class, CategoryProgramSeeder::class]);
        Post::factory(20)->recycle([
            Category::all(),
            User::all(),
            CategoryProgram::all()
        ])->create();
    }
}
